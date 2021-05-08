@extends('site.app')
@section('title', $product->name)
@section('styles')
<style>
    .product_d_right .action_links ul li.add_to_cart button {
        background: #ea000d;
        border-color: #ea000d;
        color: #ffffff;
        padding: 0 27px;
    }

    .action_links ul li.add_to_cart button {
        padding: 0 20px;
        border-radius: 30px;
        word-spacing: 1px;
    }

    .action_links ul li button {
        text-transform: capitalize;
        border: 1px solid #e5e5e5;
        border-top-color: rgb(229, 229, 229);
        border-right-color: rgb(229, 229, 229);
        border-bottom-color: rgb(229, 229, 229);
        border-left-color: rgb(229, 229, 229);
        line-height: 39px;
        display: block;
        font-size: 14px;
        background: #fff;
    }
</style>
@endsection
@section('content')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>{{$product->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--product details start-->
<div class="product_details mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">

                    @if ($product->images->count() > 0)
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="{{ asset('storage/'.$product->images->first()->full) }}">
                            <img id="zoom1" src="{{ asset('storage/'.$product->images->first()->full) }}"
                                data-zoom-image="{{ asset('storage/'.$product->images->first()->full) }}" alt="big-1">
                        </a>
                    </div>
                    @else
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="https://via.placeholder.com/176">
                            <img id="zoom1" src="https://via.placeholder.com/176"
                                data-zoom-image="https://via.placeholder.com/176" alt="big-1">
                        </a>
                    </div>
                    @endif
                    @if ($product->images->count() > 0)
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            @foreach ($product->images as $image)
                            <li>
                                <a href="#" class="elevatezoom-gallery" data-update=""
                                    data-image="{{ asset('storage/'.$image->full) }}"
                                    data-zoom-image="{{ asset('storage/'.$image->full) }}">
                                    <img src="{{ asset('storage/'.$image->full) }}" alt="zo-th-1" />
                                </a>

                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">


                    <h1>{{$product->name}}</h1>
                    <div class="product_nav">
                    </div>
                    {{-- <div class="product_rating">
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                            </ul>
                        </div> --}}
                    <div class="price_box">
                        @if ($product->sale_price)
                        <span
                            class="current_price">{{config('settings.currency_symbol')}}{{$product->sale_price}}</span>
                        <span class="old_price">{{config('settings.currency_symbol')}}{{$product->price}}</span>
                        @else
                        <span class="current_price">{{config('settings.currency_symbol')}}{{$product->price}}</span>
                        @endif
                    </div>
                    <div class="product_desc">
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="product_variant color">
                        <h3>Available Options</h3>
                        @foreach($attributes as $attribute)
                        @php $attributeCheck = in_array($attribute->id,
                        $product->attributes->pluck('attribute_id')->toArray()) @endphp
                        @if ($attributeCheck)
                        <h4>
                            {{$attribute->name}}
                        </h4>

                        @foreach ($product->attributes as $attributeValue)
                        @if ($attributeValue->attribute_id == $attribute->id)

                        <span style="text-transform:capitalize" class="mr-3">
                            {{ $attributeValue->value }}
                        </span>
                        @endif
                        @endforeach
                        @endif
                        @endforeach
                    </div>
                    <form action="{{route('addTocart')}}" method="POST">
                        @csrf
                        <div class=" product_variant quantity">
                            <label>quantity</label>
                            <input min="1" max="100" name="product_qty" value="1" type="number">
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                        </div>
                        <div class="action_links">
                            <ul>
                                <li class="add_to_cart"><button type="submit"><i
                                            class="zmdi zmdi-shopping-cart-plus"></i> add to cart</button></li>
                                {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                            </ul>
                        </div>
                    </form>
                    <div class="product_meta">
                        <span>Category:
                            @foreach ($product->categories as $category)
                            <a href="{{ route('category.show', $category->slug) }}">{{ $category->name}}</a>
                            @endforeach
                        </span>

                    </div>


                    {{-- <div class="priduct_social">
                        <ul>
                            <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a>
                            </li>
                            <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                            <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a>
                            </li>
                            <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>
                                    share</a></li>
                            <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a>
                            </li>
                        </ul>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
<!--product details end-->

<!--product info start-->
<div class="product_d_info">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">
                    <div class="product_info_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info"
                                    aria-selected="false">Description</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                    aria-selected="false">Specification</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                    aria-selected="false">Reviews (1)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <div class="product_info_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                    justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                    nulla.</p>
                                <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis
                                    fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa.
                                    Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed
                                    commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan
                                    elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam
                                    gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sheet" role="tabpanel">
                            <div class="product_d_table">
                                <form action="#">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="first_child">Compositions</td>
                                                <td>Polyester</td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Styles</td>
                                                <td>Girly</td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Properties</td>
                                                <td>Short Dress</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="product_info_content">
                                <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                    feminine designs delivering stylish separates and statement dresses which have since
                                    evolved into a full ready-to-wear collection in which every item is a vital part of
                                    a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and
                                    unmistakable signature style. All the beautiful pieces are made in Italy and
                                    manufactured with the greatest attention. Now Fashion extends to a range of
                                    accessories including shoes, hats, belts and more!</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="reviews_wrapper">
                                <h2>1 review for Donec eu furniture</h2>
                                <div class="reviews_comment_box">
                                    <div class="comment_thmb">
                                        <img src="{{asset('frontend')}}/img/blog/comment2.jpg" alt="">
                                    </div>
                                    <div class="comment_text">
                                        <div class="reviews_meta">
                                            <div class="star_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <p><strong>admin </strong>- September 12, 2018</p>
                                            <span>roadthemes</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="comment_title">
                                    <h2>Add a review </h2>
                                    <p>Your email address will not be published. Required fields are marked </p>
                                </div>
                                <div class="product_ratting mb-10">
                                    <h3>Your rating</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_review_form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Your review </label>
                                                <textarea name="comment" id="review_comment"></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="author">Name</label>
                                                <input id="author" type="text">

                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="email">Email </label>
                                                <input id="email" type="text">
                                            </div>
                                        </div>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product info end-->

@stop