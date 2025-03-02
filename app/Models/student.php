<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students'; // Your table name
    protected $fillable =['Name','Course_Name','Age','NIC_Number'];

}
