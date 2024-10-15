<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Meal;

class MealCategory extends Model
{
    use HasFactory;

    public $table = "meals_categories";
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = ["name"];

    public function meals():HasMany
    {
        return $this->hasMany(Meal::class, 'id_category');
    }
}
