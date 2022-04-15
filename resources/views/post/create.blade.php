@extends('layouts.main')
@section('content')
    <form class="w-50 mt-5" action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="titlePost">Название поста</label>
            <input type="text" name="title" class="form-control" id="titlePost" placeholder="Введите название поста">
        </div>
        <div class="form-outline mt-2 mb-2">
            <label class="form-label" for="descriptionPost">Описание</label>
            <textarea class="form-control" name="description" id="descriptionPost" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection
