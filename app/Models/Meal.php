<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meal extends Model
{
    use HasFactory;
    

    public $table = "meals";

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = ["title", "description", "price", "id_category"];

    /**
     * @var array
     */
    protected $hidden = [];
    /**
     * @var array
     */
    protected $casts = [];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(MealCategory::class);
    }
}
