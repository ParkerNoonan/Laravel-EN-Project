<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class today extends Model
{
        public function check_table( ) {

        $users = DB::table('Actuator_Min_Max')->get();
        return $users;
     }
}
