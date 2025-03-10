<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Depense;
use Illuminate\Support\Facades\Auth;
use App\Services\GeminiAIService;


class UserController extends Controller
{ protected $geminiAIService;

    public function __construct(GeminiAIService $geminiAIService)
    {
        $this->geminiAIService = $geminiAIService;
    }
    public function static()
{
    $user = User::with('depenses')->find(Auth::id());

    
    $userId = Auth::id();

    $depenses = Depense::where('user_id', $userId)
        ->join('categories', 'depenses.categorie_id', '=', 'categories.id')
        ->select('depenses.name_depense', 'depenses.montant', 'categories.name_categorie', 'depenses.type')
        ->get()
        ->toArray();

    if (empty($depenses)) {
        return response()->json(['message' => 'Aucune dépense trouvée.'], 404);
    }

    
    if (!isset($this->geminiAIService)) {
        return response()->json(['message' => 'Service AI non disponible.'], 500);
    }

    $suggestion = $this->geminiAIService->analyseDepenses($depenses);

    $totalDepense = $user->depenses->sum('montant');

    return view('bordUser', [
        'user' => $user,
        'total' => $totalDepense,
        'suggestion' => $suggestion
    ]);
}




    public function create()
    {
        
    }

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
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
