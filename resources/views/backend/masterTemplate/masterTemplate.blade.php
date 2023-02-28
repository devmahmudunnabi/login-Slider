<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.includes.css')
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('backend.includes.left')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('backend.includes.head')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    @include('backend.includes.right')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
     
      @yield('allcontent')  
      
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

      @include('backend.includes.script')
  </body>
</html>
