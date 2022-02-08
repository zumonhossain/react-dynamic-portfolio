<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterTableModel extends Model{
    protected $table = 'footer_table';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'int';
    protected $timestamps = false;
}
