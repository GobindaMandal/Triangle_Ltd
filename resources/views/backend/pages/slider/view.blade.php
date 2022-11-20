@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>View</h4>
          <p class="mg-b-0">View All Data</p>
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
                        <th>Link</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->category }}</td>
                        <td>{{ $slider->description }}</td>
                        <td>{{ $slider->link }}</td>
                        <td>{{ $slider->status }}</td>
                    </tr>
                </table> 
            </div> 
            <div class="col-md-3 ">
                <img class="w-100" src="{{ asset('backend/slider/'.$slider->pic) }}" alt="">
            </div> 
            @foreach($multi as $multi)
            <div class="row">
                <div class="col-md-12">
                    <img class="w-100" src="{{ asset('backend/slider/images/'.$multi->images) }}" alt="majid">
                </div>
            </div>
            @endforeach

        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection