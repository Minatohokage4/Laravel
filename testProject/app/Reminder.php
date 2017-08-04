<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = "Reminder";
    public $timestamp = true;
    public $primarykey = "id";

    public function type()
    {
      return $this->belongsTo(REminderType::class,'REminderType','id');
    }
}
