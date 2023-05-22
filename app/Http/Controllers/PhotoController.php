<?php

namespace App\Http\Controllers;
use App\Http\Requests\ImagesRequest;


use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    public function create()
    {
        return view('photo');
    }

    public function store(ImagesRequest $request)
    {
        $request->image->store(config('images.path'), 'public');

        return view('photo_ok');
    }
}
