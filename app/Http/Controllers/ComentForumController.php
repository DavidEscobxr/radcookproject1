<?php

namespace App\Http\Controllers;

use App\Models\Coment_forum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ComentForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Coment_forum = Coment_forum::paginate();

        return view('forum.index', compact('Coment_forum'))
            ->with('i', (request()->input('page', 1) - 1) * $Coment_forum->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Coment_forum = new Coment_forum();
        return view('forum.create', compact('Coment_forum'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Coment_forum::$rules);

        $request['user_id'] = Auth::user()->id;
       $Coment_forum = Coment_forum::create($request->all());

        return redirect()->route('Coment_forum.index')
            ->with('success', 'Coment forum created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $Coment_forum = Coment_forum::find($id);

        return view('forum.show', compact('Coment_forum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $Coment_forum = Coment_forum::find($id);

        return view('forum.edit', compact('Coment_forum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coment_forum $coment_forum)
    {
        request()->validate(Coment_forum::$rules);

        $coment_forum->update($request->all());

        return redirect()->route('Coment_forum.index')
            ->with('success', 'coment forum updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $coment_forum = Coment_forum::find($id)->delete();

        return redirect()->route('Coment_forum.index')
            ->with('success', 'coment forum deleted successfully');
    }
}
