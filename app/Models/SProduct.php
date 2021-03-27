<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SProduct extends Model
{
    use HasFactory;

public function SItems()
      {
        return $this->hasMany(SItem::class, 'product');
      }
public static function image($id)
      {
      	return SProduct::where('id',$id)->first()->hover_image;
         
      }
public static function name($id)
      {
      	return SProduct::where('id',$id)->first()->name;
         
      }

}
