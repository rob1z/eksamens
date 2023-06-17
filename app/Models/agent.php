<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    protected $table = 'agent';
    protected $primaryKey = 'agent_id';
    public $incrementing = true;
}