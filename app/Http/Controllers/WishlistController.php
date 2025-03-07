<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Console\View\Components\Warn;
use Illuminate\Support\Facades\Auth;
class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
  $souhaits= Wishlist::where('user_id',Auth::id())->get();
       
        
        return view('gestionWish',['souhaits'=> $souhaits]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wishListAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validated = $request->validate([

            'souhait'=>['required','string','max:225'],
            'prix_total'=>['required','numeric']
        ]);
        $wish=Wishlist::create([
            'souhait'=>$validated['souhait'],
            'prix_total'=>$validated['prix_total'],
            'user_id'=>Auth::id(),
            'priority'=>$request->priority,
        ]);
        if($wish){
            return redirect()->route('wish.index');
        }
        else{
            return " non succes";
        }


    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $updateid)
    {
        $souhait=Wishlist::find($updateid);
       
    return view('UpdateWishList',['souhait'=>$souhait]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $updateid)
    { 
        $souhait=Wishlist::find($updateid);
        $validated = $request->validate([

            'souhait'=>['required','string','max:225'],
            'prix_total'=>['required','numeric']
        ]);
        $wish=$souhait->update([
            'souhait'=>$validated['souhait'],
            'prix_total'=>$validated['prix_total'],
            
            'priority'=>$request->priority,
        ]);
        if($wish){
            return redirect()->route('wish.index');
        }
        else{
            return " non succes";
        }
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $souhait=Wishlist::find($id);
        $souhait->delete();
        return redirect()->route('Wishlist.index');
    }
}
