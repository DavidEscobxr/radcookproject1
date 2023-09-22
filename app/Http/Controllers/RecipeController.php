<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class RecipeController
 * @package App\Http\Controllers
 */
class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::paginate();

        return view('recipe.index', compact('recipes'))
            ->with('i', (request()->input('page', 1) - 1) * $recipes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recipe = new Recipe();
        $ingredients = Ingredient::get();

        $map = $ingredients->groupBy(function($item){
            return $item->type;
        });


        $map = $map->toArray();

        //dd($map);
        return view('recipe.create', compact('recipe', 'map'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Recipe::$rules);
        $request['user_id'] = Auth::user()->id;

        $file = $request->file('photo');
        $destinationPath = 'uploads/recipes';
        $file->move($destinationPath, $file->getClientOriginalName());
        $request['image'] = ($destinationPath . '/' . $file->getClientOriginalName());

        $recipe = Recipe::create($request->all());

        if ($recipe->id != null) {
            foreach ($request['ingredients'] as $ingredient) {
                $recipe->recipeIngredients()->create([
                    'recipe_id' => $recipe->id,
                    'ingredient_id' => $ingredient
                ]);
            }
        }

        return redirect()->route('recipes.index')
            ->with('success', 'Recipe created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);

        return view('recipe.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);

        $ingredients = Ingredient::get();

        $map = $ingredients->groupBy(function($item){
            return $item->type;
        });


        $map = $map->toArray();

        return view('recipe.edit', compact('recipe', 'map'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        request()->validate(Recipe::$rules);

        $recipe->update($request->all());

        return redirect()->route('recipes.index')
            ->with('success', 'Recipe updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id)->delete();

        return redirect()->route('recipes.index')
            ->with('success', 'Recipe deleted successfully');
    }
}
