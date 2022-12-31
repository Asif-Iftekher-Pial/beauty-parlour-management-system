<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['client_id','service_id','appointment_date','appointment_time','payment_status'];

    public function services()
    {
        return $this->belongsTo(Service::class,'service_id');
    }

    public function clients()
    {
        return $this->belongsTo(User::class,'client_id','id');
    }
}
