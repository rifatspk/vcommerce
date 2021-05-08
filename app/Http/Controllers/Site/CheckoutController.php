<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Contracts\OrderContract;
use App\Models\User;
use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout()
    {
        return view('site.pages.checkout');
    }

    public function placeOrder(Request $request)
    {

        $order = $this->orderRepository->storeOrderDetails($this->formValidate());
        if ($order) {
            Cart::clear();
        }
        return redirect()->back()->with('message', 'An Order Has Been Placed Successfully');
    }


    private function formValidate()
    {
        return request()->validate([
            'user_id' => 'nullable',
            'grand_total' => 'nullable',
            'item_count' => 'nullable',
            'payment_status' => 'nullable',
            'payment_method' => 'nullable',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'post_code' => 'required',
            'phone_number' => 'required',
            'notes' => 'nullable',
        ]);
    }
}
