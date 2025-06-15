<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier',
        'clientName',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(Item::class, 'clientIdentifier', 'identifier');
    }
}

