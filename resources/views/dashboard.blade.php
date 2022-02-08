<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard || RSVP</title>
    <link rel="stylesheet" href="{{asset('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
    <body>



        <div class="container p-3">
           
                <div class="row p-3">
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
                            <h2 class="pt-1"><b>Welcome Hi, {{$name}}</b></h2>
                            <h5 class="p-1"><b> Your invitation Opening Successfully</b></h5>
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

                        <div class="col-lg-12 col-sm-12 row">
                            <p><b> Please Update Flowing Information</b></p>
                            <div class="row">
                                <div class="col-4">You Status </div>
                                <div class="col-8">
                                    <p>: {{$details->status}}</p>
                                </div>  
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-4">Contact Number </div>
                            <div class="col-4">
                            <p>: {{$details->contact_number}}</p> 
                            </div>
                        
                        </div>

                        <div class="row p-1">
                            <div class="col-3">E-mail </div>
                            <div class="col-6">
                            <p>: {{$details->email}}</p> 
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 row">

                        <div class="pe-2 ps-2" id="of-info">
                            <hr style="border: 2px solid;">
                        </div>
                    
                        
                        <div class="col-lg-12 col-sm-12 row">
                            <p><b> Other's Flowing Information</b></p>
                            <div class="row">
                                <div class="col-6 row">
                                    <div class="col-6"> Wife Name</div>
                                </div>
                                <div class="col-6">
                                    <p>: {{$details->wife}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 row">
                                    <div class="col-12"> Wife Status</div>
                                </div>
                                <div class="col-6">
                                    <p>: {{$details->wife_status}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 row">
                                    <div class="col-6"> Son Name</div>
                                </div>
                                <div class="col-6">
                                    <p>: {{$details->son_name}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 row">
                                    <div class="col-12"> Son Status</div>
                                </div>
                                <div class="col-6">
                                    <p>: {{$details->son_status}}</p>
                                </div>
                            </div>

                           
                        </div>
                        
                        
                    </div>



                    <div class="col-12 p-2 justify-content-center">
                        <div class="row p-5">

                            <a href="/login" class="btn btn-secondary w-25 me-5"><b>Back to Login</b></a>
                        </div>
                    </div>
                    <div class="col-12 text-center p-4"><span>Contact 0123943</span></div>
                    
                </div>
            
        </div>

        


          
          



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('app/js/script.js')}}"></script>
        <script src="{{asset('app/js/bootstrap.min.js')}}"></script>
    </body>
</html>