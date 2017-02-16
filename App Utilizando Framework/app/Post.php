<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    public $timestamps = false;
    public function obtenerTodo()
    {
        return Post::all();
    }

    public static function obtenerPorAutor($autor)
    {
        return Post::where('author', $autor)->get();
    }

    public static function obtenerPorId($id)
    {
        return Post::where('id', $id)->get();
    }

    public static function crearPost($autor, $contenido)
    {
        $post       = new Post();
        $post->author = $autor;
        $post->content     = $contenido;
        $post->save();
    }
}
