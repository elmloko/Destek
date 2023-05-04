<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [

        'descripcion',
        'solucion',
        'estado',
        'nombre',
        'user_id',
        'area_id',
        'tecnico_id'

    ];

    const STATUS_INACTIVE = 'por_aprobar';
    const STATUS_ACTIVE = 'activo';
    const STATUS_FINISH = 'terminado';

    public static function getStatuses()
    {
        return [
            self::STATUS_INACTIVE => 'Por_aprobar',
            self::STATUS_ACTIVE => 'Activo',
            self::STATUS_FINISH => 'Terminado',
        ];
    }
    
    public function area()
    {
        return $this->belongsTo(Area::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}
public function tecnico()
{
    return $this->belongsTo(Tecnico::class);
}
}
