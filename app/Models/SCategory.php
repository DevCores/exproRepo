<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SCategory extends Model
{
    use HasFactory;
    
public function SProduct()
      {
        return $this->hasMany(SProduct::class, 'categories');
      }
}
