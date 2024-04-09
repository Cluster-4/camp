<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;
    protected $table = 'bmrs_rooms';
    protected $primaryKey = 'rm_id';
    public $incrementing = true;
    public $timestamps = false;

    public function room_size()
    {
        return $this->belongsTo(Room_size_model::class, 'rm_size_id');
    }

    protected $fillable = [
        'rm_name',
        'rm_type',
        'rm_status',
        'rm_price',
        'rm_facilities',
        'rm_can_half',
        'rm_size_id',
        'rm_is_half',
        'rm_pic_path',
        'rm_half_a_size_id',
        'rm_half_a_facilities',
        'rm_half_a_pic_path',
        'rm_half_a_is_half',
        'rm_half_b_size_id',
        'rm_half_b_facilities',
        'rm_half_b_pic_path',
        'rm_half_b_is_half'
    ];

}
