@extends('template')

    @section('main')
    <div class="contact pt-100 pb-100" id="contact">
        
            <div class="row">
                <div class="col-xl-6 mx-auto text-center">
                    <div class="section-title mb-100">
                        <h4>contact me</h4>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-8">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-xl-6">
                                <input type="text" placeholder="name">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" placeholder="email">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" placeholder="subject">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" placeholder="telephone">
                            </div>
                            <div class="col-xl-12">
                                <textarea placeholder="message" cols="30" rows="10"></textarea>
                                <input type="submit" value="send message">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="single-contact">
                        <i class="fa fa-map-marker"></i>
                        <h5>Address</h5>
                        <p>Cipinang Bali RT 05/03 No.19, Jakarta Timur</p>
                    </div>
                    <div class="single-contact">
                        <i class="fa fa-phone"></i>
                        <h5>Phone</h5>
                        <p>(+62) 83873342325</p>
                    </div>
                    <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>rizqanmr@gmail.com</p>
                    </div>
                </div>
            </div>
        
    </div>

    @stop

    @section('footer')
        @include('footer')
    @stop