<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['review', 'rating'];

    public function diner()
    {
        return $this->belongsTo(Diner::class);
    }

    protected static function booted()
    {
        static::updated(fn (Review $review) => cache()->forget('diner:' . $review->diner_id));
        static::deleted(fn (Review $review) => cache()->forget('diner:' . $review->diner_id));
        static::created(fn (Review $review) => cache()->forget('diner:' . $review->diner_id));
    }
}
