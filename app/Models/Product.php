<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable, HasUuids;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'description'];

    public function catalogo(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}
