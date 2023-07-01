<?php
namespace App\Core\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'category_type',
        'country_id',
        'thumbnail_url',
        'is_actived',
        'meta_title',
        'meta_keyword',
        'meta_description'
    ];
}
