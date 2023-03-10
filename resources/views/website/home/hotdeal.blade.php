@extends('website.master')
@section('body')
<div class="container-fluid pt-2">
     <!-- Products Start -->
     {{-- @if ($products->count() > 0)
     <div class="container-fluid py-2 mb-5 bg-hotdeal">
    
        <div class="row mb-3">
            <div class="col-md-6 col-6">
                <div class="hot-deals-gif">
                    <img src="{{ asset('/') }}website/img/hot-deal-logo.gif" alt="" width="100px">
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="all-hot-deals-btn text-right mt-2 font-weight-bold">
                    <a href="" class="text-danger">সকল হট ডিল <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row px-xl-5 bg-warnings">
            <div class="col">
                <div class="owl-carousel related-carousel">


                    @foreach($products as $product)
                    
                     <div class="position ">
                        <a href="{{route('product.detail',['id'=>$product->id,'slug'=> Str::slug($product->name)])}}">
                        <img class="img-fluid w-100" src="{{asset($product->image)}}" alt="">
                         </a>
                        <div class="sub-position">
                            <div class="dis-image">
                                <img src="{{asset('/')}}website/img/flash-deal-percentage.png" alt="">
                                <div class="discount text-white">
                                    <span>{{$product->parcent}}%</span>
                                     <br>
                                    <span>ছাড়</span>
                                </div>
                            </div>
                        </div>
                        <div class="sub-price ">
                            <p class="text-white text-center">৳{{$product->selling_price}}</p>
                         </div>
                     </div>    
                                    
                     @endforeach
                     
                </div>
            </div>
        </div>
    </div>
   @endif --}}

  <img src="" alt="" >
    <!-- Products End -->
    <div class="text-center mb-4">


        @if ($products->count() == 0)
                <h1 class="text-center text-danger py-5">দুঃখিত কোন পণ্য পাওয়া যায়নি  </h1>
                <a href="{{ route('home') }}" class="btn btn-success rounded">HOME</a>
    

                @else
        <h5 class="text-left px-5 font-weight-bold">All Leather Products</h5>
    </div>
    <div class="row px-xl-5 pb-3">

        @foreach($products as $product)
        
        <div class=" col-md-2 col-6 border-light border-1 ">
            <div class="card  border-1 ">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent  p-0" style="border:3px solid #1ea248">
                    <a href="{{route('product.detail',['id'=>$product->id,'slug'=> Str::slug($product->name)])}}">
                        <img class="img-fluid w-100" src="{{asset($product->image)}}" alt="" style="height: 210px; width:205px;">
                    </a>
                    
                </div>
                <div class="card-body border-left border-right text-center p-0 ">
                    <a href="{{route('product.detail',['id'=>$product->id,'slug'=> Str::slug($product->name)])}}">
                        <h6 class="text-truncate  p-3 ">{{$product->name}}</h6>
                    </a>
                    <p class="text-dark">৳<del>{{$product->selling_price}}</del>  &nbsp; ৳{{$product->selling_price}}</p>
                        
                        
                            <form action="{{route('add-to-cart', ['id' => $product->id ])}}" method="POST">  
                                @csrf    
                                
                                <input type="hidden" name="quantity"  value="1" >
                                <div class="pb-2 px-1">
                                    <button type="submit" class="btn btn-sm w-100 mb-2  px-2 text-white rounded btnhober" name="order_now" >অর্ডার করুন</button> 
                                </div>
                                
                            </form>
                    
                </div>
                
            </div>
        </div>

        @endforeach
        @endif
    </div>

    <span>{{$products->links()}}</span>
</div>

{{-- <style>
    .w-5{
        height: 45px;
        width: 45px;
    }
</style> --}}
@endsection