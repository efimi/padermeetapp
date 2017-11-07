<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public static function incomplete()
    {
      // static:: und dann der Befehl, der übergeben wird
      return static::where('completed',0)->get();
    }
}
