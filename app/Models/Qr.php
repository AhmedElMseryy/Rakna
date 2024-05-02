<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
    use HasFactory;
    protected $fillable = ['qr'];

    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
