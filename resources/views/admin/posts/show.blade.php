@extends('layouts.dashboard')

@section('content')
    <h1> {{ $post->title }} </h1>
    @if ($post->cover) 
        <img src="{{ asset('storage/' . $post->cover) }} " alt="">    
    @endif
    <p> Slug {{ $post->slug }} </p>
    <p> Categoria: {{ $post->category ? $post->category->name : 'nessuna categoria'}}</p>
    <p> {{ $post->content }} </p>

    <div class="d-flex">
        <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica</a>

        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger" type="submit">Cancella</button>
        </form>
    </div>
@endsection