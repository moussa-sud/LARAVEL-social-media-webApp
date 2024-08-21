<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; 

class Prof extends Model
{
    use HasFactory;

    protected $table = 'profs'; 

    protected $fillable = ['name', 'email', 'password', 'bio'];

    protected $hidden = ['password'];


}
