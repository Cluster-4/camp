<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    use HasFactory;
    protected $table = "bmrs_accounts";
    protected $primaryKey = "acc_id";
    public $incrementing = true;
    public $timestamps = false;
}
