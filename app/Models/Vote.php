<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use App\Models\HasUser;
use App\Models\Ticket;

class Vote extends Model
{
    use HasFactory;
    use HasUser;
    use HasUlids;

    protected $fillable = [
        'user_id',
        'ticket_id',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
