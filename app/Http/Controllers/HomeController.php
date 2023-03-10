<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categories,$page,$products,$product, $related_products,$category,$setting;
   public function index()
   {
    $categories  = Category::with('products')->get();
   
   //dd($categories);
    // $this->products=Product::latest()->where('status', '1')->paginate(18);
    $this->products=Product::latest()->where('status', '1')->get();
    return view('website.home.index',[
        'products'=> $this->products,
        'categories'=> $categories,
        
       
     ]);
   }
   public function hotdeal()
   {
    $this->categories  = Category::all();
    
   
    $this->products=Product::latest()->where('status', '1')->paginate(30);
    return view('website.home.hotdeal',[
        'products'=> $this->products,
        'categories'=> $this->categories,
        
       
     ]);
   }

   public function detail($id, $slug = null)
   {
    
    $cat_id= Product::where('id',$id)->value('category_id');
    $this->related_products = Product::where('category_id',$cat_id)->latest()->take(8)->get();

    $this->categories  = Category::all();
    $this->product=Product::find($id);
    return view('website.detail.index',[
        'product'=>$this->product,
        'categories'=> $this->categories,
        'related_products'=> $this->related_products,
        
    ]);
   }


   public function category($id)
   {

   
       $this->categories  = Category::all();
       $this->category  = Category::find($id);
       $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->get();
       return view('website.category.category',[
           'products' => $this->products,
           'category'=> $this->category,
           'categories'=> $this->categories,
       
           
       ]);
   }

   public function search(Request $request)
   {

    $searchText    =$request->search;

   

    $this->categories  = Category::all();

    $this->product =Product::where('name','LIKE',"%" .$searchText. "%")->paginate(18);
    return view('website.home.hotdeal',[
        'products'=> $this->product,
        'categories'=> $this->categories,
        
        
    ]);
    
   }
   public function information(){
    return view('website.home.information');
   }
   public function return(){
    return view('website.home.return');
   }
   public function term(){
    return view('website.home.term');
   }
   
}
