<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $rules = [
        'title' => 'required|min:3|max:30',
        'content' => 'required|min:10|max:100',
    ];
    public $messages = [
        'title.required' => 'O campo Título é obrigatório',
        'title.min' => 'O campo Título deve ter no mínimo 3 caracteres',
        'title.max' => 'O campo Título deve ter no máximo 30 caracteres',
        'content.required' => 'O campo Conteúdo é obrigatório',
        'content.min' => 'O campo Conteúdo deve ter no mínimo 10 caracteres',
        'content.max' => 'O campo Conteúdo deve ter no máximo 100 caracteres',
    ];

    protected $fillable = [
        'title',
        'content',
    ];
    use HasFactory;
}
