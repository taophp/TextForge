<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HasMeta;

class Text extends Model
{
    use HasUlids;
    use HasFactory;
    use HasMeta;
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'container_id',
        'content'
    ];

    public function container()
    {
        return $this->belongsTo(Container::class);
    }



}
