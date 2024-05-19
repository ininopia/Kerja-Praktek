<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FotoLokasi;
use Illuminate\Http\Request;
use App\Models\BatasDesa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class BatasDesaController extends Controller
{
    public function getAllGeojson()
    {
        $geojsons = BatasDesa::all();
        $baseUrl = URL::to('/') . '/api/desa/';
    
        foreach ($geojsons as $geojson) {
            $geojson->file_geojson = $baseUrl . $geojson->file_geojson;
        }
        return response()->json($geojsons);
    }
    
    public function getGeojsonFile($filename)
    {
        $path = 'Batas Desa/' . $filename;

        if (Storage::disk('public')->exists($path)){
            $file = Storage::disk('public')->get($path);
            return response($file, 200)->header('Content-Type', 'application/json');
        } else {
            return response()->json(['massage' => 'Dokumen Tidak Ditemukan.'], 404);
        }
    }
   
}
