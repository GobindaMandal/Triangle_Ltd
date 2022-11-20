@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Slider</h4>
          <p class="mg-b-0">Add Slider for All Category</p>
        </div>
      </div>
      <div class="br-pagebody">
        <div class="row">
            <div class="col-md-6 offset-md-3">
              <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <input class="form-control" type="text" name="title" placeholder="Enter Title">
              </div> 
              <div class="form-group">
                <input class="form-control" type="text" name="category" placeholder="Enter Category">
              </div> 
              <div class="form-group">
                <textarea class="form-control"  type="text" name="description" placeholder="Enter Description"></textarea>
              </div> 
              <div class="form-group">
                <input class="form-control" type="file" name="pic" >
              </div> 
              <div class="form-group">
                <input class="form-control" type="file" name="link" placeholder="Upload">
              </div>
              <div class="form-group">
                <select name="status" class="form-control">
                  <option value="">-----Select Status-----</option>
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
              </div>
              <button class="btn btn-info">Add Slider</button>
              </form>
            </div>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection