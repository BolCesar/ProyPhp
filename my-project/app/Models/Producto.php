<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'moneda',
        'disponible'
    ];

    public function categoria(){
        //return $this->belongsTo(Categoria::class);
        return $this->belongsTo('App\Models\Categoria');
    }
    public static function createEmpty(){
        $p = new Producto();

        $p->disponible = true;
        $p->moneda = "euro";

        return $p;
    }
}
