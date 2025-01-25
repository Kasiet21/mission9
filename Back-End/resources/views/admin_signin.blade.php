@extends('master.db_master')

@section('dynblock')
<body>

    </body><div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Admin Sign In</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Admin Sign In</p>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid py-6 ">
            <div class="d-flex align-items-center justify-content-center" style="min-height: 30vh; margin-top: 50px;">
                <div class="form-container">
                    <h3 class="title">Admin Sign In</h3>
                    <form class="form-horizontal" method="Post" action="/admin_signin">
                        @csrf
                        <div class="form-group">
                            <input name="Email" type="email" class="form-control" placeholder="E-mail">
                        </div>

                        <div class="form-group">
                            <input name="Password" type="text" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default"> <a href=""> Log In</a> </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
@stop