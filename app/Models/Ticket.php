<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use App\Models\HasMeta;
use App\Models\HasUser;

class Ticket extends Model
{
    use HasFactory;
    use HasUlids;
    use HasMeta;
    use HasUser;
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'user_id',
    ];

}
