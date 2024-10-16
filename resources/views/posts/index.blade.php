@extends('layouts.app')

@section('content')
<div class="card-header">Board</div>

<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            @foreach($posts as $post)
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <h5 class="card-title">
                    カテゴリー：{{ $post->category->category_name }}
                </h5>
                <h5 class="card-title">
                    投稿者：{{ $post->user->name }}
                </h5>
                <p class="card-text">{{ $post->content }}</p>
                <a href="/post/{{ $post->id }}/update-form" class="btn btn-primary">更新</a>
                <a href="/post/{{ $post->id }}/delete" class="btn btn-danger" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')">削除</a>
            </div>
            </div>
            @endforeach
                </div>
@endsection
 