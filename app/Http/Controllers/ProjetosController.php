<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetosController extends Controller
{
	public function index()
	{
		$arrayRemessa = array_map('pathinfo', \File::files('json/projetos'));
		$projetos = array_pluck($arrayRemessa, 'basename');

		$content_all = array();
		foreach ($projetos as $content) {
			$json_file = file_get_contents("json/projetos/".$content);
			$array = json_decode($json_file, true);
			array_push($content_all, $array);
		}

		return view("projetos.listar", compact("content_all"));
	}
}
