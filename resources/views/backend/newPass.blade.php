
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
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span>Set new <span class="tx-info">password</span> <span class="tx-normal">]</span></div>
          <div class="tx-white-5 tx-center mg-b-60">All user signin heare</div>
       
          <form action="{{Route('updatepass',$email)}}" method="post">
            @csrf               
                <div class="form-group">
                    <input name="password" type="password" class="form-control fc-outline-dark" placeholder="Enter your password">
                 </div>
                 <div class="form-group">
                    <input name="cpassword" type="password" class="form-control fc-outline-dark" placeholder="Enter your Confirm password">
                 </div>                         
                <!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">Sign In</button>
          </form>
          <div class="mg-t-60 tx-center">Not yet a member? <a href="{{Route('register')}}" class="tx-info">Sign Up</a></div>
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
