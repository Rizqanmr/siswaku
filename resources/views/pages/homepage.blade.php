@extends('template')

@section('main')
    
<div id="homepage">

    <!-- Page Content -->
    <div class="container">
        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Selamat Datang di Siswaku</h1>
            <p>Belajar Laravel</p>
            <p><a href="#" class="btn btn-primary btn-large">See Our Products!</a>
            </p>
        </header>
        <hr>
        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Top Products</h3>
            </div>
        </div>
        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/200x200.png" alt="">
                    <div class="caption">
                        <h3>Feature Item</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/200x200.png" alt="">
                    <div class="caption">
                        <h3>Feature Item</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/200x200.png" alt="">
                    <div class="caption">
                        <h3>Honey</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/200x200.png" alt="">
                    <div class="caption">
                        <h3>Feature Item</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>
</div>
        @stop
        <!-- Footer -->
        @section('footer')
            @include('footer')
        @stop