@extends('frontend.admin.layoutadmin.adminlayout')
@section('admin-panel')

<link rel="stylesheet" href="{{asset('frontend/css/adminpanel/user-details.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<div class="admin_section">
        <div class="admin-container">
            <div class="user-details">
                <h1>User Details</h1>
                <form action="">
                <div class="fd">
                        <label class="lf" for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id:</label>
                        <input type="text" name="uid">
                    </div>
                    <div class="fd">
                        <label class="lf" for="">Username:</label>
                        <input type="text" name="uname">
                    </div>
                    <div class="fd">
                        <label class="lf" for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</label>
                        <input type="text" name="uemail">
                    </div>
                    <div class="fd">
                        <label class="lf" for="">&nbsp;&nbsp;&nbsp;&nbsp;Contact:</label>
                        <input type="text" name="ucontact">
                    </div>
                    <div class="fd">
                        <label class="lf" for="">&nbsp;&nbsp;Password:</label>
                        <input type="text" name="upassword">
                    </div>
                    <div class="btns">
                        <button class="btn-users">Add</button>
                        <!-- <button class="btn-users">Remove</button> -->
                    </div>
                </form>

            </div>

            <!-- for table  -->


            <!-- <table border="2px"  >
            <tr>
                <th >ID</th>
                <th >Username</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
    
    
            @php
                use Illuminate\Support\Facades\DB;
                $users = DB::table('users')->get();
                $userCount = count($users);
                
                foreach ($users as $user) {
                    echo '<tr>';
                    echo '<td>' . $user->id . '</td>';
                    echo '<td>' . $user->name . '</td>';
                    echo '<td>' . $user->email . '</td>';
                    echo '<td>' . $user->contact . '</td>';
                    echo '<td>' . $user->password . '</td>';
                  
                    echo '<td><a href="" class="btn btn-primary">Edit</a> | <a href="' . url('/userdelete/' . $user->id) . '" class="btn btn-danger">Delete</a></td>';
                    echo '</tr>';
                }
                echo'<tr><th  colspan="5">Total Number of Users : &nbsp;</th>';
                echo '<th>' . $userCount . '</th></tr>'; 
            @endphp
        </table> -->

        <table border="2px"  id="userTableBody">
            <tr class="bg-[url('/resources/background/background.png')]">
            <th >ID</th>
                <th >Username</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Password</th>
                <th>Action</th>
            </tr>

        @foreach($users as $img)
            <tr>
                <td>{{$img->id}}</td>
                <td>{{$img->name}}</td>
                <td>{{$img->email}}</td>
                <td>{{$img->contact}}</td>
                <td>{{$img->password}}</td>
                <td><a href="" class="btn btn-primary">Edit</a> | <a href="/user/delete/{{$img->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach






        </div>
</div>




@endsection