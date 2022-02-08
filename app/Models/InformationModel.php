<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationModel extends Model{
    protected $table = 'information_etc';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'int';
    protected $timestamps = false;
}
