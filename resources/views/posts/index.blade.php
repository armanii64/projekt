@extends ('layouts.app')
@section ('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Wydarzenia</h1>
            <div class="card body">
        @if(count($posts) > 0 )
                <ul class="list-group list-group-flush">
                @foreach($posts as $post)

                    <img class="rounded mx-auto d-block" style="width: 65%"src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    <a href="/posts/{{$post->id}}">{{$post->title}}
                    <p></p>
                    <small>{{$post->body}}</small>

            </div>
        </div>
    </div>
</div>
        @endforeach
    
        @else

    @endif
    
@endsection