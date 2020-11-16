@extends('template')

@section('title', 'Post removido')
@section('subtitle', 'O post foi apagado')

@section('pre-content')

<section class="section container">
    <button class="button is-primary is-fullwidth" onclick="window.location = '{{ route('home') }}'">
        Voltar
    </button>
</section>

@endsection