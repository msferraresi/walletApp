<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends Model
{
    use SoftDeletes;
    protected $table = 'wallets';
    protected $primaryKey = 'id';
    protected $fillable = ["user_id", "money"];

}
