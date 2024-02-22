<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasUlids;
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'container_id',
    ];

    public function container()
    {
        return $this->belongsTo(Container::class);
    }

}
