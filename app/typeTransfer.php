<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class typeTransfer extends Model
{
    use SoftDeletes;
    protected $table = 'type_transfers';
    protected $primaryKey = 'id';
    protected $fillable = ["description"];
}
