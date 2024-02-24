<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HasMeta;
use App\Models\HasUser;

class Text extends Model
{
    use HasUlids;
    use HasFactory;
    use HasMeta;
    use HasUser;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'container_id',
        'content',
        'user_id'
    ];

    public function container()
    {
        return $this->belongsTo(Container::class);
    }



}
