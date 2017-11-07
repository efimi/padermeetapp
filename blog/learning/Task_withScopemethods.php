<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function scopeIncomplete($query, $val) // Task::incomplete('balbalabl');
    // wobei  blabal in $val abgespeichert würde
    {
      return $query->where('completed',0); // returns an Instance of Elloquentbuilder
      // man braucht noch ->get(); um die Daten zu parsen
    }
}
