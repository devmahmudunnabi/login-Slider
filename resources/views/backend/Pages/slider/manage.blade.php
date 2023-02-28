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
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach($sliders as $slider)
                        <tr>
                            <td>{{$slider->title}}</td>
                            <td>{{$slider->category}}</td>
                            <td>{{$slider->description}}</td>
                            <td><img height="100" src="{{asset('backend/slider/'.$slider->pic)}}" alt="image"></td>
                            <td>
                                <a href="{{Route('edit',$slider->id)}}" class="btn btn-success btn-sm" btn-sm><i class="fas fa-edit"></i></a>
                                <a href="{{Route('view',$slider->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="{{Route('delete',$slider->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
      </div><!-- br-pagebody -->
@endsection