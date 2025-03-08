<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $table = 'branches'; // Your table name
    protected $fillable =['Name','BranchID','Location'];
}
