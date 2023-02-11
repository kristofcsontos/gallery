<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    static function getGallery()
    {
        $galleries = Gallery::all();
        /*
        foreach ($galleries as $gallery) {
            echo 'hello ' . $gallery->galleryName . ' ' . $gallery->galleryImageName .'!<br>';
            //array()
        }*/

        return view('galeria',['galleryAll' => $galleries]);
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('gall') and $request->filled('name')) {
           //Move Uploaded File to public folder
            $file= $request->file('gall');
            $destinationPath = 'image';
            $myimage = $file->getClientOriginalName();
            $request->gall->move(public_path($destinationPath), $myimage);
            
            $galleries =new Gallery;
            $galleries->galleryName = $request->name;
            $galleries->galleryImageName= $myimage;
            $galleries->save();
            return redirect('galeria');
        }
        else{
            return redirect('galeria');
        }
    }
}
