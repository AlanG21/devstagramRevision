<?php

namespace App\Models;

use App\Models\Comentario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    //Forzar el nombre de la tabla Post en singular
    protected $table = 'post';
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];
    //Creamos la relacion de un Post pertenece a un User (Relacion inversa)
    public function user(){
        return $this->belongsTo(User::class)->selected(['name','username']);
    }

    //Creamos la relacion post-comentarios
    public function comentarios(){
        //un post tiene muchos comentarios 
        return $this->hasMany(Comentario::class);
    }
}
