<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'fullname' => 'required|max:255',
        'gender' => 'required',
        'email' => 'required|email|max:255',
        'postcode' => 'required|size:8',
        'address' => 'required|max:255',
        'opinion' => 'required|max:120',
    );
}
