@extends('layouts.main')
@section('content')
    @foreach($posts as $post)
        <div class="card m-3 w-25 h-50">
            <div class="card-title">
                <h3 class="text-center p-1">
                    <a href="{{ route('post.show', $post['id']) }}" class="card-link link-primary">{{ $post['title'] }}</a>
                </h3>
            </div>
            <div class="card-body">
                <p>{{ $post['description'] }}</p>
            </div>
        </div>
    @endforeach
@endsection
