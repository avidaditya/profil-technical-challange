<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solution extends Model
{
    use HasTags;
    use softDeletes;
    
    protected $fillable = ['user_id','title','solution','link_url','type','status','attachment_file','location_id'];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id')->withTrashed();
    }

    public function comment()
    {
        return $this->hasMany(Comment::class,'solution_id','id');
    }

    public function vote()
    {
        return $this->hasMany(Vote::class,'solution_id','id');
    }

    public function location()
    {
        return $this->hasOne(Location::class,'id','location_id');
    }

    public function sektor()
    {
        return $this->hasOne(master_sektor::class,'id','sektor_id');
    }

}
