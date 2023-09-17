<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameRegistration extends Model
{
    protected $table = "game_registration";
    protected $primaryKey = "gr_id";
    protected $keyType = "int";
    public $timestamp = true;
    public $incrementing = true;
}
