<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameCost extends Model
{
    protected $table = "game_cost";
    protected $primaryKey = "gc_id";
    protected $keyType = "int";
    public $timestamp = true;
    public $incrementing = true;
}
