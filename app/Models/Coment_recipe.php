<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coment_recipe extends Model
{
    use HasFactory;
    static $rules = [
		'user_id' => 'required',
		'recipe_id' => 'required',
		'description' => 'required',
		
    ];
    protected $fillable = [
        'user_id',
        'recipe_id',
        'descripcion'
    ];

    public function Usuario_recipe (){
       
        return $this->BelongsTo ('App/Models/User');

    }


}
