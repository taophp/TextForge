<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use App\Models\HasMeta;
class Meta extends Model
{
    use HasFactory;
    use HasUlids;
    use HasMeta;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'name',
        'metable_id',
        'metable_type',
        'content',
        'initiator',
    ];
    protected $casts = [
        'initiator' => 'string',
    ];

    protected $enum = [
        'initiator' => ['app', 'user'],
    ];

    public function metable(): MorphTo
    {
        return $this->morphTo();
    }

}
