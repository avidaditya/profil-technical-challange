<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','solution_id','title','status'];
    
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function solution()
    {
        return $this->hasOne(Solution::class,'id','solution_id');
    }
}
