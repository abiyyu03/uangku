<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{ 
    use HasFactory;
    protected $table = "debts";
    protected $fillable = ['user_id','date','debt','debtor','description'];

    function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
