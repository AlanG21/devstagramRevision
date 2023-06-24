<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    // Almacenar comentarios
    public function store(Request $request, User $user, Post $post)
    {
        //Validar los comentarios
        $this->validate($request, [
            'comentario' => 'required|max:255'
        ]);

        //Almacenar los comentarios en la base de datos
        Comentario::create([
            //Obtenemos el usuario autenticado que comento 
            'comentario' => $request->comentario,
            'user_id' => auth()->user()->id,
            'post_id' => $post->id
        ]);

        //Imprimir mensaje de confirmacion
        return back()->with('mensaje', 'Comentario realizado correctamente');
    }
    // Eliminar comentarios
    public function destroy(User $user, Post $post, Comentario $comentario)
    {
        $comentario->delete();

        //Imprimir mensaje de confirmacion y redireccionar a la vista del post
        return back()->with('mensaje', 'Comentario eliminado con éxito');
    }

}