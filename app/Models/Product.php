<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $slug
 * @property $details
 * @property $price
 * @property $shipping_cost
 * @property $description
 * @property $category_id
 * @property $brand_id
 * @property $image_path
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'name' => 'required',
		'slug' => 'required',
		'price' => 'required',
		'shipping_cost' => 'required',
		'description' => 'required',
		'category_id' => 'required',
		'brand_id' => 'required',
		'image_path' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','slug','details','price','shipping_cost','description','category_id','brand_id','image_path'];



}
