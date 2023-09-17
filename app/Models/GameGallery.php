<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameGallery extends Model
{
    protected $table = "game_gallery";
    protected $primaryKey = "gg_id";
    protected $keyType = "int";
    public $timestamp = true;
    public $incrementing = true;
}
