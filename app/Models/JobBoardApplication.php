<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobBoardApplication extends Model
{
    /** @use HasFactory<\Database\Factories\JobBoardApplicationFactory> */
    use HasFactory;

    protected $fillable = ['expected_salary', 'user_id', 'job_board_id'];

    public function job(): BelongsTo
    {
        return $this->belongsTo(JobBoard::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
