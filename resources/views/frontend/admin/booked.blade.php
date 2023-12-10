@extends('frontend.admin.layoutadmin.adminlayout')
@section('admin-panel')

<link rel="stylesheet" href="{{asset('frontend/css/adminpanel/booked.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<div class="admin_section">
        <div class="admin-container">
            <div class="contact-details">
                <h1>Booked</h1>
                <form action="{{('/roombook')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="contact-container">
                    <div class="division">
                
                        <div class="fd">
                            <label for="">Check In:</label>
                            <input type="date" name="checkin">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;Night:</label>
                            <input type="number" name="night">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;&nbsp;&nbsp;&nbsp;Room Type:</label>
                            <input type="text" name="roomtype">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;Room no:</label>
                            <input type="number" name="roomno">
                        </div>
                    </div>
                    <div class="division">
                    
                        <div class="fd">
                            <label for="">Check Out:</label>
                            <input type="date" name="checkout">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No of room:</label>
                            <input type="number" name="noofroom">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;&nbsp;&nbsp;No of Adults:</label>
                            <input type="number" name="noofadults">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;&nbsp;&nbsp;Total price:</label>
                            <input type="double" name="totalprice">
                        </div>
                    </div>
                    
                    
                    </div>
                    <button class="btn-contact">Add</button>
                    <!-- <button class="btn-contact">Update</button> -->
                    <!-- <button class="btn-gallery">Remove</button> -->
                </form>
            </div>

            <!-- for table  -->


        <table border="2px"  >
            <tr>
                <th>Id</th>
                <th >Checkin</th>
                <th >Checkout</th>
                <th>Night</th>
                <th>Room Type</th>
                <th>Room no</th>
                <th>No of rooms</th>
                <th>No of adults</th>
                <th>Total price</th>
                <th>Action</th>
            </tr>


            @foreach($booking as $bks)
            <tr>
                <td>{{$bks->id}}</td>
                <td>{{$bks->checkin}}</td>
                <td>{{$bks->checkout}}</td>
                <td>{{$bks->night}}</td>
                <td>{{$bks->roomtype}}</td>
                <td>{{$bks->roomno}}</td>
                <td>{{$bks->noofroom}}</td>
                <td>{{$bks->noofadults}}</td>
                <td>{{$bks->totalprice}}</td>

                <td><a href="" class="btn btn-primary">Edit</a> | <a href="/room/delete/{{$bks->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach

    
            
        </table>







        </div>
</div>



@endsection