<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecordChangeNotification;

class course extends Model
{
    protected $table = 'courses'; // Your table name
    protected $fillable =['Name','Course_ID','Duration','BranchId'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($Course) {
            self::sendEmailNotification('New Course Added', 'A new Course record has been added.', $Course);
        });

        static::updated(function ($Course) {
            self::sendEmailNotification('Course Record Updated', 'A Course record has been updated.', $Course);
        });

        static::deleted(function ($Course) {
            self::sendEmailNotification('Course Record Deleted', 'A Course record has been deleted.', $Course);
        });
    }

    protected static function sendEmailNotification($subject, $message,$Course)
{
    $details = [
        'subject' => $subject,
        'message' => $message,
        'data' => $Course
    ];

    Mail::send('emails.notification', ['details' => $details], function ($mail) use ($subject) {
        $mail->to('nethmavilhan@gmail.com')
             ->subject($subject);
    });
}
}
