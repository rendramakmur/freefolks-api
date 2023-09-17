<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameData extends Model
{
    protected $table = "game_data";
    protected $primaryKey = "gd_id";
    protected $keyType = "int";
    public $timestamp = true;
    public $incrementing = true;
}
