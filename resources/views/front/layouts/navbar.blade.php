<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
    @include('front.layouts.css_js')
    <link rel="stylesheet" href="{{url('front_assets/navbar/styleNavbar.css')}}">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background: #EEF3FF;">
        <div class="navbar-brand nv2">

            @if(Auth::guard('user')->check())
                <button style="border:none;background:none;" class="profilehref dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{url('assets/img/user.jpg')}}" alt="" height="40px" style="border-radius: 100%;margin:5px">
                    Hello, {{Auth::guard('user')->user()->name}}
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><i class="fas fa-user-edit"></i> Edit Profile</a>
                    <a class="dropdown-item" href="/cart"><i class="fas fa-shopping-cart"></i> Shopping Cart</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-history"></i> Transaction History</a>
                    <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            @else
                <a href="/login">
                     <button type="button" class="btn btn-outline-primary">Login to start shopping</button>
                </a>
            @endif

            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item active pl-2 pr-2">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pl-2 pr-2">
                        <a class="nav-link" href="/dell">Dell XPS</a>
                    </li>
                    <li class="nav-item pl-2 pr-2">
                        <a class="nav-link" href="/apple">Macbook</a>
                    </li>
                    <li class="nav- pl-2 pr-2">
                        <a class="nav-link" href="/microsoft">Surface</a>
                    </li>
                    <li class="nav-item pl-2 pr-2">
                        <a class="nav-link" href="/categories">More Products</a>
                    </li>
                </ul>
            </div>
            
            <form class="form-inline my-2 my-lg-0 searchfullform" style="">
                <input class="form-control mr-sm-2 searchform" type="search" placeholder="Search" aria-label="Search">
                <button style="border:none;background:none;"><i class="fas fa-search"></i></button>
            <!-- <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button> -->
            </form>
        </div>
    </nav>
    <!-- https://assets3.lottiefiles.com/private_files/lf30_WdTEui.json -->
    @yield('content')
</body>
</html>