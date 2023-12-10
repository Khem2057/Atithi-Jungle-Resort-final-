@extends('frontend.layouts.main')

@section('main-container')

<link rel="stylesheet" href="{{asset('frontend/css/booking.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />




<div class="background_imgg">
   
        <img class="bg_imgg" src="img/booking-bg-img.png" alt="image">
</div>

<div class="main-container-booking">
<div class="logoutt">
            <a  id="btn-logout" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="bi bi-power"></i><span class="logut">   Logout </span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                            @csrf
                        </form>
            </div>
<form method="get" action="">
    <div class="spacing-purpose">
        
        
    </div>
    
    <div class="booking">
    
	<div class="booking-section">
		<h1>Booking</h1>
    </div>
		<div class="bookingp">
		<p1>CheckIn</p1>
		<p1>Checkout</p1>
		<p1>Nights</p1>
        <p1> </p1>
    </div>

	<div class="form-outer">
		<div class="booking1">
			<div class="form">
				<div class="form-input">
					<!-- <span class="icon"><i class="fa-solid fa-calendar-days"></i></span> -->
					<input class="foi" type="date" name="checkin" id="checkin">
				</div>
				<div class="form-input">
					<!-- <span class="icon"><i class="fa-solid fa-calendar-days"></i></span> -->
					<input class="foi" type="date" name="checkout" id="checkout">
				</div>
				<div class="form-input">
					<!-- <span class="icon"><i class="fa-solid fa-calendar-days"></i></span> -->

					<!-- <input class="foi" type="number" name="night" id="night">  -->

                    <p class="foi" name="night" id="night"></p>
				</div>
                <div class="form-input">
                    
                </div>
			</div>
		</div>
    </div>
	<div class="bookingp1">
      	<div class="bookingroom">
      	    <p1>Room type</p1>
      	    <div class="bookingform1">
                <!-- <input class="foi" type="text" name="roomtype" id="rt"> -->


                <select id="mySelect" value="">
                    @foreach($rooms as $rm)
                            <option name="roomtype" value="{{ $rm->id }}">{{$rm->roomtype}}</option>
                    @endforeach
                </select>

                
            </div>
        </div>
        <div class="bookingform2">
      	         <!-- <input type="button" value="Check Rooms">  -->
                 <a href="check-availability"><button class="check-availability"> Check Availability</button></a>
        </div>
    </div>
    <h2>Room Reservation</h2>
    <div id="output">
        
        <div class="booking-process">
            <div class="room-img">
                <img class="rm-img" src="img/room deluxe.png" alt="image">
            </div>
            <div class="room-infos">
                <div class="hc-room">
                    <h3 id="rname">Deluxe Room</h3>
                    <div class="max-guest">
                        <p><span class="p-box">2</span> Max.guest + <span class="p-box">0</span> Child</p>
                    </div>
                </div>
                <!-- <div class="guests-price">
                    <p class="gp"><i class="fa-regular fa-user"></i> X 1 <input type="number" name="oneadult"> &nbsp; &nbsp; &nbsp; &nbsp; <i class="fa-regular fa-user"></i> X 2 <input type="number" name="adulttwo"> </p>
                </div> -->
                <div class="f-rooms">
                    <p class="fr">&nbsp; &nbsp; &nbsp; <i class="fa-regular fa-thumbs-up"></i> Best Price Guranteed &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="fa-solid fa-wifi"></i> Wifi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="fa-light fa-square"></i> Room Services</p>
                </div>
                <div class="inputs">
                    Rooms Price   
                                <input type="number" id="room-price" value="4000" name="noofroom"><br>
                    No of Adults  &nbsp;&nbsp;<input type="number" id="adults" value="1" name="noofadults" min="1" max="2">    <p style="margin-top: 5px;">Total Price: $<span id="total-price" style="background-color: white; color:black; font-size:25px; padding:5px; margin:10px; border-radius:3px">100</span></p> <!-- <input type="text" name="totalprice"> -->
                </div>
                
            </div>
        </div>
        <button class="r-book">Book</button>
    </div>
</form>
    
</div>

