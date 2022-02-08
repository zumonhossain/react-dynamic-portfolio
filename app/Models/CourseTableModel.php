<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseTableModel extends Model{
    protected $table = 'courses_table';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'int';
    protected $timestamps = false;
}
