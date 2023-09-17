<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    protected $table = "user_information";
    protected $primaryKey = "ui_id";
    protected $keyType = "int";
    public $timestamp = true;
    public $incrementing = true;
}
