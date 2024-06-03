<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    
    protected $table = 'cliente';
    protected $primaryKey = 'cliente_id';
    public $timestamps = false;
    
    protected $fillable = [
        'nombre',
        'telefono',
        'email',
    ];
    
    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'cliente_id');
    }
}
