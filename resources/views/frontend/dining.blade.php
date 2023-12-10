@extends('frontend.layouts.main')
@section('main-container')

<link rel="stylesheet" href="{{asset('frontend/css/dining.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<section class="page_container">
    <div class="image">
        <img src="img/dining image.png" alt="image">
        <p>Exciting Flavours of Delightful Cuisine <br> <span>Best Food, Best Chef Only In Our Resort</span></p>
    </div>
</section>




<!-- dining sections  -->

    <div class="dining">
		    <div class="content">
				<h1 class="multi_cuisine">Best <span class="restaurant">Restaurant</span> With Multi Cuisine</h1>
				<p>In our resort you can enjoy all day dining delicious cuisine. whether you are looking for a short weekend break or longer holiday, we offer a range of package for best price. Enjoy your vacancy with breakfast, lunch and dinner with snacks and special meal on special occasions.</p>
            </div>				
				<div class="diningimage">
					<img src="img/dining image.png">
				</div>
    </div>
				<div class="facility">
					<div class="facilitybox">
					    <div class="facilitycontainer">
						    <a href="#" class="list_item"><i class="fa-solid fa-wine-glass-empty"></i></a>
					        <div class="text">
							    <h2>Bar</h2>
                            </div>
                        </div>
						<div class="facilitycontainer">
						    <a href="#" class="list_item"><i class="fa-solid fa-mug-saucer"></i></a>
					        <div class="text">
							    <h2>Coffee and Tea</h2>
                            </div>
                        </div>
						<div class="facilitycontainer">
						    <a href="#" class="list_item"><i class="fa-solid fa-music"></i></a>
					        <div class="text">
							    <h2>Music</h2>
                            </div>
                        </div>
						<div class="facilitycontainer">
						    <a href="#" class="list_item"><i class="fa-solid fa-spoon"></i></i></a>
					        <div class="text">
							    <h2>Experienced Chef</h2>
                            </div>
                        </div>
						<div class="facilitycontainer">
						    <a href="#" class="list_item"><i class="fa-solid fa-kitchen-set"></i></a>
					        <div class="text">
							    <h2>Multi Cuisine</h2>
                            </div>
                        </div>
						<div class="facilitycontainer">
						    <a href="#" class="list_item"><i class="fa-solid fa-wifi"></i></a>
					        <div class="text">
							    <h2>Wifi</h2>
                            </div>
                        </div>
                    </div>
                </div>
                        

@endsection