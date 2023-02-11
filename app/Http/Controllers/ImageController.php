<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    
    public function start($id){
        $images = Image::where('galleryId', $id)->get();
        /*foreach ($images as $image) {
            echo $image->imageName;
        }*/
        return view('image',
                            ['imageWithGalleryId' => $images],
                            ['id' => $id]);
        
        
    }
    public function upload(Request $request,$id)
    {
        if ($request->hasFile('image')) {
            //Move Uploaded File to public folder
             $file= $request->file('image');
             $destinationPath = 'image';
             $myimage = $file->getClientOriginalName();
             $request->image->move(public_path($destinationPath), $myimage);
             
             $images =new Image;
             $images->galleryId = $id;
             $images->imageName= ImageController::cutPng($myimage);
             $images->save();
             return redirect('/galeria/g='.$id);
             
         }
         else{
            return redirect('/galeria/g='.$id);
         }
    }
    static function cutPng($myimage)
    {
        $parts = explode(".", $myimage);
        return reset($parts);
    }

}
