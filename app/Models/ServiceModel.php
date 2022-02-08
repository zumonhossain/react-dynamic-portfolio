<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model{
    protected $table = 'services_table';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'int';
    protected $timestamps = false;
}
