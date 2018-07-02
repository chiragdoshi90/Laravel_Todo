<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

  protected $fillable = ['task'];
    public $timestamps = false;

    public function toggleStatus() {
      $this->status = !$this->status;
      return $this;
    }
}
