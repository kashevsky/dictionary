<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function deliveries()
    {
        return $this->hasMany(Delivery::class,'profile_id','id');
    }
}
