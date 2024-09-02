<?php

namespace Modules\demandeur\Annonce\App\Http\Controllers;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AnnonceBabySitterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('annonce::babysitter');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve the specific label based on the fixed parameters and order by 'orders'
        $elements = DB::table('users_data')
            ->where('service', 'babysitter')
            ->where('unit', 'child_age')
            ->orderBy('orders', 'asc') // Order by 'orders' in ascending order
            ->get();
            
        $services = DB::table('users_data')
            ->where('service', 'babysitter')
            ->where('unit', 'type_service')
            ->orderBy('orders', 'asc') // Order by 'orders' in ascending order
            ->get();
            

        // Pass the specific label to the view
       return view('annonce::babysitter',compact('elements','services'));
       // return view('annonce::babysitter')->with(['elements' => $elements],['services' => $services]);

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
        return view('annonce::babysitter');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('annonce::edit');
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
