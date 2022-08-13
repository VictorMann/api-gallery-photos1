<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $data = Categories::all();

        return response()->json([
            'status'    => true,
            'mensagem'  => 'sucesso',
            'dados'     => $data,
        ], 200);
    }

    public function subCategories($slug)
    {
        $cat = Categories::where('slug', $slug)->first();
        $data = [];

        if ($cat)
        {
            $cat->subs->each(function($item) use (&$data) {
                $image = $item->image();
                $data[] = (object) [
                    'id'    => $item->id,
                    'title' => $item->title,
                    'slug'  => $item->slug,
                    'row'   => $image->row ?? '',
                    'per'   => $image->per ?? '',
                    'width' => $image->width,
                    'height'=> $image->height,
                    'image' => $image->image,
                ];
            });
        }
            
        
        return response()->json([
            'status'    => true,
            'mensagem'  => 'sucesso',
            'dados'     => $data,
        ], 200);
    }

    public function getImages($slug)
    {
        $cat = Categories::where('slug', $slug)->first();
        $data = [];
        
        if ($cat) $data = $cat->images()->where('gallery.status', 1)->get();
        
        return response()->json([
            'status'    => true,
            'mensagem'  => 'sucesso',
            'dados'     => $data,
        ], 200);
    }
}
