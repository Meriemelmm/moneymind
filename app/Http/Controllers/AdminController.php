<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Depense;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 $users=User::where('last_activated_at','<',Carbon::now()->subMonth(2))
 ->where('role', '=', 'user')
 ->get();


        return view('gestion_user',['users'=>$users]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    // public function ajouteBudget()
    // {
    //     $users = User::all();
    //     foreach ($users as $user) {
    //         // Vérifier si le jour de la dateCreditSalaire est égal à 12
    //         if ($user->dateCreditSalaire == 12) {
    //             $user->budget += $user->salaire;
    //             $user->save();
    //         }
    //     }
    // }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function static()
    {
        // $users= User::count();
        $users = DB::table('users')->count();
        return view('bordAdmin',['users'=>$users]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($userid)

    {$user = User::find($userid);
        $user->delete();
        
        return redirect()->route('users.index');
      
        //
    }
}
