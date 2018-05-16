<?php


use Illuminate\Http\Request;
use Illuminate\Support\FAcades\Storage;
Route::get('/', function () {
  $result = App\Category::all();
    return view('welcome',["key"=>$result]);
});
Route::get('/posts/{id}',function($id){
    $links = App\Category::all();
    $result = App\Post::where('id_categories',$id)->get();
    return view('post', ["key"=>$links,"posts"=>$result]);
   
});
Route::get('/post/{id}',function($id){
     
    $post = App\Post::find($id);
	$comments= $post->comments;
    return view('individ', [ "post"=>$post,"comments"=>$comments]);
});
Route::post('/comment/{id}',function(Request $req,$id){
    App\Comment::create([
        "post_id"=>$id,
        "user_name"=>$req->user_name,
        "body"=>$req->user_body,
    ]);

  
    
return back();
});
Route::get('/admin',function(){
		return view('admin');
	});
Route::post('/addPost',function(Request $req){
	Storage::put('punlic',$req->file('post_image'));
	 App\Post::create([
        "id_categories"=>1,
        "title"=>$req->title,
        "body"=>$req->body,
		 "image"=>name,
    ]);

	return back();
});
Route::get('/lol',function(){
	header("Access-Control-Allow-Origin: *");
});
?>
