<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lecture extends Model
{
    protected $table = 'lectures'; // Your table name
    protected $fillable =['Name','Course_Module','Phone_Number','Salary','BranchId'];
}
