from email.mime import image
from multiprocessing import context
from unittest.util import _MAX_LENGTH
from django.shortcuts import render
import pandas as pd
import matplotlib.pyplot as plt
import streamlit as st 
from io import BytesIO
import base64
from EDados.forms import MeuFormulario



def index(request):
    Q = 'TP_FAIXA_ETARIA'
    prova = 'NU_NOTA_MT'

    if request.method == 'GET':
        Microdado_Amostra = pd.read_csv('/home/icaro/Documentos/Faculdade/5 semestre/matérias/Web-II/Projeto/projeto_django/python-puto/Microdado_PROVA_CH_N_Amostra.csv', sep= ';', encoding = "ISO-8859-1")
        Amostra = [prova, Q]
        ChAmostra = Microdado_Amostra.filter(items = Amostra)
        ChAmostra = ChAmostra.sort_values(by=[Q])
        
        NU_NOTA_CNCHAmostra = ChAmostra[prova]
        Pessoas_na_Casa_Ch_Amostra = ChAmostra[Q]
        
        limits = [300, 960]
        plt.switch_backend('AGG')
        plt.figure(figsize = (10,5))
        plt.scatter(NU_NOTA_CNCHAmostra, Pessoas_na_Casa_Ch_Amostra)
        # plt.plot(NU_NOTA_CNCHAmostra, Pessoas_na_Casa_Ch_Amostra)
        plt.xlim(limits)
        plt.title('Ciências da Humanas, Acertos VS Questão ')
        plt.show()
        st.pyplot(plt)
        buffer = BytesIO()
        plt.savefig(buffer, format='png')
        buffer.seek(0)
        image_png = buffer.getvalue()
        graph = base64.b64encode(image_png)
        graph = graph.decode('utf-8')
        buffer.close()
        form = MeuFormulario(request.POST)

        if form.is_valid():
            print(form.changed_data)
        else:
            pass

        context = {
            'form' : form,
            'graph' : graph
        }
        form = MeuFormulario()
        context = {
            'form' : form,
            'graph' : graph
        }
        return render(request, 'index1.html', context=context)
    else:
        form = MeuFormulario(request.POST)
        Q = form.data['questao']
        prova = form.data['nota']

        Microdado_Amostra = pd.read_csv('/home/icaro/Documentos/Faculdade/5 semestre/matérias/Web-II/Projeto/projeto_django/python-puto/Microdado_PROVA_CH_N_Amostra.csv', sep= ';', encoding = "ISO-8859-1")
        Amostra = [prova, Q]
        ChAmostra = Microdado_Amostra.filter(items = Amostra)
        ChAmostra = ChAmostra.sort_values(by=[Q])
        
        NU_NOTA_CNCHAmostra = ChAmostra[prova]
        Pessoas_na_Casa_Ch_Amostra = ChAmostra[Q]
        
        limits = [300, 960]
        plt.switch_backend('AGG')
        plt.figure(figsize = (10,5))
        plt.scatter(NU_NOTA_CNCHAmostra, Pessoas_na_Casa_Ch_Amostra)
        # plt.plot(NU_NOTA_CNCHAmostra, Pessoas_na_Casa_Ch_Amostra)
        plt.xlim(limits)
        plt.title('Ciências da Humanas, Acertos VS Questão ')
        plt.show()
        st.pyplot(plt)
        buffer = BytesIO()
        plt.savefig(buffer, format='png')
        buffer.seek(0)
        image_png = buffer.getvalue()
        graph = base64.b64encode(image_png)
        graph = graph.decode('utf-8')
        buffer.close()

        if form.is_valid():
            print(form.changed_data)
        else:
            pass

        context = {
            'form' : form,
            'graph' : graph
        }
        return render(request, 'index1.html', context=context)