<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class ForumController extends Controller
{
    public function index(){
        return view('forum.index');
    }
}