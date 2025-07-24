<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RandomNumber extends Model
{
    protected $table = 'random_numbers';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'number'];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
}
