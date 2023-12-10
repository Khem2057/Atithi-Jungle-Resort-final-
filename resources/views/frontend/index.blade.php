@extends('frontend.layouts.main')

@section('main-container')


<link rel="stylesheet" href="{{asset('frontend/css/index.css')}}">


        <div class="video_container">
            <video autoplay loop muted>
                <source src="img/atithi jungle resort.mp4" type="video/mp4">
            </video>
			<div class="welcome_container">
				<p>WELCOME <br> <span>ATITHI JUNGLE RESORT</span>  <br> A best place to stay</p>
			</div>
        </div>


        <!-- about all  -->

        <div class="about_container">
		<div class="about-content">
			<div class="content">
				<h2>All about <span>Atithi Jungle Resort</span></h2>
				<p>
					Spread along the quite banks of the Narayani river from across the chitwan national park, Atithi jungle resort opens up a serene wilderness experience with all the comforts of a modern resort. Here you can explore the national park with our wildlife term, experience authentic Tharu culture and cuisine at the local villages or simply relax and with family and friends in your private chalets. 
				</p>
				<a href="{{url('/about')}}" class="readmore">Read More</a>
			</div>
			<div class="image">
				<img src="img/home jeep.png">
			</div>
		</div>
		</div>

	   <!-- features of websites -->

		<div class="resort_card_container">
			<div class="resort_cards">
				<a class="pages_link" href="{{url('/activity')}}">
				<div class="resort_card">
					<div class="resort-image">
						<img src="img/home activity.png">
					</div>
					<div class="resort-content">
						<h2>Activity</h2>
						<p>Explore and book various a ativity of resort</p>
					</div>
				</div>
				</a>
				<a class="pages_link" href="{{url('/room')}}">
				<div class="resort_card">
					<div class="resort-image">
						<img src="img/home room.png">
					</div>
					<div class="resort-content">
						<h2>Room</h2>
						<p>Provides different rooms with different facilities</p>
					</div>
				</div>
				</a>
				<a class="pages_link" href="{{url('/gallery')}}">
				<div class="resort_card">
					<div class="resort-image">
						<img src="img/home gallery.png">
					</div>
					<div class="resort-content">
						<h2>Gallery</h2>
						<p>View  the experience of  Atithi jungle resort</p>
					</div>
				</div>
				</a>
			</div>
		</div>




		<!-- ------------------package section--------------------------->



		<div class="p_container">
			<p class="p_p">Package</p>
			<div class="p_container1">
				<p>At Atithi Jungle Resort we offer a variety of different jungle safari packages to Suit your wishes to create a most memorable jungle resort experience. We provide a customized program when you arrive. Activities are planned according to your desires, length of stay as well as seasonal and weather conditions.</p>	
			</div>
			<div class="p_resort_container">
			<div class="p_resort_cards">
				<div class="p_resort_card">
					<div class="p_resort_image">
						<img src="img/home package 1.jpg">
					</div>
					<div class="p_resort-content">
						<h2>1 Night 2 Days</h2>
						<!-- <a class="package_links" href="{{url('/package')}}"><p>view package</p></a> -->
					</div>
				</div>
				<div class="p_resort_cards">
					<div class="p_resort_card">
						<div class="p_resort_image">
							<img src="img/home package 2.png">
						</div>
						<div class="p_resort-content">
							<h2>2 Night 3 Days</h2>
							
						</div>
					</div>
				</div>
				<div class="p_resort_cards">
					<div class="p_resort_card">
						<div class="p_resort_image">
							<img src="img/home package 3.png">
						</div>
						<div class="p_resort-content">
							<h2>3 Night 4 Days</h2>
							<!-- <a class="package_links" href="{{url('/package')}}"><p>view package</p></a> -->
						</div>
					</div>
				</div>
				
			</div>
			<div class="package_link_container">
				<a class="package_links" href="{{url('/package')}}">View Package</a>
			</div>
			
		</div>
		</div>
	   



		 <!-- review section  -->



	<div class="review_container_box">
		 <div class="reviewsection">
    <h1>Your Comfort is our pleasure</h1>
    <p>All of our well-appointed offers the same standard of natural style, comfort and impeccable service. A stay in our jungle home is the promise of an unforgettabale nature experience.</p></div>
  <section class="review">
  <h1 class="heading">Reviews</h1>
  <div class="aboutreview">
    <div class="reviewdetail">
      <div class="review_image">
        <img src="img/home review1.png" alt="">
      </div>
      <div class="name">
      <h1>Ellen</h1>
      <p>“This was my family vacation and this place exceeded my expectation. Staff were very welcoming and rooms were very clean. ”</p>
      </div>
    </div>
    <div class="reviewdetail">
      <div class="review_image">
        <img src="img/home review2.png">
      </div>
      <div class="name">
      <h1>Ryan</h1>
      <p>“Comfortable place to stay for one or two nights for a visit at the Chitwan National Park.It was amazing experience.”</p>
      </div>
    </div>
    <div class="reviewdetail">
      <div class="review_image">
        <img src="img/home review3.png">
      </div>
      <div class="name">
      <h1>Evan</h1>
      <p>"Our stay at this resort was nothing short of magical! The lush gardens, crystal-clear pools, and impeccable service left us speechless."</p>
      </div>
    </div>
  </div>
  </div>
@endsection 



