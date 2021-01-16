@extends('frontend.master')

@section('content')
<div class="container-fluid">
            <form
                action=""
                class="mt-5 pt-5 mb-5 col-md-8 col-sm-12 offset-md-2 offset-sm-0"
            >
                <h2 class="mt-3 mb-3">Your feedback</h2>
                <input type="text" class="form-control" placeholder="Name" />
                <textarea
                    name=""
                    id=""
                    class="form-control w-100 mt-4"
                    rows="15"
                    placeholder="Your feedback......"
                ></textarea>
                <input
                    type="button"
                    value="Send"
                    class="form-control col-2 bg-danger text-light mt-4 offset-10"
                />
            </form>
        </div>

        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe
                    width="100%"
                    height="100%"
                    id="gmap_canvas"
                    src="https://maps.google.com/maps?q=%E1%80%A1%E1%80%B1%E1%80%AC%E1%80%84%E1%80%BA%E1%80%9E%E1%80%AE%E1%80%9B%E1%80%AD%E1%80%9C%E1%80%99%E1%80%BA%E1%80%B8%2C%20Yangon&t=&z=17&ie=UTF8&iwloc=&output=embed"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    alt="You need internet to access map."
                ></iframe>

            </div>
        </div>
        <div class="footer container-fluid p-5">
            <div class="col-12">
                Copyright © 2020 Cafe Shop | Developed By Hein Ko Zin
            </div>
        </div>
@endsection