<style>
    .logoutt{
    width: 5%;
    align-items: center;
    text-align: center;
    margin-left: 78%;
    /* background-color: rgb(167, 61, 61); */
    color: white;
    font-size: 20px;
    /* font-weight: bolder; */
    z-index: 100;
    position: fixed;
    border-radius: 3px;
    padding-left: 5px 4px;
    margin-top: 28px;
    background-color: rgb(167, 61, 61);
    
}
.logoutt:hover, .logut:hover{
    color: rgb(167, 61, 61);
    background-color: white;
}
.logut{
    color: white;
    text-decoration: none;
    z-index: 100;
}
#btn-logout{
    text-decoration: none;
    width: 100%;
}

</style>


<!-- ---------------------------------this code is for calculate the nights to stay in hotel------------------------------  -->

<script>
    // Get references to the input elements
const checkInInput = document.getElementById('checkin');
const checkOutInput = document.getElementById('checkout');
const resultParagraph = document.getElementById('night');

// Add an input event listener to the check-out date field
checkOutInput.addEventListener('input', function () {
    const checkInDate = new Date(checkInInput.value);
    const checkOutDate = new Date(checkOutInput.value);

    if (checkOutDate < checkInDate) {
        resultParagraph.innerHTML = "Check-out date must be after check-in date.";
        return;
    }

    const timeDifference = checkOutDate.getTime() - checkInDate.getTime();
    const nightsOfStay = Math.ceil(timeDifference / (1000 * 3600 * 24)); // 1 day = 1000ms * 60s * 60min * 24hr

    resultParagraph.innerHTML = nightsOfStay ;
});






// -------------------------------------------------this is for change the room container dynamically----------------------------


// Get a reference to the select element and the target element
const selectElement = document.getElementById("mySelect");
const outputDivv = document.getElementById("output");
// outputDivv.style.display = "none";
// Add an event listener to the select element
selectElement.addEventListener("change", function() {

    // outputDivv.style.display = "none";

  // Get the selected option's value
  const selectedOption = selectElement.value;
  
  // Use a switch or if/else statement to change content based on the selected option
  switch (selectedOption) {
    case "1":
    //   outputElement.textContent = "Content for option 3";
      outputDivv.style.display = "block";

      break;
    case "2":
    //   outputElement.textContent = "Content for Option 1";
        outputDivv.style.display = "block";
      break;
    // case "3":
    //   outputElement.textContent = "Content for Option 3";
    //   break;
    case "3":
    //   outputElement.textContent = "Content for Option 4";
      outputDivv.style.display = "block";
      break;
    default:
      outputElement.textContent = "Default Content";
  }
});


// Get a reference to the select element
// const selectElement = document.getElementById("mySelect");
// const outputDiv = document.getElementById("output");

// // Add an event listener to the select element
// selectElement.addEventListener("change", function() {
//     // Check if any option is selected
//     if (selectElement.value === "1") {
//         outputDiv.style.display = "block"; // Show the output div
//     } else {
//         outputDiv.style.display = "none"; // Hide the output div
//     }
// });







// <!-- ---------------------------------------------------total price automatically update--------------------------------------------->

const roomPriceInput = document.getElementById("room-price");
const adultsInput = document.getElementById("adults");
const totalPriceSpan = document.getElementById("total-price");

// Function to update the total price
function updateTotalPrice() {
  const roomPrice = parseFloat(roomPriceInput.value) || 0;
  const numAdults = parseInt(adultsInput.value) || 0;

  const totalPrice = roomPrice + (numAdults - 1) * 1000;
  totalPriceSpan.textContent = totalPrice;
}

// Add input event listeners to update the total price as the user types
roomPriceInput.addEventListener("input", updateTotalPrice);
adultsInput.addEventListener("input", updateTotalPrice);

// Initial calculation
updateTotalPrice();



// <----------------------------------------------------- change the room name according to selectElement -------------------------------->

    // document.getElementById('mySelect').onchange = function() {
    //     var selecteditem = this.selectedIndex;
    //     document.getElementById('rname').innerHTML = selectedIndex;
    // };

    document.getElementById('mySelect').onchange = function() {
        var selectedOption = this.options[this.selectedIndex];
        // var selectedValue = selectedOption.value;
        var selectedText = selectedOption.text;

        // var displayInfo = 'Selected Value: ' + selectedValue + '<br>' +
        //                   'Selected Text: ' + selectedText;

        document.getElementById('rname').innerHTML = selectedText;
    };

</script>


@endsection