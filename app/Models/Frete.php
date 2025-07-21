<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Etapa;


class Frete extends Model
{
    use HasFactory;
    public function etapas(): HasMany
    {
        return $this->hasMany(Etapa::class);
    }
}
