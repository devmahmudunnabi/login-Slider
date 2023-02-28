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
            <form action="{{route('imageStore')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <select name="s_id" class="form-control">
                <option value="">-------select slider--------</option>

                     @foreach($sliders as $slider)
                    <option value="{{$slider->id}}">{{$slider->title}}</option>
                    @endforeach
                </select> 
                <input class="form-control mt-3" type="file" name="pics[]" multiple>
                <button class="btn btn-info btn-sm mt-3">Add</button>
                
            </form>
        </div>
      </div><!-- br-pagebody -->
@endsection