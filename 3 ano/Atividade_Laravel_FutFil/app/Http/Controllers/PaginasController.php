<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
        return view('index');
    }

    public function quemSomos(){
        return view('quemSomos');
    }

    public function noticias(){
        return view('noticias');
    }

    public function contato(Request $request){
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $endereco = $request->input('endereco');
        $exampleRadios = $request->input('exampleRadios');


        return view('contato', [
            'nome' => $nome,
            'telefone' => $telefone,
            'endereco' => $endereco,
            'exampleRadios' => $exampleRadios
        ]);
        
    }

    public function partidas(){
        return view('partidas');
    }

    public function filmes(){
        return view('filmes');
    }

    public function show($id){

    }

}
