<?php

namespace App\Models;
use  App\Models\course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

        //relationship functions
        public function courses(){

            return $this->hasmany(course::class,'did');
}
}
 