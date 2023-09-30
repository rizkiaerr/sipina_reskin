<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title"=>"Judul Post Pertama",
            "slug"=>"judul-post-pertama",
            "author" => "Kia",
            "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptatibus maiores doloremque dolorem libero quas alias natus reprehenderit possimus sapiente. Sed possimus optio tenetur libero necessitatibus quas. Maiores, perferendis vitae. Vero atque dolore commodi esse odio incidunt, porro quos quibusdam! Voluptates eos provident impedit culpa quibusdam odio sit voluptatum dicta quidem, vero placeat! Ducimus, iste velit. Veniam laborum doloribus ullam maiores earum saepe quisquam assumenda necessitatibus porro esse nemo, ab adipisci minus molestiae sapiente neque iure nihil optio cupiditate consectetur."
        ],
        [
            "title"=>"Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author" => "Amir Mahmud",
            "body"  => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero voluptatem, placeat rerum nam ipsa dicta ut quod assumenda facilis eveniet provident repellat laudantium. Soluta, laborum enim iste explicabo magni debitis. Cum aspernatur ipsam distinctio sunt eos reprehenderit repudiandae nesciunt. Unde repellendus cumque molestiae nisi veritatis molestias facilis velit voluptates, nam consequuntur qui dolor hic tempore, assumenda commodi quos laborum quod et ratione, labore possimus. Tempore blanditiis doloribus id? Natus minus minima nisi veritatis pariatur recusandae rerum assumenda architecto debitis id iure perferendis quae ratione non libero rem numquam, sapiente dolorem odio. Magnam vitae dolore optio ratione fugiat, sint vero ex."
        ]
        ];
    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
