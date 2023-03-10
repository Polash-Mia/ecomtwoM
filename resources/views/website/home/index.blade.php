@extends('website.master')
@section('body')
    <!-- Navbar Start -->
    <div class="container-fluid mb-5 py-3">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-success  w-100"
                    data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0 text-white">Categories</h6>
                    <i class="fa fa-angle-down text-white"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
                    id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-auto" style="height: 360px">
                        @foreach ($categories as $category)
                            <a href="{{ route('category', ['id' => $category->id]) }}"
                                class="nav-item nav-link">{{ $category->name }}</a>
                        @endforeach



                    </div>
                </nav>
            </div>
            <div class="col-lg-9 px-3">
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($slides as $key => $slide)
                            <div class="carousel-item  {{ $key == 0 ? 'active' : ' ' }}" style="height: 450px;">
                                <img class="img-fluid h-100" src="{{asset($slide->image)}}"
                                    alt="Image">

                            </div>
                        @endforeach

                        {{-- <div class="carousel-item" style="height: 450px;">
                            <img class="img-fluid" src="{{ asset('/') }}website/img/carousel-2.jpg" alt="Image">

                        </div> --}}
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    {{-- <div class="container-fluid pt-2">


        <img src="" alt="">
        <!-- Products End -->
        <div class="text-center mb-4">


            @if ($products->count() == 0)
                <h1 class="text-center text-danger py-5">দুঃখিত কোন পণ্য পাওয়া যায়নি </h1>
                <a href="{{ route('home') }}" class="btn btn-success rounded">HOME</a>
            @else
                @foreach ($categories as $category)
                    


                    
        </div>
        <div class=" row px-xl-5 pb-3">

            <h5 class=" text-left px-5 font-weight-bold ">{{ $category->name }}</h5>

            @foreach ($category->product as $product)
                <div class=" text-left mt-5 col-md-2 col-6 border-light border-1 ">
                    <div class="card  border-1 ">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent  p-0"
                            style="border:3px solid #1ea248">
                            <a href="{{ route('product.detail', ['id' => $product->id, 'slug' => Str::slug($product->name)]) }}">
                                <img class="img-fluid w-100" src="{{ asset($product->image) }}" alt=""
                                    style="height: 210px; width:205px;">
                            </a>

                        </div>
                        <div class="card-body border-left border-right text-center p-0 ">
                            <a
                                href="{{ route('product.detail', ['id' => $product->id, 'slug' => Str::slug($product->name)]) }}">
                                <h6 class="text-truncate  p-3 ">{{ $product->name }}</h6>
                            </a>
                            <p class="text-dark">৳<del>{{ $product->selling_price }}</del> &nbsp;
                                ৳{{ $product->selling_price }}</p>


                            <form action="{{ route('add-to-cart', ['id' => $product->id]) }}" method="POST">
                                @csrf

                                <input type="hidden" name="quantity" value="1">
                                <div class="pb-2 px-1">
                                    <button type="submit" class="btn btn-sm w-100 mb-2  px-2 text-white rounded btnhober"
                                        name="order_now">অর্ডার করুন</button>
                                </div>


                            </form>

                        </div>

                    </div>



                </div>

            @endforeach
            <br>
            @endforeach
            
            @endif
        </div>




    </div> --}}



    @foreach ($categories as $category)
        <div class="d-flex justify-content-between py-4">
            <h5 class=" text-left px-5 font-weight-bold ">{{ $category->name }}</h5>
            <a href="{{ route('hotdeal') }}" class="btn btn-success mr-5">View All </a>
        </div>


        <div class="row px-xl-5 bg-warnings">
            <div class="col">
                <div class="owl-carousel related-carousel owl-item">
                    @foreach ($category->products as $product)
                        <div class="card  border-1 ">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent  p-0"
                                style="border:3px solid #2f4235">
                                <a
                                    href="{{ route('product.detail', ['id' => $product->id, 'slug' => Str::slug($product->name)]) }}">
                                    <img class="img-fluid w-100" src="{{ asset($product->image) }}" alt=""
                                        style="height: 260px; width:160px;">
                                </a>

                            </div>
                            <div class="card-body border-left border-right text-center p-0 ">
                                <a
                                    href="{{ route('product.detail', ['id' => $product->id, 'slug' => Str::slug($product->name)]) }}">
                                    <h6 class="text-truncate  p-3 ">{{ $product->name }}</h6>
                                </a>
                                <p class="text-dark">৳<del>{{ $product->selling_price }}</del> &nbsp;
                                    ৳{{ $product->selling_price }}</p>


                                <form action="{{ route('add-to-cart', ['id' => $product->id]) }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="quantity" value="1">
                                    <div class="pb-2 px-1">
                                        <button type="submit"
                                            class="btn btn-sm w-100 mb-2  px-2 text-white rounded btnhober"
                                            name="order_now">অর্ডার করুন</button>
                                    </div>

                                </form>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endforeach




    {{-- @if ($products->count() == 0)
            <h1 class="text-center text-danger py-5">দুঃখিত কোন পণ্য পাওয়া যায়নি </h1>
            <a href="{{ route('home') }}" class="btn btn-success rounded">HOME</a>
        @else --}}
    {{-- @foreach ($categories as $category)
            <h5 class=" text-left px-5 font-weight-bold ">{{ $category->name }}</h5>

            <div class="row">
                <div class="col-md-12">


                    <section class="">

                        <div class="owl-carousel owl-theme">

                            @foreach ($category->products as $product)
                                <div class="item">
                                   
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset($product->image) }}" width="300" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <div class="card-body border-left border-right text-center p-0 ">
                                                <a
                                                    href="{{ route('product.detail', ['id' => $product->id, 'slug' => Str::slug($product->name)]) }}">
                                                    <h6 class="text-truncate  p-3 ">{{ $product->name }}</h6>
                                                </a>
                                                <p class="text-dark">৳<del>{{ $product->selling_price }}</del> &nbsp;
                                                    ৳{{ $product->selling_price }}</p>


                                                <form action="{{ route('add-to-cart', ['id' => $product->id]) }}"
                                                    method="POST">
                                                    @csrf

                                                    <input type="hidden" name="quantity" value="1">
                                                    <div class="pb-2 px-1">
                                                        <button type="submit"
                                                            class="btn btn-sm w-100 mb-2  px-2 text-white rounded btnhober"
                                                            name="order_now">অর্ডার করুন</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                </div>
            </div>
        @endforeach --}}
