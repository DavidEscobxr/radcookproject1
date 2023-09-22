<?php

namespace App\Http\Controllers;

use App\Models\Coment_recipe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ComentRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Coment_recipe = Coment_recipe::paginate();

        return view('coment.index', compact('Coment_recipe'))
            ->with('i', (request()->input('page', 1) - 1) * $Coment_recipe->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Coment_recipe = new Coment_recipe();
        return view('coment.create', compact('Coment_recipe'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Coment_recipe::$rules);

        $request['user_id'] = Auth::user()->id;
       $Coment_recipe = Coment_recipe::create($request->all());

        return redirect()->route('Coment_recipes.index')
            ->with('success', 'Coment recipe created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Coment_recipe = Coment_recipe::find($id);

        return view('coment.show', compact('Coment_recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Coment_recipe = Coment_recipe::find($id);

        return view('coment.edit', compact('Coment_recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coment_recipe $coment_recipe)
    {
        request()->validate(Coment_recipe::$rules);

        $coment_recipe->update($request->all());

        return redirect()->route('Coment_recipes.index')
            ->with('success', 'coment recipes updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $coment_forum = Coment_recipe::find($id)->delete();

        return redirect()->route('Coment_recipes.index')
            ->with('success', 'coment recipes deleted successfully');
    }
}
