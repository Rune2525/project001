@extends('layouts.app')

@section('content')
<div class="card-header">Board</div>

<div class="card-body">
{!! Form::open(['url' => '/post/update']) !!}
 
 <div class="form-group">
  
 {!! Form::hidden('id', $post->id) !!}
  
 {!! Form::input('text', 'upPost', $post->post, ['required', 'class' => 'form-control']) !!}
  
 </div>
  
 <button type="submit" class="btn btn-primary pull-right">更新</button>
  
 {!! Form::close() !!}
                </div>
@endsection