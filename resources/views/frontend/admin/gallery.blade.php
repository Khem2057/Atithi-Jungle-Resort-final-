@extends('frontend.admin.layoutadmin.adminlayout')
@section('admin-panel')

<link rel="stylesheet" href="{{asset('frontend/css/adminpanel/gallery.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<div class="admin_section">
        <div class="admin-container">
            <div class="gallery-details">
                <h1>Gallery</h1>
                @if(session('status'))
                    <h3 class="alert alert-success" style="color:green;  ">{{session('status')}}</h3>
                @endif
                
                <form action="{{url('/upload-gallery')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                <!-- <div class="fd">
                        <label for="">Id:</label>
                        <input type="text" name="gid">
                    </div> -->
                    <div class="fd">
                        <label for="">Gallery:</label>
                        <input class="s-input" type="file" name="image">
                    </div>
                   
                    <button class="btn-gallery">Add</button>
                    <!-- <button class="btn-gallery">Update</button> -->
                    <!-- <button class="btn-gallery">Remove</button> -->
                </form>
                
            </div>



            <!-- for table  -->

            <table border="2px"  id="userTableBody">
            <tr class="bg-[url('/resources/background/background.png')]">
                <th >ID</th>
                <th >Image</th>
                <th>Action</th>
            </tr>
    
    
            <!-- @php
                use Illuminate\Support\Facades\DB;
                $gallery = DB::table('galleries')->get();
                $userCount = count($gallery);
                
                foreach ($gallery as $img) {
                    echo '<tr>';
                    echo '<td>' . $img->id . '</td>';
                    echo '<td>' . $img->img . '</td>';
                    echo '<td><a href="" class="btn btn-primary">Edit</a> | <a href=" ' . url('/gallery/delete/ ' . $img-> id).'" class="btn btn-danger">Delete</a></td>';
                    echo '</tr>';
                }
                echo'<tr><th  colspan="2">Total Number of Users : &nbsp;</th>';
                echo '<th>' . $userCount . '</th></tr>'; 
            @endphp -->
            @foreach($gallery as $img)
            <tr>
                <td>{{$img->id}}</td>
                <td>{{$img->img}}</td>
                <td><a href="" class="btn btn-primary">Edit</a> | <a href="/gallery/delete/{{$img->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </table>

            







        </div>
</div>





@endsection