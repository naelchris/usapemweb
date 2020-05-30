@extends('front.layouts.navbar')
@section('content')
<div class="container">
    {{-- {{Cart::instance('default')->content()}} --}}


  <div class="container">

    <h2 class="mt-5"><i class="fa fa-shopping-cart"></i> Shooping Cart</h2>
    <hr>
    @if(Cart::instance('default')->content())
    
    <h4 class="mt-5">{{Cart::count()}} items(s) in Shopping Cart</h4>
    
    <div class="cart-items">
        
        <div class="row">
            
            <div class="col-md-12">
                
                <table class="table">
                    
                    <tbody>
                        @foreach (Cart::instance('default')->content() as $item)
                            <tr>
                            <td><img src="uploads/{{$item->model->image}}" style="width: 5em"></td>
                            <td>
                            <strong>{{$item->model->name}}</strong><br> {{$item->model->description}}
                            </td>
                            
                            <td>
                            <form action="{{route('cart.remove',$item->rowId)}}" method="post">
                                @csrf
                               
                                <button type="submit">Remove</button>
                              </form>
                                

                            </td>
                            
                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>
                            
                            <td>${{$item->model->price}}</td>
                        </tr>
                        @endforeach
            
                    </tbody>

                </table>

            </div>   
            <!-- Price Details -->
                <div class="col-md-6">
                        <div class="sub-total">
                             <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">Price Details</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>Subtotal </td>
                                    <td>{{Cart::subtotal()}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td>{{Cart::tax()}}</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                    <th>{{Cart::total()}}</th>
                                    </tr>
                             </table>           
                         </div>
                  </div>
                <!-- Save for later  -->
                <div class="col-md-12">
                    <button class="btn btn-outline-dark">Continue Shopping</button>
                    <button class="btn btn-outline-info">Proceed to checkout</button>
                <hr>

                </div>

                @else
                  <h1>sory you don't have any item</h1>
                @endif

                
                </div>


            </div>
        </div>
</div>

  
@endsection