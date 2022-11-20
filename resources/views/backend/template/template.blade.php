
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('backend.includes.head')
   @include('backend.includes.css')
    
  </head>

  <body>
  @include('backend.includes.left')
  @include('backend.includes.top')
  @include('backend.includes.right')


    @yield("content")


  @include('backend.includes.script')
  </body>
</html>
