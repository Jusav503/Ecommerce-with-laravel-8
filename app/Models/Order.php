<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at', 'status'];

    const PENDIENTE = 1;
    const RECIBIDO = 2;
    const ENVIADO = 3;
    const ENTREGADO = 4;
    const ANULADO = 5;

    //Relación uno a muchos inversa
    public function departments(){
        return $this->belongsTo(Department::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function districts(){
        return $this->belongsTo(District::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
