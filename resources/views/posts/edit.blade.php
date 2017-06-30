@extends('layouts.app')

@section('banner-heading')
    <header class="intro-header" style="background-image: url({{asset('img/create-post.jpg')}})">
        <div class="container">
            <div class="row">
                <div class=" col-md-11 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Everything Tech</h1>

                        <hr class="small">

                        <span class="subheading">A place where people post opinions or links about current or future tech</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection


@section('content')
  <div class="container">
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
        {{Form::label('tbody', 'Body')}}
        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
      </div>
      <div class="form-group">
        {{Form::file('cover_image')}}
      </div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
@endsection