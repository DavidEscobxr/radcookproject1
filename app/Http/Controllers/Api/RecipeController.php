<?php

namespace App\Http\Controllers\Api;

use App\Ingredient;
use App\Models\User;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class RecipeController extends BaseController
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'user_id' =>['required', 'integer'],
            'image' => ['required', 'string', 'max:255'],
            'ingredients' => ['required', 'array']
        ]);
    }

    public function create(Request $request){
        $validator = $this->validator($request->all());

        if ($validator->fails()){
            return response()->json(['errors' => $validator->errors()], Response::HTTP_BAD_REQUEST);
        }

        $user = User::find($request->user_id);

        if ($user == null){
            return response()->json(['status' => 'user not found'], response::HTTP_BAD_REQUEST);
        }

        foreach ($request->ingredients as $id){
            $ingredient = Ingredient::find($id);

            if ($ingredient == null){
                return response()->json(['message' => 'ingredient not found'], response::HTTP_BAD_REQUEST);
            }
        }

        $recipe = Recipe::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'user_id' =>$user->id,
            'image' => $request->image
        ]);

        if ($recipe == null) {
            return response()->json(['status' => 'error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        foreach ($request->ingredients as $id ){
            $recipe->recipeIngredients()->create([
                'recipe_id' => $recipe->id,
                'ingredient_id' => $id
            ]);
        }

        return response()->json(['status' => 'ok'], Response::HTTP_OK);
    }

    public function getAll(Request $request){
        $recipes = Recipe::all()->groupBy('category');

        if ($recipes->count() == 0){
            return response()->json(['status' => 'not_found'], Response::HTTP_NOT_FOUND);
        }

        foreach ($recipes as $recipe) {
            $ingredients = $recipe->recipeIngredients();
            return $ingredients;
        }

        return response()->json($recipes, response::HTTP_OK);
    }

    public function getById(Int $id){

        $ingredient = Ingredient::find($id);

        if ($ingredient == null){
            return response()->json(['status' => 'not_found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($ingredient, response::HTTP_OK);
    }
}
