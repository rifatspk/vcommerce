<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $table = 'attributes';
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'frontend_type', 'is_filterable', 'is_required'
    ];

    protected $casts = [
        'is_filterable' =>  'boolean',
        'is_required'   =>  'boolean',
    ];

    /**
     * Undocumented function
     *
     * @return void
     */
    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
