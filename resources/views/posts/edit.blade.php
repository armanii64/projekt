@extends ('layouts.app')
@section ('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
    <h1>Edytuj wydarzenie</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST','enctype'=> 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Nagłówek')}}
        {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder' =>'Tytuł'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Opis')}}
        {{Form::textarea('body', $post->body, ['class'=>'form-control', 'placeholder' =>'Wprowadz opis wydarzenia'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
        </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Zapisz', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection