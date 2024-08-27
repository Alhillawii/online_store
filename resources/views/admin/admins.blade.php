<!-- first start -->
@include('includs.first')
 <!-- first rnd -->


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
          {{-- First Start --}}
           @include('includs.sidebar')
          {{-- First End --}}

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
              @include('includs.nav')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                     
                      @include('includs.head')
    

                    <!-- Content Row -->
                    <div class="row">
                    @yield('content')
                     
                    <!-- Content Row -->
   
                </div>
                <!-- /.container-fluid -->
              
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
             @include('includs.fotter')
                    
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   
      


      
       

    


    {{-- Last Start --}}
    @include('includs.srcroll')
    {{-- Last End --}}

    {{-- Last Start --}}
    @include('includs.logout')
    {{-- Last End --}}
    
    {{-- Last Start --}}
    @include('includs.last')
    {{-- Last End --}}