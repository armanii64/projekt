@extends ('layouts.app')
@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
    <h1>{{$post->title}}</h1>
    <img class="rounded mx-auto d-block" style="width: 65%"src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <div class="card body">
    <p>{{$post->body}}</p>
    <hr>
    
    <small>Dodano {{$post->created_at}}</small>
    <hr>
    </div>
        </div>
    </div>
</div>
    @if(!Auth::guest())
    @if (Auth::user()->id ==$post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edytuj</a>
    
    
    
    
    
    
    
    {!!Form::open(['action'=> ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' =>'POST', 'class'=>'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Usuń', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
        @endif

    @endif

@endsection