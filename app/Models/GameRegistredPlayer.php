<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameRegistredPlayer extends Model
{
    protected $table = "preferred_position";
    protected $primaryKey = "pp_id";
    protected $keyType = "int";
    public $timestamp = true;
    public $incrementing = true;
}
