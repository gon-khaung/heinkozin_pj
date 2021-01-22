@extends('frontend.master')

@section('content')
        <div class="main row">
            <marquee
                >According to the Covid-19's warnings, you should stay apart 6
                feet from other people.</marquee
            >
            <div
                class="hot-items pt-1 ml-md-3 ml-md-0 col-md-3 col-sm-12 order-md-1"
            >
                <h3>Today special</h3>
                <div
                    class="items"
                    onmouseenter="slidePause()"
                    onmouseleave="slideResume()"
                >
                    <div class="item fade-task">
                        <img src="img/black-coffee.jpg" alt="" />
                        <p>Black Coffee <span>1,000 MMK</span></p>
                    </div>
                    <div class="item fade-task">
                        <img src="img/flat-white.jpg" alt="" />
                        <p>Flat White <span>1,500 MMK</span></p>
                    </div>
                    <div class="item fade-task">
                        <img src="img/coffee-cupcakes.webp" alt="" />
                        <p>Coffee Cupcakes <span>1,500 MMK</span></p>
                    </div>
                    <a class="left" onclick="next(-1)">❮</a>
                    <a class="right" onclick="next(1)">❯</a>
                </div>
            </div>
            <div class="row cards col-md-9 mb-5">
            @foreach ($data as $datas)
                <div class="col-md-3 offset-1 offset-md-0 mt-2 col-sm-10">
                    <div class="card">
                        <img
                            class="card-img-top"
                            src="{{asset('photos/items/'.$datas->photo)}}"
                            alt="Card image cap"
                        />
                        <div class="card-body">
                            <h6 class="card-title">{{$datas->name}}</h6>
                            <span class="card-text badge badge-danger"
                                >{{$datas->price}}</span
                            >
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-sm btn-danger"
                                >Add to cart</a
                            >
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

        <div class="footer container-fluid p-5">
            <div class="col-12">
                Copyright © 2020 Cafe Shop | Developed By Hein Ko Zin
            </div>
        </div>

        <script>
            //BG Slider
            var slides = document.getElementsByClassName("item");
            var slide_index = 0;
            // displaySlides(slide_index);
            // var slide;
            // slide=setInterval(function () {
            //   next(1);
            // }, 3000);
            // setInterval(next(1), 1000);
            next(slide_index);
            function next(n) {
                slide_index += n;
                if (slide_index > slides.length - 1) {
                    slide_index = 0;
                }
                if (slide_index < 0) {
                    slide_index = slides.length - 1;
                }
                for (var i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slides[slide_index].style.display = "block";
            }

            var Timer = function (callback, delay) {
                var timerId,
                    start,
                    remaining = delay;

                this.pause = function () {
                    window.clearInterval(timerId);
                    remaining -= Date.now() - start;
                };

                this.resume = function () {
                    start = Date.now();
                    window.clearInterval(timerId);
                    timerId = window.setInterval(callback, delay);
                };

                this.resume();
            };

            var slider = new Timer(function () {
                next(1);
            }, 3000);

            function slidePause() {
                slider.pause();
            }
            function slideResume() {
                slider.resume();
            }
        </script>
@endsection
