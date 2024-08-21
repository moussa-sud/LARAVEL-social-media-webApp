<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'posts'; 

    protected $fillable = ['title', 'body', 'photo', 'profile_id'];

    public function profs()
        {
             // assuming 'profile_id' is the foreign key in the 'posts' table
            //  A Post belongs to a Prof
            return $this->belongsTo(Prof::class, 'profile_id');
        }


}
