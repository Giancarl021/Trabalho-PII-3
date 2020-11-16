@extends('template')

@section('title', 'Home')
@section('subtitle', 'Veja os últimos Posts')

@section('pre-content')

<section class="section container">
    <button class="button is-primary is-fullwidth" onclick="window.location = '{{ route('post.index') }}'">
        Criar Post
    </button>
</section>

@endsection

@section('content')

@if (isset($posts))

@foreach ($posts as $post)

<article class="message">
    <div class="message-header">
        <p>{{ $post["title"] }}</p>
        <button class="delete" aria-label="delete" onclick="window.location = '{{ route('post.remove', ['id' => $post['id'] ]) }}'"></button>
    </div>
    <div class="message-body">
        {{ $post["content"] }}
    </div>
</article>

@endforeach

@endif

@endsection
