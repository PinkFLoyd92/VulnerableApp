<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = (new Post)->obtenerTodo();
        return view('post')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = (new Post)->obtenerPorId($id);
        return view('postInfo')->with('data', $data);
    }

    public function contenido(Request $request)
    {
        $data = (new Post)->obtenerPorAutor($request->data);
        return view('postId')->with('data', $data);
    }
    public function create(Request $request)
    {
        (new Post)->crearPost($request->autor, $request->contenido);
        $data = (new Post)->obtenerTodo();
        return view('post')->with('data', $data);
    }
}
