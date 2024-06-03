<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;

    protected $table = 'servicio';

    protected $primaryKey = 'servicio_id';
    public $timestamps = false;

    protected $fillable = [
        'cliente_id',
        'equipo_id',
        'tecnico_id',
        'fecha_recepcion',
        'problema',
        'diagnostico',
        'solucion',
        'estado',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'equipo_id');
    }

    public function tecnico()
    {
        return $this->belongsTo(Tecnico::class, 'tecnico_id');
    }
}
