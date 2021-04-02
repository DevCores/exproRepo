<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SProduct;
use App\Mail\CartMail;
use Cart;
use Mail;
use Config;

class CartController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkout(Request $request)
    {
        $cart =  Cart::content();
        return view('project.sinotruk_checkout', compact('cart'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function mail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'family' => 'required',
            'last_family' => 'required',
            'organization' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'model' => 'required',
            'years' => 'required',
            'vin' => 'required',
        ]);
        $mail = [];
        foreach ($request->request as $key => $value)
        {
            if ($key != "_token" && $key != "name" && $key != "family" && $key != "last_family" && $key != "organization" && $key != "phone" && $key != "email" && $key != "model" && $key != "vin" && $key != "info" && $key != "years")
                   {
                if (json_decode($value)->product)
                {
                    $mail[json_decode($value)->product][json_decode($value)->id] = json_decode($value);
                }

            }else{

            }
            
        }
        $contacts = array(
            "name" => $request->name,
            "family" => $request->family,
            "last_family" => $request->last_family,
            "organization" => $request->organization,
            "phone" => $request->phone,
            "email" => $request->email,
            "model" => $request->model,
            "vin" => $request->vin,
            "years" => $request->years,
            "info" => $request->info,
        );

        foreach ($mail as $key => $value) {
            $mail[SProduct::name($key)] = $value;
            unset($mail[$key]);

        }
        if ($request->email != null) {
           Mail::to(Config('mail.from.address'))->cc([$request->email])->send(new CartMail($mail, $contacts));
        }else{
           Mail::to(Config('mail.from.address'))->send(new CartMail($mail, $contacts));
        }
        Cart::destroy();
        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function qty(Request $request)
    {
        foreach ($request->request as $key => $value)
        {
            if ($key != "_token")
            {
                if (Cart::content()->has($key)){
                    Cart::update($key, ['qty' => $value]);
                }
                      
            }
        }
        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function remove(Request $request)
    {

        Cart::remove($request->rowId);
        return response()
            ->json(['success' => 'Удалено из корзины']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cart = [];
        $count = [];
        foreach ($request->request as $key => $value)
        {
            if ($key != '_token')
            {
                if (is_int($key))
                {
                    if ($value > 0)
                    {
                        $count[$key] = $value;
                    }
                }
                else
                {
                    $cart[$key] = json_decode($value, true);
                }
            }

            foreach ($cart as $keys => $values)
            {

                foreach ($count as $key => $value)
                {

                    if ($values['id'] == intval($key))
                    {
                        $cart[$keys]['count'] = $value;

                    }
                }
            }
        }

        foreach ($cart as $key => $item)
        {
            if (!array_key_exists('count', $item))
            {
                unset($cart[$key]);
            }
        }

        foreach ($cart as $key => $value)
        {
            $value['image'] = SProduct::image($value['product']);
            $cart[$value['id']] = $value;
            unset($cart[$key]);

            Cart::add($value['product'], $value['russian_name'], $value['count'], 9.99, $value, 20);
        }

        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }
}

