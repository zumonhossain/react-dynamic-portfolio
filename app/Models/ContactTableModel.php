<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactTableModel extends Model{
    protected $table = 'contact_table';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'int';
    protected $timestamps = false;
}