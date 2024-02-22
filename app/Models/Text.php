<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Meta;


class Text extends Model
{
    use HasUlids;
    use HasFactory;
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

    public function metas(): MorphMany
    {
        return $this->morphMany(Meta::class, 'metable');
    }


}
