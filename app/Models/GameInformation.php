<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameInformation extends Model
{
    protected $table = "game_information";
    protected $primaryKey = "gi_id";
    protected $keyType = "int";
    public $timestamp = true;
    public $incrementing = true;
}
