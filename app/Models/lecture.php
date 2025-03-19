<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecordChangeNotification;

class lecture extends Model
{
    protected $table = 'lectures'; // Your table name
    protected $fillable =['Name','Course_Module','Phone_Number','Salary','BranchId'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($Lecture) {
            self::sendEmailNotification('New Lecture Added', 'A new lecture record has been added.', $Lecture);
        });

        static::updated(function ($Lecture) {
            self::sendEmailNotification('Lecture Record Updated', 'A Lecture record has been updated.', $Lecture);
        });

        static::deleted(function ($Lecture) {
            self::sendEmailNotification('Lecture Record Deleted', 'A Lecture record has been deleted.', $Lecture);
        });
    }

    protected static function sendEmailNotification($subject, $message,$Lecture)
{
    $details = [
        'subject' => $subject,
        'message' => $message,
        'data' => $Lecture
    ];

    Mail::send('emails.notification', ['details' => $details], function ($mail) use ($subject) {
        $mail->to('nethmavilhan@gmail.com')
             ->subject($subject);
    });
}
}
