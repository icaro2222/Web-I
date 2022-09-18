from random import choices
from django import forms


class MeuFormulario(forms.Form):

    choices_questao = ( ('Q001' ,'Questão 1'),('Q002', 'Questão 2'),
                ('Q003' ,'Questão 2'),('Q004', 'Questão 2'),
                ('Q005' ,'Questão 1'),('Q006', 'Questão 2'),
                ('Q007' ,'Questão 2'),('Q008', 'Questão 2'),
                ('Q009' ,'Questão 2'),('Q0010', 'Questão 2'),
                ('Q011' ,'Questão 1'),('Q012', 'Questão 2'),
                ('Q013' ,'Questão 2'),('Q014', 'Questão 2'),
                ('Q015' ,'Questão 1'),('Q016', 'Questão 2'),
                ('Q017' ,'Questão 2'),('Q018', 'Questão 2'),
                ('Q019' ,'Questão 1'),('Q020', 'Questão 2'),
                ('Q021' ,'Questão 2'),('Q022', 'Questão 2'),
                ('Q023' ,'Questão 1'),('Q024', 'Questão 2'),
                ('Q025' ,'Questão 2'),)
    
    choices_nota = (('NU_NOTA_MT' ,'Nota em Matemática'),    
                    ('NU_NOTA_CH', 'Nota em Ciências da Natureza'),
                    ('NU_NOTA_CN' ,'Nota em Ciências Humanas'),
                    ('NU_NOTA_MT', 'Questão 2'),
                    ('NU_NOTA_MT' ,'Questão 1'),
                    ('NU_NOTA_MT', 'Questão 2'),
                    ('NU_NOTA_MT' ,'Questão 2'),)

    questao = forms.ChoiceField(choices=choices_questao)
    nota = forms.ChoiceField(choices=choices_nota)