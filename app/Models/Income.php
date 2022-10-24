<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $table = "incomes";
    protected $fillable = ['user_id','date','income','fund_source','description'];

    function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
