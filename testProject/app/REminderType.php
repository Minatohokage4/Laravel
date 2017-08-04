<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class REminderType extends Model
{
  protected $table = "REminderType";
  public $primarykey = "id";
  public $timestamps = false;


  // return เฉพาะ type นั้นๆ
  public function reminders()
  {
    return $this->hasMany(Reminder::class,'id','id');
  }

}
