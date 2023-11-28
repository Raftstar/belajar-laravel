<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $table = 'jenis_pilihan_kunci';

    

    protected $fillable = [
        'jenis',
        'pilihan',
        'kunci'
    ];
}
