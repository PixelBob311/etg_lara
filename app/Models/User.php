<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [
        'id'
    ];

//    protected $fillable = [
//        'login',
//        'password',
//        'name',
//        'second_name',
//        'middle_name',
//    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->password = Hash::make($model->password);
        });
    }
}
