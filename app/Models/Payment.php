<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'mobile',
        'email',
        'assistance_type',
        'state',
        'city',
        'amount',
        'transaction_id',
        'payment_status',
        'response_msg',
        'providerReferenceId',
        'merchantOrderId',
    ];
    
    public function state_info()
    {
        return $this->belongsTo(State::class, 'state');
    }
    
    public function city_info()
    {
        return $this->belongsTo(City::class, 'city');
    }

}
