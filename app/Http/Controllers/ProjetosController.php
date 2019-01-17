<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetosController extends Controller
{

    public function select_all($id=1, $id_aluno=1)
    {
        $content_all = array();
        $content_all['projetos']        = json_decode(file_get_contents("json/projetos.json"), true);       
        $content_all['institucional']   = json_decode(file_get_contents("json/institucional.json"), true);      
        $content_all['alunos']          = json_decode(file_get_contents("json/alunos.json"), true);

        foreach ($content_all['projetos'] as $content) {
            if ($content['id'] == $id) {
                $content_all['projeto'] = $content;     
            }
        }
        var_dump($content_all['alunos']);
        // foreach ($content_all['alunos'] as $content) {
        //     if ($content['id'] == $id_aluno) {
        //         $content_all['aluno'] = $content;     
        //     }
        // }

        return $content_all;

    }
    public function index()
    {   
        $content_all = $this->select_all();
        return view("welcome", compact("content_all"));
    }
    public function show($id){
        $content_all = $this->select_all($id);
        return view("projetos.show", compact("content_all"));
    }
    public function show_pupil($id){
        $content_all = $this->select_all(1, $id);
        return view("alunos.show", compact("content_all"));   
    }
}
