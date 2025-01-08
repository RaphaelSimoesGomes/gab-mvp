<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $questions = [
            [
                'id' => 1,
                'title' => 'Pergunta de Alternativa Única',
                'description' => 'Uma Pergunta de Alternativa Única é um tipo de questão em que há apenas uma resposta correta entre as opções apresentadas. O participante deve escolher a única alternativa válida. Esse formato é amplamente utilizado em provas, quizzes e avaliações objetivas.'
            ],
            [
                'id' => 2,
                'title' => 'Pergunta de Múltipla Escolha',
                'description' => 'Uma Pergunta de Múltipla Escolha é um tipo de questão em que o participante pode selecionar uma ou mais respostas corretas dentre várias opções apresentadas. Esse formato é útil quando há mais de uma alternativa válida para a questão.'
            ],
            [
                'id' => 3,
                'title' => 'Verdadeiro e Falso',
                'description' => 'Uma Pergunta de Verdadeiro ou Falso é um formato de questão em que o participante deve determinar se uma afirmação é verdadeira ou falsa. É um tipo simples e direto de avaliação, usado para medir o conhecimento básico ou compreensão de conceitos específicos.'
            ],
        ];

        return view('home', compact('questions'));
    }

    public function store(Request $request)
    {
        $selected = $request->input('selected', []);

        // Você pode processar ou salvar os dados no banco de dados aqui.
        // Exemplo:
        // SelectedQuestions::create(['user_id' => auth()->id(), 'questions' => json_encode($selected)]);

        return redirect()->route('home')->with('success', 'Seleção salva com sucesso!');
    }
}
