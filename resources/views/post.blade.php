@extends('layouts/template')

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

{{-- <form action="{{ route('post.create') }}" method="post">
    @csrf
    <h1 class="subtitle">Dados</h1>
    <input class="input" type="text" placeholder="Título" name="title" />
    <textarea class="textarea" placeholder="Conteúdo" name="content" style="margin-top: 20px;"></textarea>
    <button class="button is-success is-fullwidth" type="submit" style="margin-top: 20px;">Enviar</button>
</form> --}}

{!! Form::open(['route' => 'post.create']) !!}

{!! Form::text('title', null, ['class' => 'input', 'placeholder' => 'Título']) !!}

{!! Form::textarea('content', null, ['class' => 'textarea', 'placeholder' => 'Conteúdo', 'style' => 'margin-top: 20px']) !!}

{!! Form::submit('Enviar', ['class' => 'button is-success is-fullwidth', 'style' => 'margin-top: 20px']) !!}
{!! Form::close() !!}

@if(isset($errors) && count($errors) > 0)

<section class="section" style="color: #f14668">

@foreach($errors->all() as $error)

<p> {{$error}} </p>

@endforeach
</section>

@endif

@endsection
