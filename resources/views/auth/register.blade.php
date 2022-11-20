
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Signup Page</title>

    <!-- vendor css -->
    <link href="{{ asset('backend') }}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Sign <span class="tx-info">Up</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">Sign Up All User Here</div>
     
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf

        <!-- Name -->
        <div>
          <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" autofocus placeholder="Enter Your Name"/>
        </div>

        <!-- Email Address -->
        <div class="mt-3">
          <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Enter Your Email"/>
        </div>
   
        <!-- Role -->
        <div class="mt-3">
          <x-input id="role" class="form-control" type="text" name="role" :value="old('role')" autofocus placeholder="Enter Your Role"/>
        </div>

        <!-- Phone Number -->
        <div class="mt-3">
          <x-input id="phone" class="form-control" type="number" name="phone" :value="old('phone')" placeholder="Enter Your Phone Number"/>
        </div>

        <!-- Password -->
        <div class="mt-3">
          <x-input id="password" class="form-control"
                            type="password"
                            name="password" 
                            autocomplete="new-password" 
                            placeholder="Enter Your Password"/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-3">
          <x-input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" 
                            placeholder="Confirm Password"/>
        </div>

        <div class="flex items-center justify-end mt-3">
          <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
              {{ __('Already registered?') }}
          </a>

          <x-button class="ml-4">
              {{ __('Register') }}
          </x-button>
        </div>
        </form>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{ asset('backend') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{ asset('backend') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
