@extends('frontend.layouts.main')
@section('main-container')

<link rel="stylesheet" href="{{asset('frontend/css/room.css')}}">

<section class="page_container">
    <div class="image">
        <img class="img1" src="img/room image.png" alt="image">
        <p class="p1">An immersive stay in Chitwan National Park <br> <span>With Differnet Accommodation Choices</span></p>
    </div>
</section>



<!-- rooms sections -->


<!-- deluxe room  -->
<div class="room_content" id="deluxe">
		<p>Atithi Jungle Resort rooms are spacious and well-ventilated. Fabrics and sheets are made from locally source natural fiber. All the rooms have private outside seating area .</p>
	</div>
	<div class="Deluxeroom">
		<div class="Deluxeroom_content">
			<div class="Deluxecontent">
				<h1>Deluxe Room</h1>
				<p>Enjoy your vacation in Atithi Jungle Resort’s Deluxe Room! Nestled along the Narayani River, our rooms boast a blend of comfort and adventure. The spacious room welcomes you with a King Size Bed, ensuring a restful night’s sleep after your explorations. The room comes at a great value.</p>
				<div class="Deluxe_room">
					<div class="lists_feature">
						<ul class="room_ul">
							<li>1 King Size Bed</li>
							<li>Private living space & pantry</li>
							<li>Attached Bath</li>
							<li>Air conditioning</li>
							<li>Desk</li>
							<li>Dining area</li>
							<li>Housekeeping</li>
						</ul>
					</div>
					<div class="lists_feature">
						<ul class="room_ul">
							<li>Coffee / tea maker</li>
							<li>Sofa bed</li>
							<li>Bath / shower</li>
							<li>Interconnected rooms available</li>
							<li>Room service</li>
							<li>Seating area</li>
						</ul>
					</div>


				</div>
				
			</div>
			<div class="r_image">
				<img src="img/room deluxe.png">
			</div>
		</div>
		<a href="" class="booknow">Book Now</a>
	</div>



	<!-- standard room  -->
	<div class="Deluxeroom" id="standard">
		<div class="Deluxeroom_content">
		<div class="r_image">
			<img src="img/room standard.png">
		</div>
		<div class="Deluxecontent">
			<h1>Standard Room</h1>
			<p>Experience the ultimate jungle retreat in Atithi Jungle Resort’s Standard Room! Nestled amidst the lush wilderness, our room boasts the perfect blend of comfort and adventure. Accommodating up to four adults, it’s a fantastic choice for families or friends seeking a getaway.</p>
			<div class="Deluxe_room">
				<div class="lists_feature">
						<ul class="room_ul">
							<li>1 King Size Bed</li>
							<li>Private living space & pantry</li>
							<li>Attached Bath</li>
							<li>Air conditioning</li>
							<li>Desk</li>
							<li>Dining area</li>
							<li>Housekeeping</li>
						</ul>
				</div>
				<div class="lists_feature">
						<ul class="room_ul">
							<li>1 King Size Bed</li>
							<li>Private living space & pantry</li>
							<li>Attached Bath</li>
							<li>Air conditioning</li>
							<li>Desk</li>
							<li>Dining area</li>
							<li>Housekeeping</li>
						</ul>
				</div>
			</div>
		</div>
		</div>
		<a href="" class="booknow">Book now</a>
	</div>
</div>

	<!-- executive room  -->
	<div class="Deluxeroom" id="executive">
		<div class="Deluxeroom_content">
			<div class="Deluxecontent">
				<h1>Executive Room</h1>
				<p>Accommodations are well-decorated with cozy & elegant amenities blending the comforts. Atithi Jungle Resort have 10 rooms where you can enjoy beautiful forest view from 6 rooms & a jawdropping view of mountain & city from 4 rooms.  The room comes at a great value, with rates starting at just NPR. 5,000. Discover the perfect blend of nature, comfort, and affordability at Atithi Jungle Resort.</p>
				<div class="Deluxe_room">
					<div class="lists_feature">
						<ul class="room_ul">
							<li>Hair Dryer</li>
							<li>Telephone</li>
							<li>Attached Bath</li>
							<li>Air conditioning</li>
							<li>Internet access with wifi</li>
							<li>Dining area</li>
							<li>Breakfast included</li>
						</ul>
					</div>
					<div class="lists_feature">
						<ul class="room_ul">
							<li>Coffee / tea maker</li>
							<li>Sofa bed</li>
							<li>Bath / shower</li>
							<li>Interconnected rooms available</li>
							<li>Eco friendly room lighting</li>
							<li>Seating area</li>
						</ul>
					</div>


				</div>
				
			</div>
			<div class="r_image">
				<img src="img/room executive.png">
			</div>
		</div>
		<a href="" class="booknow">Book Now</a>
	</div>

	<!-- suite room  -->
	<div class="Deluxeroom" id="suite">
		<div class="Deluxeroom_content">
		<div class="r_image">
			<img src="img/room suite.png">
		</div>
		<div class="Deluxecontent">
			<h1>Suite Room</h1>
			<p>A king size bed with separate living room and private Jacuzzi is the most luxurious and comfortable room available with us featured with private balcony overlooking the  beauty of Chitwan National Park. Suite has all the luxury amenities including en-suit bathroom and 32 inch LED satellite television.</p>
			<div class="Deluxe_room">
				<div class="lists_feature">
						<ul class="room_ul">
							<li>Phone</li>
							<li>Free wifi</li>
							<li>comfortable bed</li>
							<li>Air conditioning</li>
							<li>Wardrobe</li>
							<li>Comfortable sitting</li>
							<li>Sofa</li>
						</ul>
				</div>
				<div class="lists_feature">
						<ul class="room_ul">
							<li>Work table</li>
							<li>Quite place</li>
							<li>Attached Bath</li>
							<li>Wakeup call</li>
							<li>Desk</li>
							<li>Dining area</li>
							<li>Housekeeping</li>
						</ul>
				</div>

			</div>
			
		</div>
		</div>
		<a href="" class="booknow">Book now</a>
	</div>

@endsection