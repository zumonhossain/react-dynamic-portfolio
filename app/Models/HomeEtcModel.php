<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeEtcModel extends Model{
    protected $table = 'home_etc';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'int';
    protected $timestamps = false;
}
