@extends('front.layouts.navbar')

@section('content')

<div class="container">

    <!-- Page Features -->
    <div class="row text-center">
        @foreach ($product as $item)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                <img class="card-img-top" src="uploads/{{$item->image}}" alt="">
                    <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">
                            {{$item->description}}
                        </p>
                    </div>
                    <div class="card-footer"> 
                    <strong>${{$item->price}}</strong> &nbsp;
                        <a href="#" class="btn btn-sucess btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                            Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
       
        {{-- 
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="images/04_25.jpg" alt=""><!-- Image size 500*325 -->
                <div class="card-body">
                    <h5 class="card-title">Samsung Electronics UN65MU6500</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni
                        sapiente, tempore debitis beatae culpa natus architecto.</p>
                </div>
                <div class="card-footer"> 
                    <strong>$205.00</strong> &nbsp;
                    <a href="#" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="images/10_3.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Polyester Laptop Backpack with USB</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                        necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <strong>$50.00</strong> &nbsp;
                    <a href="#" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="images/12.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Apple iMac 2017 21.5-inch Retina 4K</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni
                        sapiente, tempore debitis beatae culpa natus architecto.</p>
                </div>
                <div class="card-footer">
                    <strong>$355.00</strong> &nbsp;
                    <a href="#" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</a>
                </div>
            </div>
        </div> --}}


    </div>
    <!-- /.row -->

</div>
    
@endsection