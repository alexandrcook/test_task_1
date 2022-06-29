<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends FilterableModel
{
    use HasFactory;

    public $timestamps = false;

    protected array $filterable = ['client', 'product', 'total', 'date'];

    protected $fillable = ['client', 'product', 'total', 'date'];

    protected $dateViewFormat = 'm/d/Y';
    protected $dateDBFormat = 'Y-m-d';

    public function date() : Attribute
    {
        return Attribute::make(
            get: fn($date) => Carbon::make($date)->format($this->dateViewFormat),
            set: fn($date) => Carbon::make($date)->format($this->dateDBFormat)
        );
    }
}
