@extends('frontend.layouts.main')
@section('main-container')

<link rel="stylesheet" href="{{asset('frontend/css/gallery.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section class="page_container">
	<div class="image">
		<img src="img/gallery image.png" alt="image">
		<p> A Comprehensive Selection of Image </p>
	</div>
</section>

<!-- @foreach($gallery as $img)
<div class="gallery"> -->
	<!-- <div class="image"> -->
	<!-- <div class="imgBx"> -->
	<!-- <img src="img/gallery 1.png" alt="img1"> -->
	<!-- <img src="{{asset('img/galleries/'.$img->img)}}" alt="dynamic image"> -->
	<!-- </div> -->
	<!-- </div> -->
	<!-- <div class="imagess d-flex justify-content-center">



		<div class="row">
			<div class="col" style="height: 400px; width:30%">
				<img src="{{asset('img/galleries/'.$img->img)}}" alt="dynamic image">
			</div> -->
			<!-- <div class="col-5">
		<img src="{{asset('img/galleries/'.$img->img)}}" alt="dynamic image">
    </div>
    <div class="col">
	<img src="{{asset('img/galleries/'.$img->img)}}" alt="dynamic image">
    </div> -->
		<!-- </div>
	</div> -->
	<!-- <div class="image">
			<div class="imgBx">
				<img src="img/gallery 2.png" alt="img1">
			</div>
		</div>
		<div class="image">
			<div class="imgBx">
				<img src="img/gallery 3.png" alt="img1">
			</div>
		</div>
		<div class="image">
			<div class="imgBx">
				<img src="img/gallery 4.png" alt="img1">
			</div>
		</div>
		<div class="image">
			<div class="imgBx">
				<img src="img/gallery 5.png" alt="img1">
			</div>
		</div>
		<div class="image">
			<div class="imgBx">
				<img src="img/gallery 6.png" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 7.png" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 8.png" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 9.png" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 10.png" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 11.jpg" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 12.png" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 13.png" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 14.jpg" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 15.jpg" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 16.jpg" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 17.jpg" alt="img1">
			</div>
		</div>
		  <div class="image">
			<div class="imgBx">
				<img src="img/gallery 18.jpg" alt="img1">
			</div>
		</div> -->
<!-- </div>
@endforeach -->
<div class="gallery container">
	<div class="row d-flex ">
		@foreach($gallery as $img)
		<div class="col-4">
				<img src="{{asset('img/galleries/'.$img->img)}}" alt="dynamic image" class="img-thumbnail" style="height: 400px; width:100%; object-fit:cover; ">
			</div>
		@endforeach
	</div>
</div>
<style>
	.gallery{
		min-height: auto !important;
		
	}
	.col-4{
		padding: 15px !important; 
		
	}
	.col-4 img{
		box-shadow: 5px 5px 10px 0px black;
	}
	.img-thumbnail{
		background-color: transparent;
		border: none;
	}
</style>
@endsection