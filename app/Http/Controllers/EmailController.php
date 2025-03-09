<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EmailController extends Controller
{
    public function sendEmail()
    {
        try {
            Mail::to('el.mecaniqui.meriem@student.youcode.ma')->send(new UserMail());
            return response()->json(['message' => '✅ Email envoyé avec succès !'], 200, [], JSON_UNESCAPED_UNICODE);
        } catch (Throwable $e) {
            return response()->json(['error' => '❌ Échec de l\'envoi de l\'email.', 'details' => $e->getMessage()], 500, [], JSON_UNESCAPED_UNICODE);
        }
        
    }
}
