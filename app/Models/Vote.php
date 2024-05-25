<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $fillable = ['vote','user_id','solution_id'];

    public function solution()
    {
        return $this->hasOne(Solution::class,'id','solution_id');
    }
}
