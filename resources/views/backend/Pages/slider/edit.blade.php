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
              <div class="col-md-6">
                    <form action="{{Route('editimage',$soikot->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <input type="text" value="{{$soikot->title}}" name="title" placeholder="Enter slider title " class="form-control">
                        </div>
                        <div class="from-group">
                            <input type="text" value="{{$soikot->category}}" name="category" placeholder="Enter slider category " class="form-control mt-3">
                        </div>               
                        <div class="from-group">
                            <textarea class="form-control mt-3" name="textarea" rows="3" placeholder="Enter slider textarea ">{{$soikot->description}}</textarea>
                        </div>

                        <div class="from-group">
                            <img height="100px" src="{{asset('backend/slider/'.$soikot->pic)}}" alt="">
                        </div>

                        <div class="from-group">
                            <input type="file" value="{{$soikot->pic}}" name="pic" placeholder="Enter slider picture " class="form-control mt-3">
                        </div>
                        <div class="from-group">
                            <input type="text" value="{{$soikot->link}}" name="link" placeholder="Enter slider link " class="form-control mt-3">
                        </div>
                        <div class="from-group">
                        <select name="status" class="form-control mt-3">
                            <option value="">--------select status-------</option>
                            <option value="1" @if($soikot->status == 1) selected @endif >Active</option>
                            <option value="2" @if($soikot->status == 2) selected @endif >Inactive</option>
                        </select>
                        </div>
                        <button class="btn btn-success mt-3">Add slider</button>
                    </form>
              </div>
              <div class="col-md-6">
                    @foreach ($multi as $multi)
                        <div class="image" >
                            <img width="100px" height="100px"  src="{{asset('backend/slider/img/'.$multi->images)}}" alt="img">
                            <div class="action">
                                <a href="{{ route ('deleteImg',$multi->id )}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    @endforeach
                    <form id="formData" action="{{route('imageStore')}}" method="post" enctype="multipart/form-data">
                        @csrf       
                        <input type="hiden" class="form-control" name="s_id" value="{{ $soikot->id }}">                                    
                        <input class="form-control mt-3" type="file" name="pics[]" multiple>
                        <button class="btn btn-info btn-sm mt-3">Add</button>                        
                    </form>
              </div>

          </div>
       </div><!-- br-pagebody -->
@endsection