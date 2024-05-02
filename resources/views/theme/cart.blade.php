@extends('theme.master')

@section('title', '| Cart')
@section('hero-title', 'Cart.')
{{-- @section('parking-active', 'active') --}}

<!---------------------------- hero - image -->
@section('hero-img')
    <img src="{{ asset('assets') }}/images/cart.png" class="cart-photo">
@endsection
<!--------------------------------------------->

<!---------- paragraph  -->
@section('pragraph')

@endsection
<!--------------------------->


@section('content')

    <div class="untree_co-section before-footer-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <!------------------------------------------- tbody -->
                            <tbody>
                                <!-------------------------## RAW 1 -->
                                @foreach ($cartproducts as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="{{ asset('assets') }}/images/{{ $item->product->image }}"
                                                alt="Image" class="img-fluid">
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black">{{ $item->product->name }}</h2>
                                        </td>
                                        <td>{{ $item->product->price }}</td> <!--Price-->
                                        <td>{{ $item->quantity }}</td> <!--Quantity-->
                                        <td>{{ $item->product->price * $item->quantity }} E£</td> <!--Total-->
                                        <td><a href="/deletecartitem/{{ $item->id }}" class="btn btn-black btn-sm">X</a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                            <!-------------------------------------------End tbody -->
                        </table>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <button id="cart" class="btn btn-black btn-sm btn-block">Update
                                Cart</button>
                        </div>
                        <div class="col-md-6">
                            <button id="cart" class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Total Price</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong
                                        class="text-black">{{ $cartproducts->sum(function ($item) {
                                            return $item->product->price * $item->quantity;
                                        }) }}
                                        E£</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button id="cart" class="btn btn-black btn-lg py-3 btn-block"
                                        onclick="window.location='{{ url('stripe') }}'">Proceed To Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
