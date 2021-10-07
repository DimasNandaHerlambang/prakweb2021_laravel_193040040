<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" =>"Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" =>"About",
        "name" => "Dimas Nanda Herlambang",
        "email" => "herlambang923@gmail.com",
        "image" => "dimas.jpeg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dimas Nanda Herlambang",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit nostrum eaque repellendus accusantium, beatae et laboriosam aperiam doloribus, obcaecati laudantium perspiciatis consectetur, voluptates eos animi dolorum repudiandae! Illo tenetur ex iste quis ut perspiciatis quae veniam, voluptates nemo dolore molestias repellat alias eos ullam rem dolorum, voluptate est at numquam maiores. In, maxime voluptatem quibusdam ratione nobis culpa porro sequi. Veritatis eius soluta aliquid eaque fugiat ducimus quam vero, eveniet asperiores doloribus in officia necessitatibus ut porro voluptas odit dolores."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "irfan tea",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit nostrum eaque repellendus accusantium, beatae et laboriosam aperiam doloribus, obcaecati laudantium perspiciatis consectetur, voluptates eos animi dolorum repudiandae! Illo tenetur ex iste quis ut perspiciatis quae veniam, voluptates nemo dolore molestias repellat alias eos ullam rem dolorum, voluptate est at numquam maiores. In, maxime voluptatem quibusdam ratione nobis culpa porro sequi. Veritatis eius soluta aliquid eaque fugiat ducimus quam vero, eveniet asperiores doloribus in officia necessitatibus ut porro voluptas odit dolores." 
        ]
        ];
    return view('posts', [
        "title" =>"Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman Single Post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dimas Nanda Herlambang",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit nostrum eaque repellendus accusantium, beatae et laboriosam aperiam doloribus, obcaecati laudantium perspiciatis consectetur, voluptates eos animi dolorum repudiandae! Illo tenetur ex iste quis ut perspiciatis quae veniam, voluptates nemo dolore molestias repellat alias eos ullam rem dolorum, voluptate est at numquam maiores. In, maxime voluptatem quibusdam ratione nobis culpa porro sequi. Veritatis eius soluta aliquid eaque fugiat ducimus quam vero, eveniet asperiores doloribus in officia necessitatibus ut porro voluptas odit dolores."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "irfan tea",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit nostrum eaque repellendus accusantium, beatae et laboriosam aperiam doloribus, obcaecati laudantium perspiciatis consectetur, voluptates eos animi dolorum repudiandae! Illo tenetur ex iste quis ut perspiciatis quae veniam, voluptates nemo dolore molestias repellat alias eos ullam rem dolorum, voluptate est at numquam maiores. In, maxime voluptatem quibusdam ratione nobis culpa porro sequi. Veritatis eius soluta aliquid eaque fugiat ducimus quam vero, eveniet asperiores doloribus in officia necessitatibus ut porro voluptas odit dolores." 
        ]
        ];
    
        $new_post = [];
        foreach($blog_posts as $post)
            if ($post["slug"] === $slug) {
                $new_post = $post;
            }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});