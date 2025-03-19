<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecordChangeNotification;

class branch extends Model
{
    protected $table = 'branches'; // Your table name
    protected $fillable =['Name','BranchID','Location'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($Branch) {
            self::sendEmailNotification('New Branch Added', 'A new Branch record has been added.', $Branch);
        });

        static::updated(function ($Branch) {
            self::sendEmailNotification('Branch Record Updated', 'A Branch record has been updated.', $Branch);
        });

        static::deleted(function ($Branch) {
            self::sendEmailNotification('Branch Record Deleted', 'A Branch record has been deleted.', $Branch);
        });
    }

    protected static function sendEmailNotification($subject, $message,$Branch)
{
    $details = [
        'subject' => $subject,
        'message' => $message,
        'data' => $Branch
    ];

    Mail::send('emails.notification', ['details' => $details], function ($mail) use ($subject) {
        $mail->to('nethmavilhan@gmail.com')
             ->subject($subject);
    });
}
}
