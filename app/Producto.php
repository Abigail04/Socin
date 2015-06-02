<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

    protected $table = 'productos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['idproduct', 'descripcion', 'unidad',
        'precioc', 'preciov', 'cantidad', 'id'];

    public function productos()
        {
            return $this->belongsToMany('App\User');
        }
}
