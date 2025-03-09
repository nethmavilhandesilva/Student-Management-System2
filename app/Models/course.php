<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'courses'; // Your table name
    protected $fillable =['Name','	Course_ID','Duration','BranchId'];
}
