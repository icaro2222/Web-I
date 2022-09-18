import gzip
import io
import unittest

TEXT = "Hello world.\n"


class BytesIOTest(unittest.TestCase):
    def test_value_not_available_after_close(self):
        with self.assertRaises(ValueError, msg="I/O operation on closed file."):
            bytesio = io.BytesIO()
            with io.TextIOWrapper(bytesio, encoding='utf-8') as textout:
                textout.write(TEXT)
            bytesio.getvalue().decode('utf-8')

    def test_getvalue_before_close_sometimes_is_sufficient(self):
        # this works if io wrapper does not rely on doing something on close()
        # compare test_getvalue_before_close_does_not_work_with_gzip
        bytesio = io.BytesIO()
        with io.TextIOWrapper(bytesio, encoding='utf-8') as textout:
            textout.write(TEXT)
            textout.flush()
            bytes = bytesio.getvalue()
        with io.TextIOWrapper(io.BytesIO(bytes)) as textin:
            self.assertEqual(TEXT, textin.read())

    def test_with_underlying_bytearray_does_not_work(self):
        bytesbuf = bytearray()
        with io.TextIOWrapper(io.BytesIO(bytesbuf), encoding='utf-8') as textout:
            textout.write(TEXT)
        self.assertEqual('', bytesbuf.decode('utf-8'))

    def test_with_buffer_does_not_work(self):
        with self.assertRaises(ValueError, msg="I/O operation on closed file."):
            bytesio = io.BytesIO()
            with io.TextIOWrapper(bytesio, encoding='utf-8') as textout:
                textout.write(TEXT)
            bytesio.getbuffer()

    def test_getvalue_before_close_does_not_work_with_gzip(self):
        with self.assertRaises(EOFError, msg="Compressed file ended before the end-of-stream marker was reached"):
            bytesio = io.BytesIO()
            with gzip.open(bytesio, mode="wt", encoding='utf-8') as textout:
                textout.write(TEXT)
                textout.flush()
                gzipped_bytes = bytesio.getvalue()
            with gzip.open(io.BytesIO(gzipped_bytes), mode="rt") as textin:
                self.assertEqual(TEXT, textin.read())
