<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetosController extends Controller
{
	public function index()
	{
		// $arrayRemessa = array_map('pathinfo', \File::files('json/projetos'));
		// $projetos = array_pluck($arrayRemessa, 'basename');

		// recebe todas as informações
		$content_all = array();

		$f_projetos = file_get_contents("json/projetos.json");
		$j_projetos = json_decode($f_projetos, true);

		$content_all['projetos'] = $j_projetos;

		$f_institucional = file_get_contents("json/institucional.json");
		$j_institucional = json_decode($f_institucional, true);
		
		$content_all['institucional'] = $j_institucional;

		return view("welcome", compact("content_all"));

	}
}
