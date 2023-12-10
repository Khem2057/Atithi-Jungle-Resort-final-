@extends('frontend.layouts.main')
@section('main-container')

<link rel="stylesheet" href="{{asset('frontend/css/package.css')}}">

<section class="page_container">
    <div class="image">
        <img src="img/package image.png" alt="image">
        <p>Exclusive Packages </p>
    </div>
</section>



		<!-- ------------------package section--------------------------->



	<div class="p_container">
		<div class="p_container1">
			<p>Atithi offers variety of activities available in the resorts according to each preference. our recommended duration is 2 Night and 3 Days in order for you get the most of the services  and activities that we offer.</p>	
		</div>
		<div class="p_resort_container">
			<div class="p_resort_cards">
				<div class="p_resort_card">
					<div class="p_resort_image">
						<img src="img/home package 1.jpg">
					</div>
					<div class="p_resort-content">
						<h2>1 Night 2 Days</h2>
						<button onclick="func1()" id="btncolor1" class="package_links" href="{{url('/package')}}">View package</button>
					</div>
				</div>
				<div class="p_resort_cards">
					<div class="p_resort_card">
						<div class="p_resort_image">
							<img src="img/home package 2.png">
						</div>
						<div class="p_resort-content">
							<h2>2 Night 3 Days</h2>
							<button onclick="func2()" id="btncolor2" class="package_links" href="{{url('/package')}}">View package</button>
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
							<button onclick="func3()" id="btncolor3" class="package_links" href="{{url('/package')}}">View package</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="package1-info" id="pack1">
			<p><h2>DAY 1</h2>
				Arrive at Machan Country Villa via Narayan Ghat Bridge which is 43 K.M from the main East- West highway towards Danda, Kawasoti. Upon arrival there will be a short briefing on the program and our facilities and the rooms will be assigned.

				<br><span class="dinner">Lunch at the dining hall</span><br>
				<span class="topi">Jeep Safari</span>: Drive to Lamachaur for the entry inside the forest and start a jungle drive. Optional: At some point During Jeep drive, our guide will stop jeep drive and take you a short walk inside the jungle. (Jungle walk is one the adventurous and entertaining activity of the Forest. One can walk through dense forest around the natural habitat of the wild animals during the jungle walk).

				<br><span class="topi">Sundowner Experience</span>: After the enchanting Jeep Safari you will be welcomed on the banks of Narayani River where wine, cheese and light snacks are offered. Sip back and relax while the sun sets and the tranquil of the jungle relaxes you.

				<br><span class="topi">Slide presentation</span>: One of our jungle experts will introduce background data and history of the Chitwan National Park as well as some other topics relating to wildlife. Your questions are most welcome.

				<br><span class="topi">Dinner</span> at the central dining hall.

				<br><br><h2>DAY 2</h2> <span class="topi">Breakfast</span> at the resort.

				<br><span class="topi">Bird Watching/Nature Walk</span>: Out of 519 species of the birds we have recorded 276 species in our area. Hence, the area around Machan Country Villa is considered a Paradise for bird watchers. Our guides will help you to identify some of the species of these birds.

				<br><span class="topi">Departure</span> to your following destination.

				<br><br><span class="topi">THE ACTUAL PROGRAM FOR YOUR STAY WITH US WILL BE GIVEN TO YOU ON ARRIVAL AT RESORT. THE ACTIVITIES ARE ADJUSTED TO THE LENGTH OF YOUR STAY, THE SEASON AND PRESENT WEATHER CONDITIONS. NATURALLY, IT MAY NOT ALWAYS BE POSSIBLE TO FOLLOW THIS SCHEDULE TO THE MINUTE AND THE CIRCUMSTANCES MAY FORCE US TO ALTER THE PROGRAM AT SHORT NOTICE. ON SAFARI IN THE JUNGLE YOU WILL BE ACCOMPANIED BY OUR EXPERT NATURALISTS WHO WILL ADVISE ON SAFETY PROCEDURES AND WE REQUEST YOU TO RESPECT THEIR JUDGMENT AT ALL TIMES.
				FOR ANY SUGGESTION OR ADDITIONAL REQUESTS, OUR GUIDES OR THE CAMP-IN-CHARGE WILL BE HAPPY TO OBLIGE WITH YOU. WE WISH YOU AN ENJOYABLE STAY WITH US.
				</span>
			</p>
		</div>
		<div class="package1-info" id="pack2">
		<p> 
			<h2>DAY 1</h2>
			Arrive at Machan Country Villa via Narayan Ghat Bridge which is 43 K.M from the main East- West highway towards Danda, Kawasoti. Upon arrival there will be a short briefing on the program and our facilities and the rooms will be assigned.

			<br><span class="dinner">Lunch at the dining hall</span>
			<br><span class="topi">Visit to the Village</span>: The village is dominant of Tharu Community. Tharu one of the popular and respected indigenous group of Nepal rich in their typical culture and typical lifestyle. Our naturalist will brief you about the social and cultural aspect of the villagers and their lifestyle. Crafty locals: Villagers will show you their skills in craftsmanship, where they will exhibit traditional handicrafts used in their daily lives.

			Slide presentation:n. One of our jungle experts will introduce background data and history of the Chitwan National Park as well as some other topics relating to wildlife. Your questions are most welcome.

			<br><span class="topi">Dinner</span> at the central dining hall.

			<br><br><h2>DAY 2</h2>
			<br><span class="topi">Breakfas</span> at the resort.

			<br><span class="topi">Bird Watching/Nature Walk</span>: Wake-up call followed by tea or coffee then proceed for Bird watching/Nature walk. Out of 519 species of the birds we have recorded 276 species in our area. Hence, the area around Machan Country Villa is considered a Paradise for bird watchers. Our guides will help you to identify some of the species of these birds.

			<br><span class="topi">Dinner</span> at the central dining hall.

			<br><span class="topi">Jeep Safari</span>: Drive to Lamachaur for the entry inside the forest and start a jungle drive. (Optional: At some point During Jeep drive, our guide will stop jeep drive and take you a short walk inside the jungle.) (Jungle walk is one the adventurous and entertaining activity of Chitwan. One can walk through dense forest around the natural habitat of the wild animals during the jungle walk).

			<br><span class="topi">Boating (subject to weather conditions & water level in the river)</span>: Start boating in a traditional patela boat for about 45 minutes which takes you on a silent trip down the Narayani River to view aquatic birds, crocodiles, Gharials and the animals of the river banks.

			<br><span class="topi">Sundowner Experience</span>: After the enchanting boat ride you will be welcomed on the banks of Narayani River where refreshment are offered. Sip back and relax while the sun sets and the tranquil of the jungle relaxes you. Add on: make your sundowner experience more exclusive with a glass of wine and cheese along with light snacks. The setting will be upgraded with lounging chairs and canopy tent at the river bank.

			<br><span class="topi">Tharu Cultural dance (minimum 4 pax required)</span>: Farmers of the nearby villages will show some of their traditional skills and dances.

			<br><span class="topi">BBQ Dinner</span> in the central dining hall or outside at the garden area.

			<br><br><h2>DAY 3</h2>
			<br><span class="topi">Breakfast</span> at the resort.

			<br><span class="topi">Departure</span> to your following destination.

			<br><br><span class="topi">THE ACTUAL PROGRAM FOR YOUR STAY WITH US WILL BE GIVEN TO YOU ON ARRIVAL AT RESORT. THE ACTIVITIES ARE ADJUSTED TO THE LENGTH OF YOUR STAY, THE SEASON AND PRESENT WEATHER CONDITIONS. NATURALLY, IT MAY NOT ALWAYS BE POSSIBLE TO FOLLOW THIS SCHEDULE TO THE MINUTE AND THE CIRCUMSTANCES MAY FORCE US TO ALTER THE PROGRAM AT SHORT NOTICE. ON SAFARI IN THE JUNGLE YOU WILL BE ACCOMPANIED BY OUR EXPERT NATURALISTS WHO WILL ADVISE ON SAFETY PROCEDURES AND WE REQUEST YOU TO RESPECT THEIR JUDGMENT AT ALL TIMES.
			FOR ANY SUGGESTION OR ADDITIONAL REQUESTS, OUR GUIDES OR THE CAMP-IN-CHARGE WILL BE HAPPY TO OBLIGE WITH YOU. WE WISH YOU AN ENJOYABLE STAY WITH US.
			</span>		
		</p>
		</div>
		<div class="package1-info" id="pack3">
			<p>
				<h2>DAY 1</h2>
				Arrive at Machan Country Villa via Narayan Ghat Bridge which is 43 K.M from the main East- West highway towards Danda, Kawasoti. Upon arrival there will be a short briefing on the program and our facilities and the rooms will be assigned.

				<br><span class="dinner">Lunch at the resort</span>
				<br><span class="topi">Visit to the Village</span>: The village is dominant of Tharu Community. Tharu one of the popular and respected indigenous group of Nepal rich in their typical culture and typical lifestyle. Our naturalist will brief you about the social and cultural aspect of the villagers and their lifestyle.

				<br><span class="topi">Slide presentation</span>: One of our jungle experts will introduce background data and history of the Chitwan National Park as well as some other topics relating to wildlife. Your questions are most welcome.

				<br><span class="topi">Dinner at the resort</span>.

				<br><br><h2>DAY 2</h2>
				<br><span class="topi">Cycling Tour</span>: Enjoy cycling activity surrounded by lush green pastures, rice fields and typical villages. An unforgettable bike ride through the countryside.

				<br><span class="topi">Breakfast at the resort.</span>

				<br><span class="topi">Bird Watching</span>: After morning tea or coffee we then proceed for Bird watching/Nature walk with Elephants. Out of 519 species of the birds we have recorded 276 species in our area. Hence, the area around Machan Country Villa is considered a Paradise for bird watchers. Our guides will help you to identify some of the species of these birds.

				<br><span class="dinner">	Lunch at the dining hall</span>

				<br><span class="topi">Jeep Safari</span>: Drive to Lamachaur for the entry inside the forest and start a jungle drive. Optional: At some point During Jeep drive, our guide will stop jeep drive and take you a short walk inside the jungle. (Jungle walk is one the adventurous and entertaining activity of Chitwan. One can walk through dense forest around the natural habitat of the wild animals during the jungle walk).

				<br><span class="topi">(Note: Jeep Safari is prohibited during monsoon season by the park authorities from June-September and in some season it can prolong till October)</span>

				<br><span class="topi">Tharu Cultural dance</span>:Farmers of the nearby villages will show some of their traditional skills and dances.

				<br><span class="topi">Dinner at the resort</span>.

				<br><br><h2>DAY 3</h2>
				<br><span class="topi">Breakfast at the resort</span>.

				<br><span class="topi">Jeep Safari (subject to weather conditions & water level in the river)</span>: Drive to Lamichaur for the entry inside the forest and start a jungle drive.

				<br><span class="dinner">Lunch at the resort</span>

				<br><span class="topi">Canoeing</span>: Start boating in a traditional patela boat for about 45 minutes which takes you on a silent trip down the Narayani River to view aquatic birds, crocodiles, Gharials and the animals of the river banks.

				<br><span class="topi">Sundowner Experience</span>: You will be welcomed on the banks of Narayani River where wine, cheese and snacks are offered. Sip back and relax while the sun sets and the tranquil of the jungle relaxes you.

				<br><span class="topi">BBQ</span> Dinner in the central dining hall or outside at the garden area.

				<br><br><h2>DAY 4</h2>
				<br><span class="topi">Breakfast at the resort</span>.

				<br><span class="topi">Departure to your following destination</span>.

				THE ACTUAL PROGRAM FOR YOUR STAY WITH US WILL BE GIVEN TO YOU ON ARRIVAL AT RESORT. THE ACTIVITIES ARE ADJUSTED TO THE LENGTH OF YOUR STAY, THE SEASON AND PRESENT WEATHER CONDITIONS. NATURALLY, IT MAY NOT ALWAYS BE POSSIBLE TO FOLLOW THIS SCHEDULE TO THE MINUTE AND THE CIRCUMSTANCES MAY FORCE US TO ALTER THE PROGRAM AT SHORT NOTICE. ON SAFARI IN THE JUNGLE YOU WILL BE ACCOMPANIED BY OUR EXPERT NATURALISTS WHO WILL ADVISE ON SAFETY PROCEDURES AND WE REQUEST YOU TO RESPECT THEIR JUDGMENT AT ALL TIMES.
				<br><br><span class="topi">FOR ANY SUGGESTION OR ADDITIONAL REQUESTS, OUR GUIDES OR THE CAMP-IN-CHARGE WILL BE HAPPY TO OBLIGE WITH YOU. WE WISH YOU AN ENJOYABLE STAY WITH US.</span>

			</p>
		</div>

	</div>




	<script>
		// for changing information according the packages 


		var package1 = document.getElementById("pack1");
		var package2 = document.getElementById("pack2");
		var package3 = document.getElementById("pack3");
		var btn1 = document.getElementById("btncolor1");
		var btn2 = document.getElementById("btncolor2");
		var btn3 = document.getElementById("btncolor3");

		package1.style.display = "none";
		package2.style.display = "none";
		package3.style.display = "none";
		function func1(){
			if(package1.style.display=== "none"){
				package1.style.display= "block";
				package2.style.display= "none";
				package3.style.display= "none";
				btn1.style.backgroundColor= "white";
				btn1.style.color= "rgb(79, 164, 254)";
			}
			if(package1.style.display=== "block"){
				
				btn1.style.backgroundColor= "white";
				btn1.style.color= "rgb(79, 164, 254)";
				btn2.style.backgroundColor= "rgb(79, 164, 254)"
				btn2.style.color= "white";
				btn3.style.backgroundColor= "rgb(79, 164, 254)"
				btn3.style.color= "white";
			}
		}
		function func2(){
			if(package2.style.display=== "none"){
				package2.style.display= "block";
				package1.style.display= "none";
				package3.style.display= "none";
			}
			if(package2.style.display=== "block"){
				
				btn2.style.backgroundColor= "white";
				btn2.style.color= "rgb(79, 164, 254)";
				btn1.style.backgroundColor= "rgb(79, 164, 254)"
				btn1.style.color= "white";
				btn3.style.backgroundColor= "rgb(79, 164, 254)"
				btn3.style.color= "white";
			}
		}
		function func3(){
			if(package3.style.display=== "none"){
				package3.style.display= "block";
				package1.style.display= "none";
				package2.style.display= "none";
			}
			if(package3.style.display=== "block"){
				
				btn3.style.backgroundColor= "white";
				btn3.style.color= "rgb(79, 164, 254)";
				btn2.style.backgroundColor= "rgb(79, 164, 254)"
				btn2.style.color= "white";
				btn1.style.backgroundColor= "rgb(79, 164, 254)"
				btn1.style.color= "white";
			}
		}



		// for changing the color of button while active phase 


		

		// function func1(){
		
		// }
		// function func2(){
		// 	btn2.style.backgroundColor= "white";
		// 	btn2.style.color= "rgb(79, 164, 254)";
		// }
		// function func3(){
		// 	btn3.style.backgroundColor= "white";
		// 	btn3.style.color= "rgb(79, 164, 254)";
		// }
	</script>


@endsection