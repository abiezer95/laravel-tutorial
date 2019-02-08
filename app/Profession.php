<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    //si quiero especificar un nombre de una tabla diferente lo hago poniendo
    //protected $table = 'nombre_de_la_tabla';

    protected $fillable = ['title']; //con esto agrego solo los elementos que se agregaran a la DB, es una buena practica ya que evitamos que alguien mande algun dato de inyeccion a una tabla o elemento de la misma.
    //luego vemos todo esto en tinker y asi comprobamos.
    protected $casts = ['is_admin'=> 'boolean']; //esto convierte un atributo a boolean ya que al agregarse en la DB se agrega con otro atributo
}
