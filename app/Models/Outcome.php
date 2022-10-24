<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    use HasFactory;
    protected $table = "outcomes";
    protected $fillable = ['user_id','date','outcome','usage','description'];

    function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
