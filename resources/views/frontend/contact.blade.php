@extends('frontend.layouts.main')
@section('main-container')

<link rel="stylesheet" href="{{asset('frontend/css/contact.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<section class="page_container">
    <div class="image">
        <img src="img/contact image.png" alt="image">
        <p>Feel Free to Call Us <br> <span>Or Contact Us Directly To Book Or Make Reservation</span></p>
    </div>
</section>


<!-- contact information -->



<div class="about-content">
    <br><p>We are here to help you craft the perfect package for you and your family to experience the stay here</p><br>
    <div class="about-contact1">
    <div class="contact">
      <h1>Atithi Jungle Resort</h1>
      <h1>Phone Number</h1>
      <h1>Email Address</h1>
      <h1>Follow us</h1>
    </div>
    <div class="contact1">
      <p>Chitwan National Park,Gandaki provience, Nepal</p>
      <p> 1234567890/ 9898765432</p>
      <p>atithijungleresort@gmail.com</p>
      <p>
          <a href=""><i class="fa-brands fa-square-facebook" id="size_social"></i></a>
          <a href=""><i class="fa-brands fa-instagram" id="size_social"></i></a>
          <a href=""><i class="fa-brands fa-tiktok" id="size_social"></i></a>
          <a href=""><i class="fa-brands fa-twitter" id="size_social"></i></a>
      </p>
    </div>
  </div>
  <div class="map_container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14148.251912221313!2d84.07895964116689!3d27.560555869246866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399445dbdb5686c3%3A0x6e3a8e2d27c82623!2sHimalayan%20Wildlife%20Sanctuary!5e0!3m2!1sen!2snp!4v1695987567071!5m2!1sen!2snp" width="100%" height="572px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
    <div class="query">
      <p>Drop Message for any query</p>
    </div>
    <div class="query1">
        <form method="post" action="{{url('/query-store')}}" enctype="multipart/form-data">
          @csrf
          <input type="text" placeholder="Your Name" name="name">
          <input type="text" placeholder="Your Email" name="email">
          <input type="text" placeholder="Contact" name="contact">
          <input type="text" placeholder="Address" name="address">
          <textarea row="20" placeholder="Write Message" name="message"></textarea>
          <button type="submit">Submit Now</button>
        </form>
      </div>
</div>

@endsection