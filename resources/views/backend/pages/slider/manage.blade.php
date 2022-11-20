@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Sliders</h4>
          <p class="mg-b-0">Manage All Sliders Here</p>
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
                        <td>
                            <img height="100" src="{{ asset('backend/slider/'.$slider->pic) }}" alt="">
                        </td>
                        <th>
                            <a href="{{ Route('slider.edit',$slider->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="{{ Route('slider.view',$slider->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ Route('slider.delete',$slider->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection