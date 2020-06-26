<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public static function getAll() {
        return self::paginate(6);
    }

    public  static function find($id)
    {
      return self::where('id', $id)->get();
    }



  
}
