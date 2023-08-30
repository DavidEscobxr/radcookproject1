<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingredient
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $client_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property RecipeIngredient[] $recipeIngredients
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingredient extends Model
{
    
    static $rules = [
		'name' => 'required',
		'type' => 'required',
		'client_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','client_id'];


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
        return $this->hasMany('App\Models\RecipeIngredient', 'ingredient_id', 'id');
    }
    

}
