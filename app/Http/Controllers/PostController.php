<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create($title, $message) {
        if(!$message || !$title) {
            return view('error', [ 'message' => 'Dados essenciais faltantes']);
        }

        
    }

    public function delete($post_id) {
        if(!$post_id) {
            return view('error', [ 'message' => 'ID de Post inválido']);
        }

        if($post_id < 1 || $post_id > 3) {
            return view('error', [ 'message' => 'Este Post não existe']);
        }

        return view('deleted', ['id' => $post_id ]);
    }
}
