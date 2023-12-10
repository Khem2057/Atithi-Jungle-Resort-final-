@extends('frontend.admin.layoutadmin.adminlayout')
@section('admin-panel')

<link rel="stylesheet" href="{{asset('frontend/css/adminpanel/rooms.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="admin_section">
        <div class="admin-container">
            <div class="contact-details">
                <h1>Rooms</h1>
                <form action="{{('/room-store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="contact-container">
                    <div class="division">
                        
                        <div class="fd">
                            <label for="">Room type:</label>
                            <input type="text" name="roomtype">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;Description:</label>
                            <textarea id="description" name="description" rows="4" cols="36" required></textarea>
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;&nbsp;&nbsp;&nbsp;Total rooms:</label>
                            <input type="number" name="totalroom" >
                        </div>
                    </div>
                    <div class="division">
                    <div class="fd">
                            <label for="">&nbsp;Adult One Price:</label>
                            <input type="text" name="adultone">
                        </div>
                        <div class="fd">
                            <label for="">Adult Two Price:</label>
                            <input type="text" name="adulttwo">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Photo:</label>
                            <input type="file" id="r-img" name="img">
                        </div>
                    </div>
                    
                    
                    </div>
                    <button class="btn-rooms">Add</button>
                    <!-- <button class="btn-rooms">Update</button>
                    <button class="btn-rooms">Remove</button> -->
                </form>
            </div>

            <!-- for table  -->


            <table border="2px"  >
            <tr>
                <th >ID</th>
                <th >RoomType</th>
                <th>Description</th>
                <th>TotalRoom</th>
                <th>AdultOne</th>
                <th>AdultTwo</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            @foreach($rooms as $rm)
            <tr>
                <td>{{$rm->id}}</td>
                <td>{{$rm->roomtype}}</td>
                <td>{{$rm->description}}</td>
                <td>{{$rm->totalroom}}</td>
                <td>{{$rm->adultone}}</td>
                <td>{{$rm->adulttwo}}</td>
                <td>{{$rm->img}}</td>

                <td><a href="" class="btn btn-primary">Edit</a> | <a href="/room/delete/{{$rm->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
    
           

        </table>




        </div>
</div>





@endsection