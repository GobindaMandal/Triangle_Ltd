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
        return view("backend.pages.slider.add");
    }
    public function store(Request $request){
        if($request->pic){
            $image = $request->file("pic");
            $customName = rand().".".$image->getClientOriginalExtension();
            $location = public_path("backend/slider/".$customName);
            Image::make($image)->save($location);
        }
        $slider = new Slider;
        $slider->title = $request->title;
        $slider->category = $request->category;
        $slider->description = $request->description;
        $slider->link = $request->link;
        $slider->status = $request->status;
        $slider->pic = $customName;
        $slider->save();

        return redirect()->route("slider.manage");

    }
    public function editslider(Request $request, $id){
        $slider = Slider::find($id);
        if($request->pic){
            if(File::exists('backend/slider/'.$slider->pic)){
                File::delete('backend/slider/'.$slider->pic);
            }   
            $image = $request->file("pic");
            $customName = rand().".".$image->getClientOriginalExtension();
            $location = public_path("backend/slider/".$customName);
            Image::make($image)->save($location);   
            $slider->pic = $customName;     
        }
        $slider->title = $request->title;
        $slider->category = $request->category;
        $slider->description = $request->description;
        $slider->link = $request->link;
        $slider->status = $request->status;
        $slider->update();
        return redirect()->route("slider.manage");

    }
    public function manage(){
        $sliders = Slider::all();
        return view("backend.pages.slider.manage", compact("sliders"));
    }

    public function images(){
        $sliders = Slider::all();
        return view("backend.pages.slider.gallery", compact("sliders"));
    }

    public function delete($id){
        
        $slider = Slider::find($id);
        if(File::exists("backend/slider/".$slider->pic)){
            File::delete("backend/slider/".$slider->pic);
        }
        $slider->delete();
        return redirect()->route("slider.manage");
    }
    public function view($id){
        $slider = Slider::find($id);
        $multi = Multi::Where("s_id", $id)->get();
        return view("backend.pages.slider.view", compact("slider","multi"));
    }
    public function deleteimage($id){
        $multi = Multi::find($id);
        $multi->delete();
        return back();
    }
    public function edit($id){
        $slider = Slider::find($id);
        $multi = Multi::Where("s_id", $id)->get();
        return view("backend.pages.slider.edit", compact("slider","multi"));
    }
    public function imagestore(Request $request){
        if($request->pics){

            foreach($request->file("pics") as $images){
                $image = $images;
                $customName = rand().".".$image->getClientOriginalExtension();
                $location = public_path("backend/slider/images/".$customName);
                Image::make($image)->save($location);

                $multi = new Multi;
                $multi->s_id=$request->s_id;
                $multi->images = $customName;
                $multi->save();
            }

            return redirect()->route("slider.manage");

        }
    }
   
}
