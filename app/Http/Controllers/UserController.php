<?php

namespace Laravel\Http\Controllers;

use Laravel\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        $tittle = 'Listado de usuarios';
        return view('user.index', compact('tittle','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id','=', $id)->firstOrFail();
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $user = User::where('id','=', $id)->firstOrFail();
            $user->delete();
            Session::flash('message', 'El usuario '.$user->first_name.' '.$user->last_name.' ha sido borrado correctamente');
            return redirect::back();
    }

    public function perfil()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('user.perfil', compact('user'));
    }

    public function show($id)
    {
        
            $users = User::where('id','=', $id)->firstOrFail();
            //$id_user = $user->id;
            //$total_articles = Article::where('user_id', $id_user)->count();
            //$roles_id = Role::orderBy('name', 'ASC')->pluck('name', 'id')->all();

        


        $tittle = 'Listado de usuarios';
        return view('user.index', compact('tittle','users'));
    }
}
