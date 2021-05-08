<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Contracts\CategoryContract;
use App\Contracts\AttributeContract;

class PageController extends Controller
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
     * Undocumented function
     *
     * @param ProductContract $productRepository
     * @param AttributeContract $attributeRepository
     * @param CategoryContract $categoryRepository
     */
    public function __construct(ProductContract $productRepository, AttributeContract $attributeRepository, CategoryContract $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function homepage()
    {
        $categories = $this->categoryRepository->listCategories()->take(5);
        $latestproducts = $this->productRepository->listProducts('id', 'desc')->take(5);
        return view('site.pages.homepage', compact(['categories', 'latestproducts']));
    }

    public function shoppage()
    {
        $products = $this->productRepository->listProducts('id', 'desc');
        $categories = $this->categoryRepository->listCategories('id', 'desc')->except('Root');
        return view('site.pages.shoppage', compact(['products', 'categories']));
    }
}
