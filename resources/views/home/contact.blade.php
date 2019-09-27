@extends('layouts.app')
@section('content')
    <div style="background-image:url('https://images.unsplash.com/photo-1479502806991-251c94be6b15?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80');height:450px;background-repeat: no-repeat;
    background-position: center;" class="jumbotron jumbotron-fluid">
        <h1 style="margin-top:150px;color:#fff;" class="display-3 text-center">Get In Touch</h1>
    </div>
    <div class="container" style="margin-bottom:50px;">
        <h3 class="mb-4">Get In Touch</h3>
        <div class="row">
            <div class="col-7 pl-3 pr-3">
                    <form>
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Enter your Name">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <input class="form-control" type="text" id="name" placeholder="Enter Subject">
                        </div>
                        <div class="form-group mb-4">
                            <textarea class="form-control" id="message" placeholder="Enter Message" rows="4"></textarea>
                         </div>
                         <a href="#" class="btn btn-outline-primary">Send</a>
                    </form>
                    
            </div>
            <div class="col-3 offset-2">
                    
                <h5><i class="material-icons">home</i>Buttonwood, California</h5>
                <p class="text-muted">.Rosemead, CA 91770</p>
                <h5><i class="material-icons">call</i>+91 9876348497</h5>
                <p class="text-muted">Mon to Fri 9am to 6pm</p>
                <h5><i class="material-icons">email</i>reservation@hotel.com</h5>
                <p class="text-muted">Send us your query anytime!</p>
            </div>
        </div>
    </div>
@endsection