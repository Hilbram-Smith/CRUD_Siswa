<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // Pastikan ada kata 'protected' di depan $fillable
    protected $fillable = ['nama', 'umur', 'nilai']; 
}