<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    use HasFactory;

    protected $table = 'equipo';
    protected $primaryKey = 'equipo_id';
    public $timestamps = false;

    protected $fillable = [
        'tipo',
        'modelo',
        'marca_id',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'equipo_id');
    }
}
