<!DOCTYPE html>
<html>

<head>
    @include("master.db_header")
</head>
<style>
    .abc{
        margin-top:23px;
        margin-right:20px;
    }
</style>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">

                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">

                <h1 class="m-0 text-primary" pagecloud-guid="f36727eb-7f0f-4056-ef08-b7a2bb91d277">
                <b class="sliding">  <span class="text-dark">Tour With</span></b>Me</h1>  
        
                    <style>
                    .sliding {
                        animation-duration: 8s;
                        animation-name: slidein;
                        animation-iteration-count: infinite;
                    }

                    @keyframes slidein {
                    0% {
                        margin-left: 0%;
                    }
                    50% {
                        margin-left: 100px;
                    }
                    100% {
                        margin-left: 0%;
                    }
                    }
                    </style>
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                       <div class="navbar-nav ml-auto py-0">
            
                            <div class="dropdown">
                                <div class= "abc">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    Data User
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li> <a href="/userhistory" class="nav-item nav-link" class="dropdown-item" >Booking</a></li>
                                    
                                    <li> <a href="/tbl_user_db" class="nav-item nav-link" class="dropdown-item" >User</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dropdown">
                                <div class= "abc">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    Message
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li> <a href="/tbl_user_comment" class="nav-item nav-link" class="dropdown-item" >User Comment</a></li>
                                
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <div class= "abc">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    Tour Package
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li> <a href="{{route('upload_packages')}}" class="nav-item nav-link" class="dropdown-item" >Upload Package</a></li>
                                    <li><a class="dropdown-item" href="tbl_package">Table Package</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="/admin_profile" class="nav-item nav-link">Admin</a>
                        </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->

    @yield('dynblock')

    <!-- end info_section -->
    
</body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>