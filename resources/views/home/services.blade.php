@extends('layouts.app')
@section('content')
<div style="background-image:url('https://portozante.com/images/uploads/slideshow/Porto-Zante-Luxury-Villas-Greece-Zakynthos-Greek-Islands-Heated-Pool-Beachfront-Exclusive-Villas-16-2001-2-1400pixelsOCT2015.jpeg');height:500px;margin-bottom:100px;" class="jumbotron jumbotron-fluid">
    <h1 style="margin-top:150px;color:#fff;" class="display-3 text-center"><span style="background-color:#000;">SERVICES</span></h1>
</div>
<div class="container" style="margin-bottom:100px;">
    <div class="row" style="margin-bottom:100px;">
        <div class="col-6">
            <h3 style="color:#BC913D">
                    DELUXE VILLA AMENITIES
            </h3>
            <hr>
            <p class="text-muted">The magnificent villas of Sunny Canopy & Spa offer a wonderful living environment: Antique marble is on the spotlight, while stunning open living areas, with immense windows and private terraces bathe the sitting room and bedrooms in the sunlight. Among the amenities, our guests can find select pieces from Armani Casa, Bulgari , as well as Christofle and Bernardaud. <br><br>Everything a guest might need can be found in the villas, from a personal working desk with iMac desktop and complimentary Wi-Fi internet, to a Sony Playstation 4 and satellite TV in all rooms and bathrooms. Guests can relax in their private garden, or enjoy dinner at their private Gervasoni outdoor lounge. They can spend their mornings by their own private heated pool or visit the private beach of the resort to catch the sun.  
            </p>
        </div>
        <div class="col-4 offset-2">
            <h5 style="color:#BC913D">DELUXE VILLA AMENITIES</h5>
            <hr>
            <ul class="text-muted">
                <li>Private heated swimming pool</li>
                <li>Spa area</li>
                <li>Fitness area</li>
                <li>Private area on the beach with personal sunbeds & umbrella</li>
                <li>Private garden</li>
                <li>Gervasoni outdoor lounge & dining area</li>
                <li>Barbeque</li>
                <li>CD & DVD Players</li>
                <li>Sat TV in all rooms & bathrooms</li>
                <li>Personal working desk with iMac Desktop and complimentary Wi-Fi Internet</li>
                <li>Luxuriously stocked mini-bars</li>
                <li>Safe deposit box</li>
                <li>Armani Casa fluffy bathrobes</li>
            </ul>
        </div>
    </div>

    <div class="row" style="margin-bottom:100px;">
            <div class="col-6">
                <h3 style="color:#BC913D">
                        CHILDREN AMENITIES & SERVICES
                </h3>
                <hr>
                <p class="text-muted">orto Zante Villas and Spa is a family friendly resort, where children are at the forefront. At the Kids’ Club, our little guests and their families can play table football and board games, or get creative at the special drawing tables. Our experienced staff also organizes kids’ entertainment sessions with fun activities and face painting. Porto Zante also offers an outdoor playground, the Kids’ Corner, and various beach & pool toys for young guests of all ages, while children can relax at the specially decorated bedrooms, enjoy a specially created kids’ menu or even visit the nearby water sports park and spend a day of splashing fun. Condé Nast Traveller magazine in the UK selected Porto Zante Villas and Spa as one of the 14 Best Family Hotels in the World for 2018.  
                </p>
            </div>
            <div class="col-4 offset-2">
                <h5 style="color:#BC913D">FAMILY FRIENDLY FACILITIES</h5>
                <hr>
                <ul class="text-muted">
                    <li>Kids' Club</li>
                    <li>Kids' Corner (outdoor playground)</li>
                    <li>Babysitting</li>
                    <li>Kids' Entertainment Service</li>
                    <li>Specially decorated rooms & villas</li>
                    <li>Baby Cots and Strollers</li>
                    <li>Children Activities including guided excursions to the local village, water park, mini golf. (All 1 minute away of the resort)</li>
                    <li>Special kids' dining menu</li>
                </ul>
            </div>
        </div>

        <div class="row" style="margin-bottom:100px;">
                <div class="col-6">
                    <h3 style="color:#BC913D">
                            FIVE STAR HOTEL SERVICE
                    </h3>
                    <hr>
                    <p class="text-muted">This boutique luxury 5 star hotel offers services designed to captivate the guests. Dining at the Club House Restaurant is an exquisite experience of Greek and Mediterranean cuisine, while Maya Restaurant offers creative Asian cuisine on the beachfront. If the guests prefer the privacy of their own villas, the in-villa dining service becomes an exclusive culinary journey.<br><br>
                    Guests can relax by their own private pool, or spend their day at the private sandy beach, making the most out of their vacation. A state-of-the-art Gym by Technogym® is available as well at this luxury villa resort, as well as a variety of Watersports for guests of all ages. The resort’s Spa therapists are at the guests’ service to provide them with rejuvenating health and beauty treatments at the Waterfront Spa situated right above the water. VIP and security services are at the guests’ disposal, as well as chauffer or secretarial services, or even their own private chef. 
                    </p>
                </div>
                <div class="col-4 offset-2">
                    <h5 style="color:#BC913D">FACILITIES & SERVICES</h5>
                    <hr>
                    <ul class="text-muted">
                        <li>Private sandy beach</li>
                        <li>2 A la Carte restaurants</li>
                        <li>24-Hour In-Villa Dining</li>
                        <li>Private chef & butler service</li>
                        <li>Guest relations assistant</li>
                        <li>Twice Daily Maid Service</li>
                        <li>Express laundry</li>
                        <li>Diving & snorkeling</li>
                        <li>Water sports </li>
                        <li>Chauffer service</li>
                    </ul>
                </div>
            </div>
</div>
<div class="container" style="margin-bottom:100px;">
        <div class="row justify-content-center">
              <div class="col-5">
                    <h2 style="color:#BC913D;font-size:50px;font-family: 'Dancing Script', cursive;">Want to Enjoy our Services?Login to Book</h2>
                    <a class="btn btn-outline-warning btn-lg" href="{{ route('login') }}">Login</a>
              </div>
              <div class="col-5"style="margin-top: 60px;">
                    <h2 style="color:#BC913D;font-size:50px;font-family: 'Dancing Script', cursive;">Don't have an account?</h2>
                    <a class="btn btn-outline-warning btn-lg" href="{{ route('register') }}">SignUp</a>
              </div>
         </div>
  </div>
@endsection