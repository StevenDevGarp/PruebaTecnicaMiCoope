<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    use HasFactory;

    protected $table = 'marca';
    protected $primaryKey = 'marca_id';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
    ];

    public function equipos()
    {
        return $this->hasMany(Equipo::class, 'marca_id');
    }
}
