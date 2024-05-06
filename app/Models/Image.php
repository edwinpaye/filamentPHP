<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Image extends Model
{
    use HasFactory, Notifiable, HasUuids;

    protected $table = 'images';

    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    // public function catalogo(): BelongsTo
    // {
    //     return $this->belongsTo(Catalogo::class);
    // }
}
