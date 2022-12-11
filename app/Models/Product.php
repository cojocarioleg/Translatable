<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    use Translatable;
    protected $fillable = [
        'title',
        'title_en',
        'title_ru',
        'price',         
        'content', 
        'content_en', 
        'content_ru', 
        'image', 
        'category_id', 
        
    ];
    
     	 	 		 	
    public function tags(){
        return $this->BelongsToMany(Tag::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
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
           return $request->file('image')->store("images/products/{$folder}");
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

    public function getPriceForCount(){
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }         
        return $this->price ;
    }
}
