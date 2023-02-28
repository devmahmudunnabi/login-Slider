
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Signin Page</title>

    <!-- vendor css -->
    <link href="{{asset('backend')}}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.css">
    <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.simple-white.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
      <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="{{asset('backend')}}/videos/video1.mp4" type="video/mp4">
        <source src="{{asset('backend')}}/videos/video1.ogv" type="video/ogg">
        <source src="{{asset('backend')}}/videos/video1.webm" type="video/webm">
      </video><!-- /video -->
      <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span>Sign <span class="tx-info">UP</span> <span class="tx-normal">]</span></div>
          <div class="tx-white-5 tx-center mg-b-60">All user signin heare</div>

          @if($errors->any())
             @foreach($errors->all() as $error)
             <div class="alert alert-danger">{{$error}}</div>
             @endforeach
            @endif
       
          <form method="POST" action="{{ route('register') }}">
              @csrf

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input id="name" class="form-control" name="name" value="{{old('name')}}" required autofocus autocomplete="name" placeholder="ENTER USER NAME">
                </div>
            </div>
            <!-- User_Name -->
            
            <div class="form-group mb-3 row">
              <div class="col-12">
                  <input id="email" class="form-control" type="email" name="email" :value="{{old('email')}}" required autocomplete  placeholder="ENTER USER EMAIL">
              </div>
          </div>
          <!-- Email Address -->
           <div class="form-group mb-3 row">
                    <div class="col-12">
                        <input id="password" class="form-control" type="password" name="password" required autocomplete  placeholder="ENTER USER PASSWORD"/>
                    </div>
                </div>

                <!-- Password -->

                
                <div class="form-group mb-3 row">
                  <div class="col-12">
                      <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete  placeholder="confirm password"/>
                  </div>
                </div>
              <!-- Confirm Password -->     
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row mt-3 pt-1">
                            <div class="col-12">
                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </div>

                        <div class="form-group mt-2 mb-0 row">
                            <div class="col-12 mt-3 text-center">
                                <a href="{{route('login')}}" class="text-muted">Already have account?</a>
                            </div>
                        </div>
                    </form>
                    <a href="{{Route('gotoGoogle')}}" class="btn btn-info"><i class="fab fa-google"></i></a>
                    <a href="" class="btn btn-info"><i class="fab fa-facebook-square"></i></a>
                    <a href="" class="btn btn-info"><i class="fab fa-github"></i></a>
                    <a href="" class="btn btn-info"><i class="fab fa-linkedin-in"></i></a>
                    <a href="" class="btn btn-info"><i class="fab fa-twitter"></i></a>
                    <a href="" class="btn btn-info"><i class="fab fa-instagram-square"></i></a>

        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
    </div><!-- d-flex -->

    <script src="{{asset('backend')}}/lib/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{asset('backend')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      $(function(){
        'use strict';

        // Check if video can play, and play it
        var video = document.getElementById('headVideo');
        video.addEventListener('canplay', function() {
          video.play();
        });

      });
    </script>

  </body>
</html>
