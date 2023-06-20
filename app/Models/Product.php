<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements Hasmedia
{
    use HasFactory, sluggable, InteractsWithMedia;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $appends = ['gallery'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true,
            ]
            ];
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getGalleryAttribute(){
        return $this->getMedia('gallery');
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
