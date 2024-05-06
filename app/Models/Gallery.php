<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Gallery extends Model
{
    use HasFactory, Notifiable, HasUuids;

    protected $table = 'galleries';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'description'];

    public function catalogo(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
