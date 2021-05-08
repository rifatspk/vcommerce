<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $table = 'attribute_values';
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = [
        'attribute_id', 'value', 'price'
    ];
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $casts = [
        'attributes_id' => 'integer',
    ];

    /**
     * Undocumented function
     *
     * @return void
     */
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productAttributes()
    {
        return $this->belongsToMany(ProductAttribute::class);
    }
}
