<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coment_forum extends Model
{
    use HasFactory;

    static $rules = [
		
		'descripcion' => 'required'
    ];

    protected $fillable = [
        'user_id',
        'descripcion'
    ];

    public function Usuario_forum (){
       
        return $this->BelongsTo ('App/Models/User');

    }


}
