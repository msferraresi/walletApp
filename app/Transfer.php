<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transfer extends Model
{
    use SoftDeletes;
    protected $table = 'transfers';
    protected $primaryKey = 'id';
    protected $fillable = ["description", "amount", "wallet_id", "type_id"];
}
