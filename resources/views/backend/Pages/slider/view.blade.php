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
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>{{$soikot->title}}</td>
                    <td>{{$soikot->category}}</td>
                    <td>{{$soikot->description}}</td>
                    <td>{{$soikot->link}}</td>
                </tr>
            </table>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img width="100px" height="100px" src="{{asset('backend/slider/'.$soikot->pic)}}" alt="img">
                </div>
                <div class="col-md-10">
                    @foreach($multi as $multi)
                    <img width="100px" height="100px" src="{{asset('backend/slider/img/'.$multi->images)}}" alt="img">
                    @endforeach
                </div>
            </div>
       </div>
        
        
    </div><!-- br-pagebody -->
@endsection