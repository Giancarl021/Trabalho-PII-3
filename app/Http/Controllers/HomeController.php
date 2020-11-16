<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = [
            [
                "id" => 1,
                "title" => "O mimimi atinge níveis alarmantes",
                "content" => "Foi detectado altos níveis de mimimi provenientes de alunos"
            ],
            [
                "id" => 2,
                "title" => "A hora de dormir está descontrolada",
                "content" => "Análises sugerem que boa parte da população dormem quando dá na telha"
            ],
            [
                "id" => 3,
                "title" => "Debug",
                "content" => "Este post é só pra debug mesmo"
            ]
        ];

        return view('home', compact('posts'));
    }
}
