<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Text;
use App\Models\User;

class Container extends Model
{
    use HasUlids;
    use HasFactory;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
