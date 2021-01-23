<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TweetComments extends Pivot
{
    use HasFactory;

    public function tweets() {
        $this->belongsTo(Tweet::class);
    }

    public function users(){
        $this->belongsTo(User::class);
    }
}
