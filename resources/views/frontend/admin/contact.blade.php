@extends('frontend.admin.layoutadmin.adminlayout')
@section('admin-panel')

<link rel="stylesheet" href="{{asset('frontend/css/adminpanel/contact.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<div class="admin_section">
        <div class="admin-container">
            <div class="contact-details">
                <h1>Contact</h1>
                <form action="{{('/storecontact')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="contact-container">
                    <div class="division">
                
                        <div class="fd">
                            <label for="">Phone no:</label>
                            <input type="text" name="phone">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;Address:</label>
                            <input type="text" name="address">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;&nbsp;&nbsp;&nbsp;Email:</label>
                            <input type="text" name="email">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;Facebook:</label>
                            <input type="text" name="facebook">
                        </div>
                    </div>
                    <div class="division">
                    
                        <div class="fd">
                            <label for="">Instagram:</label>
                            <input type="text" name="instagram">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tiktok:</label>
                            <input type="text" name="tiktok">
                        </div>
                        <div class="fd">
                            <label for="">&nbsp;&nbsp;&nbsp;Twitter:</label>
                            <input type="text" name="twitter">
                        </div>
                    </div>
                    
                    
                    </div>
                    <button class="btn-contact">Change</button>
                    <!-- <button class="btn-contact">Update</button> -->
                    <!-- <button class="btn-gallery">Remove</button> -->
                </form>
            </div>
        </div>
</div>
<div class="query-section">
    <p class="p-query">Querry of customers</p>




    <!-- for table  -->


    <table border="2px"  >
            <tr>
                <th >ID</th>
                <th >Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Instagram</th>
                <th>Tiktok</th>
                <th>Twitter</th>
                <th>Action</th>
            </tr>
    
    
            @php
                use Illuminate\Support\Facades\DB;
                $contacts = DB::table('contacts')->get();
                $userCount = count($contacts);
                
                foreach ($contacts as $contact) {
                    echo '<tr>';
                    echo '<td>' . $contact->id . '</td>';
                    echo '<td>' . $contact->phone . '</td>';
                    echo '<td>' . $contact->address . '</td>';
                    echo '<td>' . $contact->email . '</td>';
                    echo '<td>' . $contact->facebook . '</td>';
                    echo '<td>' . $contact->instagram . '</td>';
                    echo '<td>' . $contact->tiktok . '</td>';
                    echo '<td>' . $contact->twitter . '</td>';
                  
                    echo '<td><a href="" class="btn btn-primary">Edit</a> | <a href="" class="btn btn-danger">Delete</a></td>';
                    echo '</tr>';
                }
                echo'<tr><th  colspan="8">Total Number of Users : &nbsp;</th>';
                echo '<th>' . $userCount . '</th></tr>'; 
            @endphp
        </table>


</div>


@endsection