@endsection

<!-- Products Start -->
{{-- <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel .owl-item">
                    <div class="card product-item border-0 ">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
<!-- Products End -->

{{-- <section>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="{{ asset('/') }}website/img/carousel-1.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}website/img/carousel-1.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}website/img/carousel-1.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}website/img/carousel-1.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}website/img/carousel-1.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}website/img/carousel-1.jpg" alt="">
        </div>


    </div>
</section> --}}

<!-- Products Start -->
{{-- <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    <div class="card product-item border-0 px-2">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
<!-- Products End -->

{{-- @foreach ($categories as $category)
    <div class="d-flex justify-content-between py-4">
        <h5 class=" text-left px-5 font-weight-bold ">{{ $category->name }}</h5>
        <a href="" class="btn btn-success"> All Product</a>
    </div>
        

        <div class="row px-xl-5 bg-warnings">
            <div class="col">
                <div class="owl-carousel related-carousel owl-item">
                    @foreach ($category->products as $product)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($product->image) }}" width="300" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <div class="card-body border-left border-right text-center p-0 ">
                                <a
                                    href="{{ route('product.detail', ['id' => $product->id, 'slug' => Str::slug($product->name)]) }}">
                                    <h6 class="text-truncate  p-3 ">{{ $product->name }}</h6>
                                </a>
                                <p class="text-dark">৳<del>{{ $product->selling_price }}</del> &nbsp;
                                    ৳{{ $product->selling_price }}</p>


                                <form action="{{ route('add-to-cart', ['id' => $product->id]) }}"
                                    method="POST">
                                    @csrf

                                    <input type="hidden" name="quantity" value="1">
                                    <div class="pb-2 px-1">
                                        <button type="submit"
                                            class="btn btn-sm w-100 mb-2  px-2 text-white rounded btnhober"
                                            name="order_now">অর্ডার করুন</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
     @endforeach --}}
