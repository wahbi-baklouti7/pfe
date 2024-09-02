<?php

namespace Modules\demandeur\Profil\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('profil::register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profil::register');
    }

    /**
     * Show the form for regiter a new resource.
     */
    public function register()
    {
        $elements = DB::table('region')->get();

        return view('profil::register')->with(['elements'=> $elements]);
    }

    /**
     * Show the form for login to solution.
     */
    public function login()
    {
        return view('profil::login');
    }

    /**
     * Show the form for forgot password.
     */
    public function forgot()
    {
        return view('profil::forgot');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        {
            $request->validate([
                'fullname' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'pwd' => 'required|string|min:6',
                'id_region' => 'required|exists:region,id',
            ]);
        
            DB::table('users')->insert([
                'name' => $request->input('fullname'),  
                'fullname' => $request->input('fullname'),
                'email' => $request->input('email'),
                'password' => $request->input('pwd'),
                'id_region' => $request->input('id_region'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            return redirect()->route('login')->with('success', 'Account created successfully!');
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('profil::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('profil::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
