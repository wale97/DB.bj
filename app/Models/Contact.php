<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    
    protected $table = "contacts";

    protected $fillable = ['nom', 'email', 'telephone', 'sujet', 'message'];

    public static function boot(){

        parent::boot();

        static::created(function ($item){
            $adminEmail = "waleakanni97@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }



}
