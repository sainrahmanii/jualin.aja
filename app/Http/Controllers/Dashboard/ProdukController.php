<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        date_default_timezone_set("Asia/Jakarta");

        $b = time();
        $hour = date("G", $b);

        if ($hour >= 5 && $hour <= 10){
            $salam = "Pagi";
        } elseif ($hour >= 11 && $hour <= 15){
            $salam = "Siang";
        }elseif ($hour >= 16 && $hour <= 18){
            $salam = "Sore";
        }elseif ($hour >= 19 && $hour <= 4){
            $salam = "Malam";
        }else{
            $salam = "Malam";
        }

        $categories = Category::all();
        $products = Product::whereUserId(Auth::id())->get();
        return view('market.dashboard.produk', compact(['categories', 'salam', 'products']));
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
        $image = $request->file('photo_products');
        $image->storeAs('public/photo_product', $image->hashName());

        Product::create([
            'slug'              => Str::slug($request->slug),
            'nama_produk'       => $request->nama_produk,
            'user_id'           => $request->user_id,
            'categories_id'     => $request->category_id,
            'berat'             => $request->berat,
            'harga_produk'      => $request->harga_produk,
            'deskripsi_produk'  => $request->deskripsi_produk,
            'photo_products'    => $image->hashName()
        ]);

        return redirect()->route('dashboard.produk.index');

        // var_dump($request->all());
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
