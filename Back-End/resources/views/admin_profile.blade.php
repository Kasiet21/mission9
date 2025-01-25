@extends('master.db_master')

@section('dynblock')


<div  class="container mt-3">
<div class="row">
        <div class="col-sm-4"> 
                <h2>Sovisal Lim</h2>
                <p> control user package database</p>            
                 <img src="lake1.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
        </div>
        <div class="col-sm-8">
        <br>
            <br>
                    <h3 pagecloud-guid="f36727eb-7f0f-4056-ef08-b7a2bb91d277">
                    <b class="sliding">We Are Admin Team</b>
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
                        margin-left: 300px;
                    }
                    100% {
                        margin-left: 0%;
                    }
                    }
                    </style>
                    </h3>
            
            <hr>
            <br>
            <br>
            <br>

            
                 <p></p>
                 <p></p>
                 <p></p>
                 <p><a href="{{route('upload_packages')}}" >Upload Package</a></p>
                 <p><a href="tbl_package"  >Table Of Package</a></p>
                 <p></p>
                 <p></p>
                 <p></p>

        </div>
    </div> 
    
</div>

<div  class="container mt-3">
<div class="row">
        <div class="col-sm-4"> 
                <h2>Monin som</h2>
                <p> control Data User database</p>            
                <img src="lake2.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236">  
        </div>
        <div class="col-sm-8">
            <br>
            <br>
            <hr>
            <br>
            <br>
            <br>
            <br>
            
                 <p><a href="userhistory"  >Booking</a></p>
                
                 <p><a href="tbl_user_db"  >User</a></p>


        </div>
    </div> 
    
</div>
<div  class="container mt-3">
<div class="row">
            <div class="col-sm-4"> 
                <h2>Lyheng Long</h2>
                <p>control Message database</p>            
                <img src="background6.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236">  </div>
            <div class="col-sm-8">
            <br>
            <br>
            <hr>
            <br>
            <br>
            <br>
            
            
                 <p><a href="tbl_user_comment"  >User Comment</a></p>
      
            <br>
            <br>
            <hr>
        </div>
    </div> 
    
</div>

@stop