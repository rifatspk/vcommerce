<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
use App\Contracts\ProductContract;

class CartController extends Controller
{

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $productRepository;
    /**
     * Undocumented function
     *
     * @param ProductContract $productRepository
     */
    public function __construct(ProductContract $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function addToCart(Request $request)
    {

        $product = Product::find($request->product_id);
        if ($product->sale_price) {
            $productprice = $product->sale_price;
        } else {
            $productprice = $product->price;
        }

        Cart::add([
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $productprice,
            'quantity' => $request->product_qty,
            'attributes' => [
                'product_image' => $product->images->first()->full,
            ]
        ]);

        $sharge = config('settings.shipping_charge');

        $condition2 = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'Express Shipping $15',
            'type' => 'shipping',
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => +$sharge,
            'order' => 1
        ));
        Cart::condition($condition2);

        return redirect()->back()->with('message', 'Item added to cart successfully.');
    }
    public function updateCart(Request $request)
    {
        $id = $request->product_id;
        $qty = $request->product_qty;
        Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $qty
            ),
        ));


        return redirect()->back()->with('message', 'Item updated successfully.');
    }


    public function getCart()
    {
        return view('site.pages.cart');
    }


    public function removeItem($id)
    {
        Cart::remove($id);

        if (Cart::isEmpty()) {
            return redirect('/');
        }
        return redirect()->back()->with('message', 'Item removed from cart successfully.');
    }


    public function clearCart()
    {
        Cart::clear();

        return redirect('/');
    }
}
