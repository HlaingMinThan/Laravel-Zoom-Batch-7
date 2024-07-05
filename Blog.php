<?php

class Blog
{
    public $title;
    public static $blogs = [];

    public static function all()
    {
        return static::$blogs;
    }

    public static function first()
    {
        return static::$blogs[0];
    }

    public static function count()
    {
        return count(static::$blogs);
    }

    public function save()
    {
        $blog = ["title" => $this->title];
        static::$blogs[] = $blog;
        return $blog;
    }

    public static function create($data)
    {
        static::$blogs[] = $data;
        return $data;
    }

    public static function last()
    {
        $lastIndex = count(static::$blogs) - 1;
        return static::$blogs[$lastIndex];
    }
}


$blog = new Blog;
$blog->title = "first blog";
$blog->save();

$blog = new Blog;
$blog->title = "second blog";
$blog->save();

Blog::create(["title" => "Third Blog"]);

var_dump(Blog::last());//["title" => "Third Blog"]


//why should we use laravel ?