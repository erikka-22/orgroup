<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // このメンバーが属するグループ
    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
}
