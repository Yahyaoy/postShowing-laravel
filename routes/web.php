<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function () {

       $posts = Post::all();

        return view('posts',[
            'posts'=>$posts
        ]);
});

Route::get('posts/{post}',function ($slug){
    $post = Post::findOrFail($slug);

    return view('post',[
        'post' => $post
    ]);

});





//Route::get('/', function () {
//
//    $files = \Illuminate\Support\Facades\File::files(resource_path("posts"));
//    $document =[];
//
//    foreach ($files as $file){
//        $document[] = Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);
//    }
//
//    ddd($document);
//
////   $document = \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile(
////        resource_path('posts/my-first-post.html')
////    );
////
////   ddd($document);
//});
