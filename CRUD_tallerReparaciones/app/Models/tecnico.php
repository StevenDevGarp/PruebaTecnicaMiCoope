<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tecnico extends Model
{
    use HasFactory;

    protected $table = 'tecnico';
    protected $primaryKey = 'tecnico_id';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'telefono',
        'email',
    ];

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'tecnico_id');
    }
}
