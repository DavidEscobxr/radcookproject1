<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recipe
 *
 * @property $id
 * @property $name
 * @property $category
 * @property $client_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property RecipeIngredient[] $recipeIngredients
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recipe extends Model
{
    
    static $rules = [
		'name' => 'required',
		'category' => 'required',
		'client_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','category','client_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'client_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeIngredients()
    {
        return $this->hasMany('App\Models\RecipeIngredient', 'recipe_id', 'id');
    }
    

}
