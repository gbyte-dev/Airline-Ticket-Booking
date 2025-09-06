<?php

namespace Modules\Flight\Models;

use Illuminate\Database\Eloquent\Model;


class Subscription extends Model
{
    // Specify the database table associated with the model
    protected $table = 'subscriptions';

    // The attributes that are mass assignable
    protected $fillable = [
        'phone',
        'email',
        'sms_consent', // If you want to track SMS consent as well
        'ip_address',
    ];

    // Cast attributes to specific data types
    protected $casts = [
        'sms_consent' => 'boolean', // Assuming you have an SMS consent field
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Define any relationships if needed
    // Example:
    // public function location()
    // {
    //     return $this->belongsTo(Location::class);
    // }
}
