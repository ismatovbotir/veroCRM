<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasUlids;
    public $incrementing = false;
    protected $keyType = 'string';
}
