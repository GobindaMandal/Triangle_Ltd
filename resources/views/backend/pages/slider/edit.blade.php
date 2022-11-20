@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Edit Slide</h4>
          <p class="mg-b-0">Edit All Data Here</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-7">
              <form action="{{ route('slider.editslider',$slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <input class="form-control" type="text" value="{{ $slider->title }}" name="title" placeholder="Enter Title">
              </div> 
              <div class="form-group">
                <input class="form-control" type="text" value="{{ $slider->category }}" name="category" placeholder="Enter Category">
              </div> 
              <div class="form-group">
                <textarea class="form-control"  type="text" name="description" placeholder="Enter Description">{{ $slider->description }}</textarea>
              </div> 
              <div class="form-group">
                <img height="100" width="150" src="{{ asset('backend/slider/'.$slider->pic) }}" alt="">
              </div>
              <div class="form-group">
                <input class="form-control" type="file" name="pic" >
              </div> 
              <div class="form-group">
                <input class="form-control" type="text" value="{{ $slider->link }}" name="link" placeholder="Enter Link">
              </div>
              <div class="form-group">
                <select name="status" class="form-control">
                  <option value="">-----Select Status-----</option>
                  <option value="1" @if($slider->status == 1) selected @endif>Active</option>
                  <option value="2" @if($slider->status == 2) selected @endif>Inactive</option>
                </select>
              </div>
              <button class="btn btn-info">Update Slider</button>
              </form>
          </div>
          <div class="col-md-5">
            @foreach($multi as $multi)
            <div class="image">
              <img src="{{ asset('backend/slider/images/'.$multi->images) }}" alt="">
              <div class="action">
                <a href="{{ Route('slider.deleteimage',$multi->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
              </div>
            </div>
            @endforeach
            <form id="formdata" action="{{ Route('slider.imagestore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" name="s_id" value="{{ $slider->id }}">
                <input class="form-control" type="file" name="pics[]" multiple>
                <button class="mt-2 btn btn-info">Add Image</button>
            </form>
          </div>
          <style>
            .image{
              margin: 15px;
              height: 200px;
              width: 300px;
              position: relative; 
            }
            .image img{
              width: 100%;
              height: 100%;
            }
            .image img:hover + .action{
              display: flex;
            }
            .image .action{
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              background: rgba(0,0,0,.5);
              display: none;
              justify-content: center;
              align-items: center;
            }
          </style>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection