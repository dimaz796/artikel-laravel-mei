<?php

namespace App\Models;

class Post_old
{
    private static $blog_posts = [
        [
            "title" => "Tentang Saya",
            "slug" => "tentang-saya",
            "author" => "Dimas Aditya",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem totam laboriosam magnam aperiam blanditiis pariatur maiores sunt esse nesciunt illum facilis veniam quae consequuntur eius impedit doloribus quo cum, modi eaque architecto dolores unde hic nemo. Explicabo quas mollitia, rem beatae autem excepturi. Eveniet, porro. Deserunt modi officia minima quia neque tempora ipsa inventore architecto quis ab fugit, voluptatem tempore ex delectus iste odit, mollitia incidunt nisi aut dolorem molestias asperiores laborum at rem. 
                Sint tempore eligendi dicta exercitationem optio laboriosam, architecto voluptatum et, perferendis sequi rerum harum doloremque obcaecati!"
        ],
        [
            "title" => "Nenek",
            "slug" => "nenek",
            "author" => "David",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem totam laboriosam magnam aperiam blanditiis pariatur maiores sunt esse nesciunt illum facilis veniam quae consequuntur eius impedit doloribus quo cum, modi eaque architecto dolores unde hic nemo. Explicabo quas mollitia, rem beatae autem excepturi. Eveniet, porro. Deserunt modi officia minima quia neque tempora ipsa inventore architecto quis ab fugit, voluptatem tempore ex delectus iste odit, mollitia incidunt nisi aut dolorem molestias asperiores laborum at rem. 
                Sint tempore eligendi dicta exercitationem optio laboriosam, architecto voluptatum et, perferendis sequi rerum harum doloremque obcaecati!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstwhere('slug',$slug);
    }
}
