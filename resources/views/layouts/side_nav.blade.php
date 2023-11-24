 <!-- Sidebar -->


 <style>

     #accordionSidebar{
    background-color:blueviolet
    }

 </style>
 <ul class="navbar-nav naver  sidebar sidebar-dark accordion" id="accordionSidebar" >
    <div class="sidebar-brand-icon">
        <a href="#" class="navbar-brand"><img src="{{asset('images/logo.png')}}" alt="" class='img-thumbnail'>
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-computer"></i>
            <span>Blog</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Blog and News</h6>
                <a class="collapse-item" href="{{route('posts/view')}}">Posts</a>
                <a class="collapse-item" href="#">Categories</a>

            </div>
        </div>
    </li>

    <!-- Sidebar - Brand -->



    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{Route('posts/view')}}">
            <i class="fa fa-home"></i>
            <span>Home</span></a>
    </li> --}}

    <!-- Divider -->



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" ></button>
    </div>



</ul>
<!-- End of Sidebar -->
