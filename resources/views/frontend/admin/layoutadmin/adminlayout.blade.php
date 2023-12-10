<body>
    <link rel="stylesheet" href="{{url('frontend/css/adminpanel/adminlayout.css')}}">



    <div class="dashboard-container">
        <!-- background image  -->
         <div class="background_img">
            <img class="bg_img" src="img/background_img.png" alt="image">
        </div>


        <!-- dashboard -->
        <div class="dashboard">
            <div class="logo-img">
                <img src="img/logo.png" alt="img">
            </div>
            <button class="d-btn" id="h-detail">Hotel Detail</button>
            <button class="d-btn" id="u-detail">User Detail</button>
            <button class="d-btn" id="h-gallery">Gallery</button>
            <button class="d-btn" id="h-package">Package</button>
            <button class="d-btn" id="h-contact">Contact</button>
            <button class="d-btn" id="h-rooms">Rooms</button>
            <button class="d-btn" id="h-booked">Booked</button>
            <div class="logoutt">
            <a  id="btn-logout" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="bi bi-power"></i><span class="logut">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
            </div>
            
        </div>
        <div class="edit-container">
            @yield('admin-panel')
        </div>
    </div>


    
</body>

<script>

    // for calling the pages 

        document.getElementById("h-detail").addEventListener("click", function() {
            // Redirect to the new page
            window.location.href = "/adminhotel"; 
        });
        document.getElementById("u-detail").addEventListener("click", function() {
            // Redirect to the new page
            window.location.href = "/adminuser"; // 
        });
        document.getElementById("h-gallery").addEventListener("click", function() {
            // Redirect to the new page
            window.location.href = "/admingallery"; // 
        });
        document.getElementById("h-package").addEventListener("click", function() {
            // Redirect to the new page
            window.location.href = "adminpackage"; // 
        });
        document.getElementById("h-contact").addEventListener("click", function() {
            // Redirect to the new page
            window.location.href = "admincontact"; 
        });
        document.getElementById("h-rooms").addEventListener("click", function() {
            // Redirect to the new page
            window.location.href = "adminrooms"; // Replace with the URL of the desired page
        });
        document.getElementById("h-booked").addEventListener("click", function() {
            // Redirect to the new page
            window.location.href = "adminbooked"; // Replace with the URL of the desired page
        });



</script>