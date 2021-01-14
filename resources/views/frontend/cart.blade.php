@extends('frontend.master')

@section('content')
<div class="cart">
    <marquee>According to the Covid-19's warnings, you should stay apart 6
        feet from other people.</marquee>
    <h2 class="mt-5">Your cart has following items:</h2>
    <br />

    <!-- <table class="items">
                <tr>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>
                        <img
                            src="img/cappuccino-tiramisu.webp"
                            alt=""
                            srcset=""
                        />
                    </td>
                    <td>Cappuccino Tiramisu</td>
                    <td>2000 MMK</td>
                    <td>2</td>
                    <td>4000 MMK</td>
                    <td><a href="">remove</a></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/coffee-cupcakes.webp" alt="" srcset="" />
                    </td>
                    <td>Coffee Cupcakes</td>
                    <td>1500 MMK</td>
                    <td>2</td>
                    <td>3000 MMK</td>
                    <td><a href="">remove</a></td>
                </tr>
                <tr>
                    <td>
                        <img
                            src="img/coffee-ice-cream-terrine.webp"
                            alt=""
                            srcset=""
                        />
                    </td>
                    <td>Coffee</td>
                    <td>2500 MMK</td>
                    <td>2</td>
                    <td>5000 MMK</td>
                    <td><a href="">remove</a></td>
                </tr>
                <tr>
                    <td colspan="4">Total Price</td>
                    <td>12000 MMK</td>
                </tr>
            </table> -->
    <div class="container-fluid cart">
        <table class="table table-hover mt-2 col-12 text-center">
            <thead>
                <tr>
                    <th scope="col" class="w-25">Images</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <img src="img/cappuccino-tiramisu.webp" alt="" srcset="" />
                    </th>
                    <td>Cappuccino Tiramisu</td>
                    <td>2000 MMK</td>
                    <td>2</td>
                    <td>4000 MMK</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="img/coffee-cupcakes.webp" alt="" srcset="" />
                    </th>
                    <td>Coffee Cupcakes</td>
                    <td>1500 MMK</td>
                    <td>2</td>
                    <td>3000 MMK</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="img/coffee-ice-cream-terrine.webp" alt="" srcset="" />
                    </th>
                    <td>Coffee</td>
                    <td>2500 MMK</td>
                    <td>2</td>
                    <td>5000 MMK</td>
                </tr>
                <tr class="text-left">
                    <td colspan="4">Total Price</td>
                    <td>12000 MMK</td>
                </tr>
            </tbody>
        </table>
    </div>

    <button class="mr-2 mb-5 mt-4">Continue to checkout</button>
</div>

<div class="footer container-fluid p-5">
    <div class="col-12">
        Copyright © 2020 Cafe Shop | Developed By Hein Ko Zin
    </div>
</div>
@endsection