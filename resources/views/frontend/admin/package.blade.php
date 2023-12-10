@extends('frontend.admin.layoutadmin.adminlayout')
@section('admin-panel')

<link rel="stylesheet" href="{{asset('frontend/css/adminpanel/package.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="admin_section">
        <div class="admin-container">
            <div class="package-details">
                <h1>Package</h1>
                @if(session('message'))
                    <h3 class="alert alert-success" style="color:green;  ">{{session('message')}}</h3>
                @endif
                <form action="{{('/package-store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="fd">
                        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:</label>
                        <input type="text" name="name">
                    </div>
                    <div class="fd">
                        <label for="">Description:</label>
                        <textarea id="description" name="description" rows="4" cols="36" required></textarea>
                    </div>
                    <div class="fd">
                        <label for="">Image:</label>
                        <input class="s-input" type="file" name="img">
                    </div>
                   
                    <button class="btn-package">Add</button>
                    <!-- <button class="btn-package">Update</button> -->
                    <!-- <button class="btn-gallery">Remove</button> -->
                </form>
            </div>

                <!-- for table  -->

        <table border="2px"  >
            <tr>
                <th >ID</th>
                <th >Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            


            @foreach($packages as $pkg)
            <tr>
                <td>{{$pkg->id}}</td>
                <td>{{$pkg->name}}</td>
                <td>{{$pkg->description}}</td>
                <td>{{$pkg->img}}</td>

                <td><a href="" class="btn btn-primary">Edit</a> | <a href="/package/delete/{{$pkg->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
    
            
        </table>




        </div>
</div>



@endsection