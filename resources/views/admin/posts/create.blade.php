@extends('layouts.dashboard')

@section('content')
    <h1> Crea un nuovo post </h1>

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @method('POST')
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text" class="form-control" name="content" id="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection