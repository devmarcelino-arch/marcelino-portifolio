<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PainelController extends Controller
{
    public function index()
    {
        return view('admin.painel', [
            'user' => Auth::user()
        ]);
    }
}