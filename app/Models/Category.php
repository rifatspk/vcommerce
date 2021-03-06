<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TypiCMS\NestableTrait;

class Category extends Model
{
    /**
     * @package NestableTrait
     */
    use NestableTrait;


    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $table = 'categories';
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description', 'parent_id', 'featured', 'menu', 'image'
    ];
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $casts = [
        'parent_id' => 'integer',
        'featured' => 'boolean',
        'menu', 'boolean'
    ];

    /**
     * Undocumented function
     *
     * @param [type] $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories', 'category_id', 'product_id');
    }
}
