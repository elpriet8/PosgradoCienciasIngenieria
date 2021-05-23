<?php

namespace App\Http\Controllers;

use App\Models\LineasInv;
use Illuminate\Http\Request;
use Inertia\Inertia;


class LineasInvController extends Controller
{
    public function getAll(){

        $lineas = LineasInv::getAllAreas();
        return Inertia::render('LineasInv/LineasInv',[
            'lineas' => $lineas
        ]);
    }
}
