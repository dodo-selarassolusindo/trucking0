<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tperbaikan extends Model
{
    use HasFactory;

    /**
    * fillable
    *
    * @var array
    */
   protected $fillable = [
       'nomor', 'tanggal'
   ];
}
