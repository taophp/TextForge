<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Meta extends Model
{
    use HasFactory;
    use HasUlids;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'name',
        'metable_id',
        'metable_type',
        'content'
    ];

    public function metable(): MorphTo
    {
        return $this->morphTo();
    }

    public function metas(): MorphMany
    {
        return $this->morphMany(Meta::class, 'metable');
    }

}
