<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update || RSVP</title>
    <link rel="stylesheet" href="{{asset('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
    <body>



        <div class="container p-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/profile-post" method="post">
                @csrf
                <div class="row p-3 justify-content-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="card profile-card">
                            <div>
                                <span class="fa fa-star" style="color: #480000;font-size: 90px;position:relative;"></span>
                                <span class="text-light" style="font-size:20px;position:absolute;font-size: 20px; position: absolute;margin-left: -75px;margin-top: 32px;">Image</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="p-2">
                            <h2 class="pt-1"><b> Hi, {{$name}}</b></h2>
                            <h5 class="p-1"><b> You are invite to our opening</b></h5>
                            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Opening- 20.12.11-8.30 a.m</h6>
                            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Workshop- 21.12.11-8.30 a.m</h6>
                            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dinner- 20.12.11-8.30 p.m</h6>
                        </div>
                    </div>
                </div>
                <div class="pe-2 ps-2">
                    <hr style="border: 2px solid;">
                </div>
                
                <div class="row">

                    <div class="col-lg-6 col-sm-6 row">
                        <p><b> Please Update Flowing Information</b></p>
                    <div class="row justify-content-center">
                        <div class="col-5">You</div>
                        <div class="col-7 row">
                            <div class="col-6">
                                    <p>Participation</p>
                                    <div class="form-check">
                                        <input class="form-check-input" name="your_status" type="checkbox" value="participation" id="flexCheckDefault">
                                    </div>
                            </div>
                            <div class="col-6">
                                <p>Vaccination</p>
                                <div class="form-check">
                                    <input class="form-check-input" name="your_status" type="checkbox" value="vaccination" id="flexCheckDefault">
                                </div>
                        </div>

                        
                            
                            
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-6">Contact Number</div>
                        <div class="col-6">
                            <input type="text" name="your_contact_number" class="form-control">
                        </div>
                        
                        </div>
                        <div class="row p-1">
                            <div class="col-6">E-mail</div>
                            <div class="col-6">
                                <input type="email" name="your_mail" class="form-control">
                            </div>
                            
                        </div>
                    
                    </div>

                    <div class="pe-2 ps-2" id="of-info">
                        <hr style="border: 2px solid;">
                    </div>
                    
                    <div class="col-lg-6 col-sm-6 row">
                        <p><b> Other's Flowing Information</b></p>
                        <div class="row justify-content-center">
                            <div class="col-6 row p-2">
                                <div class="col-2"><br><br> Wife</div>
                                <div class="col-10">
                                    <p>Enter Name</p>
                                    <input type="text" name="wife_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-6 row">
                                <div class="col-6">
                                    <p>Participation</p>
                                    <div class="form-check">
                                        <input class="form-check-input" name="wife_status" type="checkbox" value="participatiion" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="col-6">
                                <p>Vaccination</p>
                                <div class="form-check">
                                    <input class="form-check-input" name="wife_status" type="checkbox" value="vaccinatiion" id="flexCheckDefault">
                                </div>
                            </div>
    
                            
                                
                            
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 row">
                                <div class="col-2">Son</div>
                                <div class="col-10">
                                    <input type="text"  name="son_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-6 row">
                                <div class="col-6">
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" name="son_status" type="checkbox" value="participation" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="col-6">
                                
                                <div class="form-check">
                                    <input class="form-check-input" name="son_status" type="checkbox" value="vaccination" id="flexCheckDefault">
                                </div>
                            </div>
    
                            
                                
                            
                            </div>
                        </div>
                        
                        
                    </div>



                    <div class="col-12 p-2 justify-content-center">
                        <div class="row p-5">

                            <button type="submit" class="btn btn-secondary w-25 me-5"><b>Save</b></button>
                            <a href="logout" class="btn btn-dark w-25"><b>Exit</b></a>
                        </div>
                    </div>
                    <div class="col-12 text-center p-4"><span>Contact 0123943</span></div>
                    
                </div>
            </form>
            
        </div>

        


          
          



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('app/js/script.js')}}"></script>
        <script src="{{asset('app/js/bootstrap.min.js')}}"></script>
    </body>
</html>