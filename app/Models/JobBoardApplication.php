<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobBoardApplication extends Model
{
    /** @use HasFactory<\Database\Factories\JobBoardApplicationFactory> */
    use HasFactory;

    public function job(): BelongsTo
    {
        return $this->belongsTo(JobBoard::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
