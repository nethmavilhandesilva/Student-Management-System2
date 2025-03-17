<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecordChangeNotification;

class Student extends Model
{
    protected $table = 'students'; // Your table name
    protected $fillable = ['Name', 'Course_Name', 'Age', 'NIC_Number', 'BranchId'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($student) {
            self::sendEmailNotification('New Student Added', 'A new student record has been added.', $student);
        });

        static::updated(function ($student) {
            self::sendEmailNotification('Student Record Updated', 'A student record has been updated.', $student);
        });

        static::deleted(function ($student) {
            self::sendEmailNotification('Student Record Deleted', 'A student record has been deleted.', $student);
        });
    }

    private static function sendEmailNotification($subject, $message, $data)
    {
        $details = [
            'subject' => $subject,
            'message' => $message,
            'data' => $data
        ];

        Mail::to('nethmavilhan@gmail.com')->send(new RecordChangeNotification($details));
    }
}
