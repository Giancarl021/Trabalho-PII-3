<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['index', 'create', 'delete']);
    }
    public function create(Request $request) {
        $title = $request->input('title');
        $content = $request->input('content');

        $post = new Post();

        $this->validate($request, $post->rules, $post->messages);

        $insert = Post::create(compact('title', 'content'));
        if (!$insert) {
            return view('error', ['message' => 'Falha ao criar Post']);
        }
        
        return view('message', ['title' => 'Post Criado', 'message' => 'O post foi cadastrado']);
    }

    public function delete($post_id) {
        $post = Post::find($post_id);

        if(!$post) {
            return view('error', [ 'message' => 'ID de Post inválido']);
        }

        $delete = $post->delete();

        if (!$delete) {
            return view('error', ['message' => 'Falha ao remover Post']);
        }

        return view('message', ['title' => 'Post Excluído', 'message' => 'O post foi apagado']);
    }

    public function index() {
        return view('post');
    }
}
