<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    
    
    <style>
        .comments{
            height:200px;
            width:140px;
        }
        .name{
            height:100px;
            width:40px
        }
    </style>
</head>
<body>
  
    
</body>
</html>
@extends("layout")


@section("body")
 
  <h1>{{$post->title}}</h1>
   <p>{{$post->body}}</p>
   @foreach($comments as $comment)
   <h1>{{$comment->user_name}}</h1>
   <p>{{$comment->body}}</p>
   @endforeach
   <form action="/comment/{{$post->id}}" method="post">
   @csrf
   <input input="text" name="user_name">
 <input input="text" name="user_body"><button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right"></i>
  </button>
  </form>

@endsection