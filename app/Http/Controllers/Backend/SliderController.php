<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;
use App\Models\Backend\Multi;
use Image;
use File;

class SliderController extends Controller
{
    public function add(){
        return view("backend.Pages.slider.add");
    }
    public function store(Request $request){
          
        if($request->pic){
            $image = $request->file('pic');
            $customName = uniqid().".".$image->getClientOriginalExtension();
            $location = public_path('backend/slider/'.$customName);
            Image::make($image)->save($location);
        }
        $slider = new Slider;
        $slider->title = $request->title;
        $slider->category = $request->category;
        $slider->description =$request->textarea;
        $slider->link = $request->link;
        $slider->status = $request->status;
        $slider->pic = $customName; 
        $slider->save();
        return redirect()->route("manage");
    }
    public function editimage(Request $request, $id){
          $slider = Slider::find($id);
        if($request->pic){
            if(File::exists('backend/slider/'.$slider->pic)){
               File::delete('backend/slider/'.$slider->pic);
            $image = $request->file('pic');
            $customName = uniqid().".".$image->getClientOriginalExtension();
            $location = public_path('backend/slider/'.$customName);
            Image::make($image)->save($location);
            $slider->pic = $customName; 
            }
        }
        $slider->title = $request->title;
        $slider->category = $request->category;
        $slider->description =$request->textarea;
        $slider->link = $request->link;
        $slider->status = $request->status;
        $slider->update();
        return redirect()->route("manage");
    }
    public function manage(){
        $sliders = Slider::all();
        return view("backend.pages.slider.manage",compact("sliders"));
    }
    public function view($id){
        $soikot = Slider::find($id);
        $multi = Multi::where("s_id",$id)->get();
        return view("backend.pages.slider.view",compact("soikot","multi"));
    }
    public function edit($id){
        $soikot = Slider::find($id);
        $multi = Multi::where("s_id",$id)->get();
        return view("backend.pages.slider.edit",compact("soikot","multi"));
    }
    public function galery(){
        $sliders = Slider::all();
        return view("backend.pages.slider.galery",compact("sliders"));
    }
    public function imageStore(Request $request){
        if($request->pics){
            foreach($request->file("pics") as $images){
                $image = $images;  
                $customName = rand(000000,999999).".".$image->getClientOriginalExtension();
                $location = public_path('backend/slider/img/'.$customName);
                Image::make($image)->save($location);
                $multi = new Multi;
                $multi->s_id = $request->s_id;
                $multi->images=$customName;
                $multi->save();
            }
            return response()->json([
                "success"=>"ok"
            ]);
            //return redirect()->route("manage");
        }
    }
    public function delete($id){
        $slider = Slider::find($id);
        if(File::exists("backend/slider/".$slider->pic)){
           File::delete("backend/slider/".$slider->pic);
        }
        $image = Multi::where('s_id',$id)->get();
        foreach($image as $im){
            if(File::exists("backend/slider/img/".$im->images)){
                File::delete("backend/slider/img/".$im->images);
             }
             $multiimagetable = Multi::find($im->id);
             $multiimagetable->delete();
        }
        $slider->delete();
        return redirect()->route("manage");
    }
    public function deleteImg($id){
        $multi = Multi::find($id);
        if(File::exists("backend/slider/img/".$multi->images)){
            File::delete("backend/slider/img/".$multi->images);
         }
        $multi->delete();
        return back();
    }
     
}
