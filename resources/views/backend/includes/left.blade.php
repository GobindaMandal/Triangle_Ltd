
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="{{ route('dashboard') }}"><span>[</span>Triangle <i>Ltd.</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <ul class="br-sideleft-menu">
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Slider</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
            <li class="sub-item"><a href="{{ route('slider.add') }}" class="sub-link">Add Slider</a></li>
            <li class="sub-item"><a href="{{ route('slider.manage') }}" class="sub-link">Manage Slider</a></li>
            <li class="sub-item"><a href="{{ route('slider.images') }}" class="sub-link">Add Images</a></li>
          </ul>
        </li><!-- br-menu-item -->
      </ul><!-- br-sideleft-menu -->

    
      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->