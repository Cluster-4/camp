<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_size_model extends Model
{
    use HasFactory;
    protected $table = 'bmrs_room_sizes';
    protected $primaryKey = 'rm_size_id';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'rm_size_min',
        'rm_size_max',
        'rm_size_name'
    ];
}
