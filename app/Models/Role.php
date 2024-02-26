<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Role extends Model
{
    use HasFactory;
    use HasUlids;
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
    ];
}
