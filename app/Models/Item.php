<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'clientIdentifier', 'identifier');
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class, 'templateIdentifier', 'identifier');
    }
}
