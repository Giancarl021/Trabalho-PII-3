@extends('template')

@section('title', 'Posts')
@section('subtitle', 'Criar um novo post')

@section('pre-content')

<section class="section container">
    <button class="button is-primary is-fullwidth" onclick="window.location = '{{ route('home') }}'">
        Voltar
    </button>
</section>

@endsection

@section('content')

<form action="{{ route('post.create') }}" method="post">
    @csrf
    <h1 class="subtitle">Dados</h1>
    <input class="input" type="text" placeholder="Título" name="title" />
    <textarea class="textarea" placeholder="Conteúdo" name="content" style="margin-top: 20px;"></textarea>
    <button class="button is-success is-fullwidth" type="submit" style="margin-top: 20px;">Enviar</button>
</form>

@endsection
