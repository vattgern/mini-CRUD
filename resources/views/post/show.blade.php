@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="modal-title">
            <h1>{{ $post['title'] }}</h1>
        </div>
        <div class="modal-body">
            <p>{{ $post['description'] }}</p>
        </div>
        <div class="modal-footer">
            <a class="btn btn-outline-secondary" href="{{ route('post.edit',$post['id']) }}">Редактировать</a>
            <form action="{{ route('post.delete',$post['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Удалить</button>
            </form>

        </div>
    </div>
@endsection
