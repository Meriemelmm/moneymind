<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\User;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        // return redirect()->intended(route('gestion_user', absolute: false));
        
        $user = User::find(Auth::id());
        if($user->role){
         return  view('ajouter');
 
        }
        else{
         return view('categorie');
        }
 
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $userId = Auth::id();

        if ($userId) {
     
            $user = User::find($userId);
    
            if ($user) {
             
                $user->last_activated_at = Carbon::now();
    
                
                $user->save();
            }
        }
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        

        return redirect('/');
    }
    
}
