<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    //protected $table = 'categorias';

    /*
    protected $primaryKey = 'idcategoria';
    public $incrementing = false;
    protected $keyType = 'string'; 
    */
    //public $timestamps = false;

    //protected $connection = 'connection-name';

    //protected $fillable = ['nombre', 'precio', 'imagen', 'cantidad'];

    public function categoria()
    {
        return $this->belongsTo("App\Categoria");
    }

    public function proveedor()
    {
        return $this->belongsTo("App\Proveedor");
    }

}
