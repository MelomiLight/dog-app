<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'dog_id',
        'name',
        'health_level',
        'hunger_level',
        'image_url',
        'price',
        'last_feeding_time'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function dog(): BelongsTo
    {
        return $this->belongsTo(Dog::class);
    }
}