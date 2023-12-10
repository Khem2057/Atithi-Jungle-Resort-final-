@extends('frontend.admin.layoutadmin.adminlayout')
@section('admin-panel')

<link rel="stylesheet" href="{{asset('frontend/css/adminpanel/home-details.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


   <!-- admin panel -->



<div class="admin_section">
        <div class="admin-container">
            <div class="hotel-details">
                <h1>Hotel Details</h1>
                @if(session('status'))
                    <h3 class="alert alert-success" style="color:green;  ">{{session('status')}}</h3>
                @endif
                <form action="{{url('/upload-hoteldetail/{id}')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="fd">
                        <label for="">Hotel name:</label>
                        <input type="text" name="hotelname">
                    </div>
                    <div class="fd">
                        <label for="" >Logo: </label>
                        <input class="s-input" type="file" name="logo">
                    </div>
                    <div class="fd">
                        <label for="">Video:</label>
                        <input class="s-input" type="file" name="video">
                    </div>

                    
                    <button class="btn-change" >Add</button>
                   
                    
                </form>
            </div>



            <table border="2px"  id="userTableBody">
            <tr class="bg-[url('/resources/background/background.png')]">
                <th >Id</th>
                <th >Name</th>
                <th >Logo</th>
                <th>Video</th>
                <th>Action</th>
            </tr>
            @foreach($hoteldetail as $hd)
            <tr>
                <td>{{$hd->id}}</td>
                <td>{{$hd->hotelname}}</td>
                <td>{{$hd->logo}}</td>
                <td>{{$hd->video}}</td>
                
                <td><a href="/edit-hotel/{{$hd->id}}" class="btn btn-primary">Edit</a> | <a href="/hotel/delete/{{$hd->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
            </table>
        </div>
</div>


@endsection