<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class afiliados extends Model
{
    use HasFactory;

    protected $table = "afiliados";

    public $timestamps = true;

    protected $fillable = [
        'nombre', 'correo', 'updated_at', 'created_at'
    ];
}
