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
        $content_all['alunos'] = json_decode(file_get_contents("json/alunos.json"), true);

        foreach ($content_all['projetos'] as $content) {
            if ($content['id'] == $id) {
                $content_all['projeto'] = $content;     
            }
        }
        foreach ($content_all['alunos'] as $content) {
            if ($content['id'] == $id_aluno) {
                $content_all['aluno'] = $content;     
            }
        }

        if ($id_aluno != 1 && empty($content_all['aluno'])) {
            abort(404);
        }else if ($id != 1 && empty($content_all['projeto'])) {
            abort(404);
        }

        return $content_all;

    }
    public function index()
    {   
        $content_all = $this->select_all();
        return view("layout.app", compact("content_all"));
    }
    public function test(){
        $content_all = $this->select_all();
        return view("layout.app", compact("content_all"));
    }

    public function projetos(){
        abort(404);
    }
    public function projeto($id){
        $content_all = $this->select_all($id);
        return view("projetos.show", compact("content_all"));
    }

    public function parceiros(){
        abort(404);
    }
    public function parceiro(){
        abort(404);
    }
    public function alunos(){
        abort(404);
    }
    public function aluno($id){
        // abort(404);
        $content_all = $this->select_all(1, $id);
        return view("layout.aluno", compact("content_all"));   
    }
    public function sobre(){
        // abort(404);
        $content_all = $this->select_all();
        return view("about.show", compact("content_all"));      
    }
    public function contato(){
        abort(404);
        $content_all = $this->select_all();
        return view("layout.contato", compact("content_all"));      
    }
    public function new_index(){
        return view('renew.index');
    }

}
