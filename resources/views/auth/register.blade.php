<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>

    @include('layouts.css')
</head>

<body>

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">

        <div class="card" style="box-shadow: 0 0 4rem 0;
    margin-top: 40px; width: 280px;">

            <h4 class="card-header">
                {{--                <img class="logo_img" style="width: 212px;" src="{{asset('custom/images/logo2.png')}}" alt="">--}}

            </h4>

            <div class="card-body">

                <form  class="register-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope-open-o"
                                                                          aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="name"
                                           data-error="Input valid name" required="">
                                </div>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope-open-o"
                                                                          aria-hidden="true"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="email"
                                           data-error="Input valid email" required="">
                                </div>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-unlock"
                                                                          aria-hidden="true"></i></span>
                                    </div>
                                    <input type="password"  name="password"
                                           class="form-control" required="">
                                </div>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                        </div>
                    </div>


                    <div class="checkbox checkbox-primary">
                        <input id="checkbox_remember" type="checkbox" name="remember">
                        <label for="checkbox_remember"> Remember me</label>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register" id="btn">
                        </div>
                    </div>
                </form>

                {{--                <div class="clear"></div>--}}

                {{--                <i class="fa fa-user fa-fw"></i> No account yet? <a href="register-page.html">Register new--}}
                {{--                    account</a><br>--}}
                {{--                <i class="fa fa-undo fa-fw"></i> Forgot password? <a href="#">Reset password</a>--}}

            </div>

        </div>

    </div>
</div>

@include('layouts.js')
@section('script')
    <script>
        function successMsg(_msg){
            window.toastr.success(_msg);
        }

        function errorMsg(_msg){
            window.toastr.error(_msg);
        }

        function warningMsg(_msg){
            window.toastr.warning(_msg);
        }
    </script>
@endsection
<script>
    $('.register-form').on('submit',function (e){
        e.preventDefault();
        let data = $(this).serialize();

        // console.log(data);


        blockUi();
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'{{route('registered')}}',
            data:data,
            success:function(data) {
                $.unblockUI();
                if(data.status == 1){
                    window.toastr.success(data.message);
                    window.location.href = data.url;

                }
                if(data.status == 0){
                    console.log(data);
                    window.toastr.error(data.message);
                    // errorMsg();
                }
            },
            error:function(data) {
                console.log('error');
                $.unblockUI();

            }

        });

    });

</script>

</body>
</html>
