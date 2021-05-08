<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\Contracts\AttributeContract;

class ProductController extends Controller
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $productRepository;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $attributeRepository;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $categoryRepository;


    public function __construct(ProductContract $productRepository, AttributeContract $attributeRepository)
    {
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
    }
    /**
     * Undocumented function
     *
     * @param [type] $slug
     * @return void
     */
    public function show($slug)
    {
        $product = $this->productRepository->findProductBySlug($slug);
        $attributes = $this->attributeRepository->listAttributes();

        return view('site.pages.product', compact('product', 'attributes'));
    }
}
