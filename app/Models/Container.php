<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Text;
use App\Models\HasUser;
use App\Models\HasMeta;

class Container extends Model
{
    use HasUlids;
    use HasFactory;
    use HasMeta;
    use HasUser;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'description',
        'container_id',
        'user_id',
    ];

    public function containers(): HasMany
    {
        return $this->hasMany(Container::class);
    }

    public function container()
    {
        return $this->belongsTo(Container::class);
    }

    public function texts(): HasMany
    {
        return $this->hasMany(Text::class);
    }

}
