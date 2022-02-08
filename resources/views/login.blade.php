<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || RSVP</title>
    <link rel="stylesheet" href="{{asset('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
    <body>



        <div id="app">
            <div class="container height-100 d-flex justify-content-center align-items-center">
                <div class="position-relative">
                    <form action="/login" method="post">
                        @csrf
                        <h1 class="text-center fw-bold">RSVP</h1>
                        <h5 class="text-center fw-bold">Confirm your participation</h5>
                        <div class=" text-center" style="background-color: #ffb4b5;padding: 7.3rem;">
                        @if(Session::has('message'))
                        <p class="alert alert-danger">{{ Session::get('message') }}</p>
                        @endif
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> 
                           
                                <input class="m-2 text-center form-control" name="input1" type="text" id="input1" v-on:keyup="inputenter(1)" maxlength="1" />
                                <input class="m-2 text-center form-control" name="input2" v-on:keyup="inputenter(2)" type="text" id="input2" maxlength="1" />
                                <input class="m-2 text-center form-control" name="input3" v-on:keyup="inputenter(3)" type="text" id="input3" maxlength="1" /> 
                                <input class="m-2 text-center form-control" name="input4" v-on:keyup="inputenter(4)" type="text" id="input4" maxlength="1" /> </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-secondary px-4 validate"><b> Login</b></button> </div>
                            <div class="mt-3 content d-flex justify-content-center align-items-center">
                        </div>
                    </form>
                </div>
                <h3 class="text-center" style="margin-top: 5.2rem;">#NRBM</h3>

            </div>
        </div>


          
          



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('app/js/script.js')}}"></script>
        <script src="{{asset('app/js/bootstrap.min.js')}}"></script>
    </body>
</html>