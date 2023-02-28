@extends('backend.masterTemplate.masterTemplate')
@section('allcontent')
        <div class="br-pagetitle">
            <i class="icon ion-ios-home-outline"></i>
            <div>
            <h4>Dashboard</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
            </div>
        </div>
    
       <div class="br-pagebody">
       
          <div class="row">
             <form action="{{Route('store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="from-group">
                    <input type="text" name="title" placeholder="Enter slider title " class="form-control">
                </div>
                 <div class="from-group">
                    <input type="text" name="category" placeholder="Enter slider category " class="form-control mt-3">
                </div>
                <!-- <div class="from-group">
                    <input type="text" name="description" placeholder="Enter slider description " class="form-control mt-3">
                </div> -->
                <div class="from-group">
                    <textarea class="form-control mt-3" name="textarea" rows="3" placeholder="Enter slider textarea "></textarea>
                </div>
                 <div class="from-group">
                    <input type="file" name="pic" placeholder="Enter slider picture " class="form-control mt-3">
                </div>
                <div class="from-group">
                    <input type="text" name="link" placeholder="Enter slider link " class="form-control mt-3">
                </div>
                <div class="from-group">
                   <select name="status" class="form-control mt-3">
                     <option value="">--------select status-------</option>
                     <option value="1">Active</option>
                     <option value="2">Inactive</option>
                   </select>
                </div>
                <button class="btn btn-success mt-3">Add slider</button>
             </form>
          </div>
       </div><!-- br-pagebody -->
@endsection