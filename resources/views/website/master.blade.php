<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @foreach ($settings as $setting)
            {{ $setting->title }}
        @endforeach
    </title>
    @foreach ($settings as $setting)
    {{ $setting->pixel }}
    @endforeach
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    {{-- <link href="img/favicon.ico" rel="icon"> --}}
    @foreach ($settings as $setting )
    <link rel="shortcut icon" href="{{asset($setting->logo)}}">
    @endforeach

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/')}}website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/')}}website/css/style.css" rel="stylesheet">
    @stack('style')
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid ">

        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{route('home')}}" class="text-decoration-none ml-5">

					{{-- <img class="" src="{{asset('/')}}website/img/637b709aa4a83.png" alt="" height="70 px" width="150 px"> --}}
                    @foreach ($settings as $setting )
					<img class="" src="{{asset($setting->logo)}}" alt="" height="70 px" width="150 px">
                    @endforeach
                    {{-- <img class="img-fluid w-100 h-100" src="{{asset($product->image)}}" alt="" style="height: 100%; width:100%;"> --}}
                </a>
            </div>
           

            <div class="col-lg-6 col-6 text-left">
                <form action="{{route('search')}}" method="get">
                {{-- <form action="" method="get"> --}}
                    @csrf
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="সার্চ করুন">
                        <button type="submit" class="input-group-text bg-dark text-white">Search</i></button>

                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right ">
               
                <a href="" class="btn  ">
                    <i class="fas fa-shopping-cart text-dark "></i>
                    <span class="badge text-dark ">{{$totalCartProduct}}</span>
                </a>
            </div>
        </div>
    </div>


	<!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid ">
        <div class="row border-top px-xl-5 " style="
            background-image: linear-gradient(to right, #77c056 , #1ea248,#77c056);
          ">

            <div class="col-lg-12 ">
                <nav class="navbar navbar-expand-lg   py-3 py-lg-0 px-0">
                    <a href="{{route('home')}}" class="text-decoration-none d-block d-lg-none">
                        <img class="" src="{{asset('/')}}website/img/637b709aa4a83.png" alt="" height="70 px" width="150 px">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <i class="fa fa-bars" id="cat_menu_mobile_btn"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0 ">
                            <a href="{{route('home')}}" class="nav-item hoba nav-link text-white fw-bold active">Home</a>

                            @foreach ($categories as $category)
                            <a href="{{route('category', ['id' => $category->id])}}" class="nav-item hoba nav-link text-white fw-bold">{{$category->name}}</a>
                            @endforeach

                           
                        </div>

                    </div>
                </nav>

            </div>
        </div>
    </div>
   

    @yield('body')

    <!-- Footer Start -->
    

    <footer>
        @foreach ($settings as $setting )
       <div class="" style="background-color:#111926;">
            <div class="row py-5">
                <div class="col-10 mx-auto">
                    <div class="row text-white">
                        <div class="col-md-4 px-4">
                            <img class="mb-3" src="{{asset($setting->logo)}}" alt="" height="70 px" width="150 px">
                            <p>{!! $setting->footer_description !!}</p>
                            <p>Follow Us</p>
                            <a href="{{$setting->facebook}}" target="_blank" class="p-3 bg-success rounded "><i class="fa-brands fa-facebook-f text-white "></i></a>
                            <a href="{{$setting->instragram}}" target="_blank" class="p-3 bg-success rounded"><i class="fa-brands fa-instagram  text-white"></i></a>
                            <a href="{{$setting->youtube}}" target="_blank" class="p-3 bg-success rounded"><i class="fa-brands fa-youtube  text-white"></i></a>
                        </div>
                        <div class="col-md-2  px-2"> <b>Contact Us</b>
                            <address class="mt-3">
                                {!! $setting->contact !!}
                            </address>
                        </div>
                        <div class="col-md-2  px-5"> <b>Information</b>  
                                <ul class="navbar-nav mt-3">
                                    <li> <a href="{{ route('information') }}" class="nav-link text-white">Privacy Policy</a></li>
                                    <li><a href="{{ route('return') }}" class="nav-link text-white">Return  Policy</a></li>
                                    <li><a href="" class="nav-link text-white">Term  Condition</a></li>
                                </ul>
                                
                        </div>
                        <div class="col-md-4  px-2">
                            <b>Follow on</b>
                            
                            <div class=" mt-3">{!! $setting->fbpage !!}</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container-fluid  text-dark  " style="background-color:#222836">

            <div class="row   mx-xl-5 py-3">
                <div class="col-md-12 px-xl-0">
                    <p class=" text-center text-md-center text-white">
                        &copy; 2023 <a href="#" class="text-success">
                            
                            {{ $setting->title }}
                        
                    </a> All Right Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    @endforeach
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}website/lib/easing/easing.min.js"></script>
    <script src="{{asset('/')}}website/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('/')}}website/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{asset('/')}}website/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('/')}}website/js/main.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"> </script> --}}
    {{-- <script>
        $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:2000,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script> --}}


    @stack('script')


</body>

</html>
