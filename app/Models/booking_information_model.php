<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking_information_model extends Model
{
    protected $table = 'booking_information';
    protected $primaryKey = 'bkg_id';
    public $incrementing = true;
    public $timestamps = true;

    public function room_size()
    {
        return $this->belongsTo(Room_size_model::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    protected $fillable = [
        'bkg_tracking_pin',
        'bkg_status',
        'bkg_fname',
        'bkg_lname',
        'bkg_tel',
        'bkg_date_use',
        'bkg_date_end',
        'bkg_create_time',
        'bkg_cancel_resson',
        'bkg_approve_date',
        'bkg_rm_id',
        'bkg_acc_id',
        'bkg_acc_appv_id'
    ];

    protected $dates = [
        'bkg_date_use',
        'bkg_date_end',
        'bkg_create_time',
        'bkg_approve_date'
    ];
}
