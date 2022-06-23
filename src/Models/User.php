<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'username',
        'organization',
        'mail',
        'phone',
        'geoposition',
        'pass',
        'phone_status',
        'confirm_code',
        'balance',
        'manager'
    ];
}