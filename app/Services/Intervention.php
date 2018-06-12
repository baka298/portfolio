<?php
namespace App\Services;

use App\User;
use Storage;
use Image;

class Intervention
{
    
    /**
     * Sauvegarder des images et les resizer
     * @param Request->image;
     * @return string le nom de l'image
     */


    public function imageStore($arg)
    {
        $imageName = $arg['image']->store('','image');
        $arg['image']->store('',$arg['disk']);
        
        $img = Image::make(Storage::disk($arg['disk'])->path($imageName))->resize($arg['taille'], null, function ($para){
            $para->upsize();
            $para->aspectRatio();
        });
        $img->save();
        return $imageName;

    }

    /**
     * Supprimer les differentes tailles d'image
     * @param string nom de l'image
     * @return void
     */


    public function imageDelete($image)
    {
        if(Storage::disk('image')->exists($image)){
            Storage::disk('image')->delete($image);
            Storage::disk('resizesm')->delete($image);
            Storage::disk('resizemd')->delete($image);
            Storage::disk('resizel')->delete($image);

        }

    }
}