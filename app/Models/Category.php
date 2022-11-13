<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'title', 
        'title_ru', 
        'title_en',
        'description',
        'description_en',
        'description_ru',
        'image'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    
    public static function uploadImage(Request $request, $image = null)
    {
        if($request->hasFile('image')){
            if($image){
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
           return $request->file('image')->store("images/categories/{$folder}");
        }
        
        return null;
    }

    public function getImage()
    {
        if(!$this->image){
            return asset('images/noImag.jpg');
        }
        return asset('uploads/'.$this->image);
    }
}
