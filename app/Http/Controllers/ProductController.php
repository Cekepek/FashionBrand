<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    function cart()
    {
        $cart = session("cart");
        // return dd($cart);
        return view('cart', compact("cart"));
    }

    function addcart(Product $product){
        $cart = session("cart");
        if(!$cart){
            $cart = array();
        }
        if(!isset($cart[$product->id])){
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image,
            ];
        } else {
            $cart[$product->id]["quantity"]++;
        }
        session()->put("cart", $cart);
        return response()->json([
            "status" => "oke",
            "message" => "sukses menambahkan $product->name ke cart"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = brand::all();
        $cats = Category::all();
        $types = Product_type::all();
        return view('product.create', ['brands' => $brands,'cats' => $cats, 'types' =>$types]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::where("name", $request->name)->first();

        if ($product) {
            // ini kalo kategori sudah ada
            return back()->withInput()->with('status', "Product with the same name already exist!");
        }

        $file = $request->file('image');
        $imgfolders = 'images';
        $imgfile = time()."_".$file->getClientOriginalName();
        $file->move($imgfolders,$imgfile);

        $product = new Product();
        $product->name = $request->name;
        $product->dimension = $request->dimension;
        $product->price = $request->price;
        $product->brand_id = $request->brand;
        $product->product_type = $request->productType;
        $product->image = $imgfile;
        $product->save();
        $cat_id = $request->get('cat');
        $product->categories()->attach($cat_id);
        // $count = Category::count();
        // for($i = 1; $i<=$count;$i++) {
        //     $cat = "cat$i";
        //     if(isset($request->cat)){
        //         $product->categories()->attach($request->$cat);
        //     }
        // }
        $product->save();

        return redirect()->route("product.index")->with('status', "Product telah berhasil ditambahkan!");
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
        return view("productFormUpdate", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Product $product)
    {
        if ($product->name == $request->name) {
            // ini kalo kategori sudah ada
            $product->name = $request->name;
            $product->dimension = $request->dimension;
            $product->price = $request->price;
            $product->image = $request->image;
            $product->save();
            return redirect()->route("products.index")->with('status', "Product telah berhasil di Update!");
        } else {
            $cek = Product::where("name", $request->name)->first();
            if ($cek) {
                return back()->withInput()->with('status', "Product with the same name already exist!");
            } else {
                $product->name = $request->name;
                $product->dimension = $request->dimension;
                $product->price = $request->price;
                $product->image = $request->image;
                $product->save();
                return redirect()->route("products.index")->with('status', "Product telah berhasil di Update!");
            }
        }
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
