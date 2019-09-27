@extends('layouts.app')
@section('content')

<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="max-height: 600px !important;">
            <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="d-block w-100">
            </div>
            <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/1134176/pexels-photo-1134176.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100">
            </div>
            <div class="carousel-item">
                    <img  src="https://images.pexels.com/photos/2034335/pexels-photo-2034335.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100">
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
</div>

<div class="container" style="margin-top: 100px;">
    <div class="row mt-5 mb-5">
        <div class="col-5">
            <small class="text-primary">About Us</small>
            <h1 class="display-4">A Luxuries Hotel with Nature</h1>
            <br>
            <p class="text-muted">Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
            <a href="#" class="btn btn-outline-primary">Learn More</a>
        </div>
        <div class="col-3">
            <img style="margin-top:-10px;" src="https://colorlib.com/preview/theme/montana/img/about/about_1.png" >
        </div>
        <div class="col-3">
            <img style="margin-left: 10px;margin-top: 10px;" src="https://colorlib.com/preview/theme/montana/img/about/about_2.png" >
        </div>
    </div>
</div>

<div class="container" style="margin-bottom: 100px;">
    <div class="text-center">
        <small class="text-primary">Our Offers</small>
        <h1 class="display-4 mt-0 pt-0" style="margin-bottom: 70px;">Ongoing Offers</h1>
    </div>
    <div class="row justify-content-center">
            <div class="col-3">
                <img style="height:300px;margin-bottom: 30px;" src="https://colorlib.com/preview/theme/montana/img/offers/1.png ">
                <h4 class="font-weight-normal">Up to 35% savings on Club rooms and Suites</h4>
                <ul>
                    <li>Luxaries condition</li>
                    <li>3 Adults & 2 Children size</li>
                    <li>Sea view side</li>
                </ul>
                <button class="btn btn-outline-primary btn-block">Book Now</button>
            </div>
            <div class="col-3" style="margin-left: 90px;">
                <img style="height:300px;margin-bottom: 30px;" src="https://colorlib.com/preview/theme/montana/img/offers/2.png">
                <h4 class="font-weight-normal">Up to 35% savings on Club rooms and Suites</h4>
                <ul>
                    <li>Luxaries condition</li>
                    <li>3 Adults & 2 Children size</li>
                    <li>Sea view side</li>
                </ul>
                <button class="btn btn-outline-primary btn-block">Book Now</button>
            </div>
            <div class="col-3" style="margin-left: 90px;">
                <img style="height:300px;margin-bottom: 30px;" src="https://colorlib.com/preview/theme/montana/img/offers/3.png">
                <h4 class="font-weight-normal">Up to 35% savings on Club rooms and Suites</h4>
                <ul>
                    <li>Luxaries condition</li>
                    <li>3 Adults & 2 Children size</li>
                    <li>Sea view side</li>
                </ul>
                <button class="btn btn-outline-primary btn-block">Book Now</button>
            </div>
    </div>
</div>

<div class="container" style="margin-bottom: 100px;">
        <div class="row mt-5 mb-5">
            <div class="col-3">
                <img style="margin-top:-10px;" src="https://colorlib.com/preview/theme/montana/img/about/1.png" >
            </div>
            <div class="col-3" >
                <img style="margin-left: 10px;margin-top: 10px;" src="https://colorlib.com/preview/theme/montana/img/about/2.png" >
            </div>
            <div class="col-5" style="margin-left: 80px;">
                    <small class="text-primary">Delicious Food</small>
                    <h1 class="display-4">We Serve Fresh and Delicious Food</h1>
                    <br>
                    <p class="text-muted">Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid mb-0" style="background-color:#000;color:#fff;">
    <div class="container">
            <div class="row">
                <div class="col-3">
                    <h5>Address</h5>
                    <p>200, Green road, Mongla,New Yor City USA</p>
                    <a style="text-decoration: none;" href="#" class="text-primary">Get Direction</a>
                </div>
                <div class="col-3">
                    <h5>Reservation</h5>
                    <p>+91 9876348497</p>
                    <p>reservation@hotel.com</p>
                </div>
                <div class="col-2">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled">
                        <li> <a style="text-decoration: none;" href="#">Home</a></li>
                        <li> <a style="text-decoration: none;" href="#">About</a></li>
                        <li> <a style="text-decoration: none;" href="#">Blogs</a></li>
                        <li> <a style="text-decoration: none;" href="#">Services</a></li>
                        <li> <a style="text-decoration: none;" href="#">Rooms</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <h5>Newsletter</h5>
                    <form class="form-inline ml-auto">
                        <input type="text" class="form-control mr-2" placeholder="Search">
                        <button class="btn btn-outline-success">Search</button>
                    </form>
                    <p>Subscribe to get updates!</p>
                </div>
            </div>
    </div>
</div>

@endsection