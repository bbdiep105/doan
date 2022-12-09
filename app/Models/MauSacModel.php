<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MauSacModel extends Model
{
    use HasFactory;
    protected $table='mau_sac';
    protected $fillable=[
        'ten_mau',
        'hex',
    ];
}
