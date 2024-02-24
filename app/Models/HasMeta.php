<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Meta;

trait HasMeta
{
    public function metas(): MorphMany
    {
        return $this->morphMany(Meta::class, 'metable');
    }

}