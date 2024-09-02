<?php

namespace Modules\demandeur\Profil\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class forgotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profil::forgot');
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
        return view('profil::register');
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
        //
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
