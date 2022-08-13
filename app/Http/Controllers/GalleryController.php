<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function recents()
    {
        $data = Gallery::where('status', 3)->get();

        return response()->json([
            'status'    => true,
            'mensagem'  => 'sucesso',
            'dados'     => $data,
        ], 200);
    }
}
