<?php

namespace App\Http\Controllers;

use App\Models\NovaController;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Routing\Route;




namespace App\Http\Controllers;


class NovaController
{
    
    public function index() {
        $rota = 'Nova Rota';
        return view('machines.nova')->with('rota', $rota);
}
}