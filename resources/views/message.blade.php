@extends('template')

@section('title', $title)
@section('subtitle', $message ?? '')

@section('pre-content')

<section class="section container">
    <button class="button is-primary is-fullwidth" onclick="window.location = '{{ route('home') }}'">
        Voltar
    </button>
</section>

@endsection