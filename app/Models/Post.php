<?php

namespace App\Models;


class Post
{
    public static $blog_posts = [
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Rizky Ali Farhan",
            "body" => "Apa yg dimaksud dengan database?
            Database adalah koleksi data yang sistematis dan sistematis yang disimpan secara elektronik. Ini dapat berisi semua jenis data, termasuk kata, angka, gambar, video, dan file. Anda dapat menggunakan perangkat lunak yang disebut sistem manajemen database (DBMS) untuk menyimpan, mengambil, dan mengedit datar."

        ],
        [
            "title" => "Judul Post ketiga",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Rizky Ali Farhan",
            "body" => "Sistem informasi adalah suatu istilah yang berkaitan dengan sistem manajerial atau pengelolaan. Sistem informasi ini merupakan kombinasi dari prosedur kerja, informasi, individu, dan teknologi informasi yang terorganisir."

        ],
    ];
    public static function getData()
    {
        return self::$blog_posts;
    }
    public static function cari ($slug){
    $posts = self::$blog_posts;
    $post = [];
    foreach($posts as $p){
        if($p["slug"] === $slug){
            $post = $p;
        }
    }
    return $post;
    }
}
?>
