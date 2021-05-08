<section class="category_product_area mt-30 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="category_product_carousel category_column4 owl-carousel">
                    @foreach ($categories as $category)
                    <div class="single_category_product">
                        <div class="category_product_thumb">
                            <a href="shop.html"><img src="{{ asset('storage/'.$category->image) }}"
                                    alt="{{$category->name}}"></a>
                        </div>
                        <div class="category_product_name">
                            <h2><a href="shop.html">{{$category->name}}</a></h2>
                        </div>
                    </div>

                    @endforeach
                    {{-- <div class="single_category_product">
                        <div class="category_product_thumb">
                            <a href="shop.html"><img src="assets/img/category/category2.jpg" alt=""></a>
                        </div>
                        <div class="category_product_name">
                            <h2><a href="shop.html">audio</a></h2>
                        </div>
                    </div>
                    <div class="single_category_product">
                        <div class="category_product_thumb">
                            <a href="shop.html"><img src="assets/img/category/category3.jpg" alt=""></a>
                        </div>
                        <div class="category_product_name">
                            <h2><a href="shop.html">Camera</a></h2>
                        </div>
                    </div>
                    <div class="single_category_product">
                        <div class="category_product_thumb">
                            <a href="shop.html"><img src="assets/img/category/category4.jpg" alt=""></a>
                        </div>
                        <div class="category_product_name">
                            <h2><a href="shop.html">lundry</a></h2>
                        </div>
                    </div>
                    <div class="single_category_product">
                        <div class="category_product_thumb">
                            <a href="shop.html"><img src="assets/img/category/category5.jpg" alt=""></a>
                        </div>
                        <div class="category_product_name">
                            <h2><a href="shop.html">cooling</a></h2>
                        </div>
                    </div>
                    <div class="single_category_product">
                        <div class="category_product_thumb">
                            <a href="shop.html"><img src="assets/img/category/category2.jpg" alt=""></a>
                        </div>
                        <div class="category_product_name">
                            <h2><a href="shop.html">audio</a></h2>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>