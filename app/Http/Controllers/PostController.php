<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request) {
        $title = $request->input('title');
        $content = $request->input('content');

        if(!$content || !$title) {
            return view('error', [ 'message' => 'Dados essenciais faltantes']);
        }

        return view('message', ['title' => 'Post Criado', 'message' => 'O post foi cadastrado']);
    }

    public function delete($post_id) {
        if(!$post_id) {
            return view('error', [ 'message' => 'ID de Post inválido']);
        }

        if($post_id < 1 || $post_id > 3) {
            return view('error', [ 'message' => 'Este Post não existe']);
        }

        return view('message', ['title' => 'Post Excluído', 'message' => 'O post foi apagado']);
    }

    public function index() {
        return view('post');
    }
}
