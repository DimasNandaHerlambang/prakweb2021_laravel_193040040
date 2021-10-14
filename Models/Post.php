<?php

namespace App\Models;


class Post 
{
   private static $blog_posts =  [
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


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
