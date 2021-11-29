<!DOCTYPE html>
<html lang="en">
   <head>
   @include('admin.section.assets')
   </head>
   <body class="inner_page icons_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            @include('admin.section.sidebar')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               @include('utils.notif')
               <!-- topbar -->
               @include('admin.section.header')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  @yield('content')
                  <!-- footer -->
                  @include('admin.section.footer')
               <!-- end dashboard inner -->
               </div>
         </div>
         <!-- model popup -->
         <!-- The Modal -->
         <div class="modal fade" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Modal Heading</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     Modal body..
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>

         <!-- end model popup -->
      </div>
      <!-- jQuery -->
      @include('admin.section.js')
   </body>
</html>