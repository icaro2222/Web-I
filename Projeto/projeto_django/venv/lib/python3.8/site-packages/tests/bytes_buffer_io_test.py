import gzip
import io
import unittest

from bytesbufio import BytesBufferIO

TEXT = "Hello world.\n"


class BytesBufferIOTest(unittest.TestCase):
    def test_value_available_after_close(self):
        bytesout = BytesBufferIO()
        with io.TextIOWrapper(bytesout, encoding='utf-8') as textout:
            textout.write(TEXT)
        self.assertEqual(TEXT, bytesout.getvalue().decode('utf-8'))

    def test_value_available_after_close_with_gzip(self):
        bytesbufio = BytesBufferIO()
        with gzip.open(bytesbufio, mode="wt", encoding='utf-8') as textout:
            textout.write(TEXT)
        with gzip.open(io.BytesIO(bytesbufio.getvalue()), mode="rt") as textin:
            self.assertEqual(TEXT, textin.read())
