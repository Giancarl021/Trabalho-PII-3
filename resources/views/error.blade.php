@extends('layouts/template')

@section('title', 'Erro')
@section('subtitle', $message ?? 'Um erro desconhecido aconteceu')

@section('pre-content')

<section class="section container">
    <button class="button is-danger is-fullwidth" onclick="window.location = '{{ route('home') }}'">
        Voltar
    </button>
</section>

@endsection