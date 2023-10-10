@extends('layout')
@section('title','Home Page')
@section('content')
<!-- @auth
    {{auth()->user()->name}}
    @endauth -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="https://media.istockphoto.com/id/1447372324/photo/motorcycle-on-the-sea-pier-during-a-beautiful-sea-sunset-travel-adventure-vacation-concept.webp?b=1&s=170667a&w=0&k=20&c=uGglU9YxXPHnIcza_mHefo4aICrAHxCvKT77uiSSqjs=" alt="bike image" style="width: 500px;">
            </div>
            <div class="col-lg-6">
                <h1 style="text-align: center;">Hi,</h1>
                <h3 style="text-align: center;">@auth
                    {{auth()->user()->name}}
                    @endauth</h3>  
                <h3 style="text-align: center;">Welcome To NK bike SERVICE</h3>
            </div>

        </div>
        <div class="row "style="padding-top:200px">
            <div class="col-lg-4">
                <div class="flip-box">
                    <h3 class="text-center">oil service</h3>
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="https://media.istockphoto.com/id/1174788025/photo/the-process-of-pouring-new-oil-into-the-motorcycle-engine.webp?b=1&s=170667a&w=0&k=20&c=mpVXIq_eHstsHAl5LOJGqrVrUsZ-bGnREGSjn3xbKSU=" alt="oil service" style="width: 300px;">
                        </div>
                        <div class="flip-box-back">
                            <h2>Details</h2>
                            <p>price : 200</p>
                            <p>tax : 10%</p>
                            <p>Total price : 220</p>
                            <button><a href="booking">book</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="flip-box">
                    <h3 class="text-center">Engine service</h3>
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="https://media.istockphoto.com/id/1188654800/photo/motorcycle-mechanic.webp?b=1&s=170667a&w=0&k=20&c=6QIegt_fO_0DnD7V4q6nipCpdN0No1auZy8BRzGz6Lo=" alt="engine service" style="width: 300px;">
                        </div>
                        <div class="flip-box-back">
                            <h2>Details</h2>
                            <p>price : 500</p>
                            <p>tax : 10%</p>
                            <p>Total price : 550</p>
                            <button><a href="order">book</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="flip-box">
                    <h3 class="text-center">General checkup</h3>
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="https://media.istockphoto.com/id/1202514048/photo/silhouette-of-motorcycle-parking-with-sunset-background.webp?b=1&s=170667a&w=0&k=20&c=oifQCzdq0S5gaTjxDukT2JUxsIx0lPEpvJMjM1BKays=" alt="general service" style="width: 300px;">
                        </div>
                        <div class="flip-box-back">
                        <h2>Details</h2>
                            <p>price : 1000</p>
                            <p>tax : 10%</p>
                            <p>Total price : 1100</p>
                            <button><a href="order">book</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top:200px">
            <div class="col-lg-6">
                <h3>About-us</h3>
                    <p style="letter-spacing: 1px;">Welcome to NK Bike SERVICE, your trusted companion 
                        in keeping your two-wheeled pride and joy in peak condition. 
                        Established in 2020, we've been revolutionizing the way riders 
                        take care of their bikes, making maintenance and repair services 
                        more accessible, convenient, and hassle-free.</p>
            </div>
            <div class="col-lg-6">
                <img src="https://media.istockphoto.com/id/1131995298/photo/bring-all-your-bike-repairs-and-maintenance-jobs-to-me.webp?b=1&s=170667a&w=0&k=20&c=m5FcK7qqXZqnaYUZWKhn8t89WyypgC9nIB4S3K3W7GQ=" alt="bike image" style="width: 400px;">
            </div>

        </div>
        <section id="our-story">
            <div class="row" style="padding-top:200px">
            
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1560165183-23a9178eb463?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8YmlrZSUyMHNlcnZpY2UlMjBzaG9wJTIwYnVpbGRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="shpo image">
                </div>
                <div class="col-lg-6">
                    <h1>Our Story</h1>
                    <p>Our journey began in 2020 when a group of passionate motorcycle enthusiasts came together
                     with a shared vision: to make bike maintenance a breeze for riders of all levels. We 
                     understood the frustration of long waits at traditional bike shops and the inconvenience 
                     of finding reliable mechanics. That's why we set out to create a platform that puts the power 
                     of bike servicing right at your fingertips.</p>
                </div>
            </div>
        </section>
        <section id="our-story">
            <div class="row" style="padding-top:200px">
            
                <div class="col-lg-6">
                    <h1>Our Vision</h1>
                    <p>At NK Bike SERVICE, we envision a world where every rider can enjoy the open road worry-free, 
                        knowing their bikes are in top shape. Our mission is to make bike servicing more accessible, reliable, and enjoyable for riders everywhere.
                        Join us in this exciting journey towards a future where bike maintenance is as easy as a leisurely ride on your favorite route.
                        Thank you for choosing [Your Bike Service App Name] as your trusted partner in bike care since 2020. Ride on!</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://plus.unsplash.com/premium_photo-1661757505824-69b1816836bd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y3VzdG9tZXIlMjBzYXRpc2ZhY3Rpb258ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="customer image">
                </div>
            </div>
        </section>
    </div>
@endsection