<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ability extends Model
{
    protected $table = 'ability';
    protected $primaryKey = 'ability_id';
    public $incrementing = true;
}
