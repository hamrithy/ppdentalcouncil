<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    protected $fillable = ['title', 'article_text', 'category_id'];

    public function photo()
    {
        return $this->hasMany(NewsPostPhoto::class, 'newspost_id', 'id');
    }

    public function photoPrimary()
    {
        return $this->photo
                    ->where('primary', '=', 1)
                    ->first();
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function  getPublishedAttribute($value)
    {
        return $value == 1 ? 'Published' : '';
    }

    public function categoryName()
    {
        return $this->category != null ? $this->category->name : '';
    }
}
