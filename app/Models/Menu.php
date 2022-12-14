<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        "pdf_path", "active"
    ];

    protected $hidden = [];

    public function type (): BelongsTo {
        return $this->belongsTo(MenuType::class, 'id_type');
    }
}
