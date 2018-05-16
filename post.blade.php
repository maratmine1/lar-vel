
@extends("layout");

@section("links")
@foreach($key as $row)
<li ><a href="/posts/{{$row->id}}">{{$row->name}}</a></li>
@endforeach

@endsection
@section("body")
@foreach($posts as $post)
  <h1>{{$post->title}}</h1>
   <p>{{str_limit($post->body, 200) }}</p>
   <a href="/post/{{$post->id}}">Читать дальше....</a>
@endforeach
<h1></h1>

@endsection