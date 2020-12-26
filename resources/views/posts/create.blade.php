@extends ('layouts.app')
@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
    <h1>Nowe wydarzenie</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Wpisz poniżej:')}}
        {{Form::text('title', '', ['class'=>'form-control', 'placeholder' =>'Tytuł'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Opis')}}
        {{Form::textarea('body', '', ['class'=>'form-control', 'placeholder' =>'Wprowadz opis wydarzenia'])}}
    </div>
    <div class="form-group">
    {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Dodaj', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection