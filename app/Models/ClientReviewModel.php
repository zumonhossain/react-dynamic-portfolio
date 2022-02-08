<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReviewModel extends Model{
    protected $table = 'client_review';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'int';
    protected $timestamps = false;
}
