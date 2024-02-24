<?php
namespace App\Models;

use App\Models\User;

trait HasUser
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}