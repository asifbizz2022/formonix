<!doctype html>
<html lang="en">

@include('layout.header_links') 
    <body data-sidebar="dark"> 
        <!-- Begin page -->
        <div id="layout-wrapper"> 
            @include('layout.header') 
            @include('layout.sidebar') 
            <div class="main-content"> 
                <div class="page-content">
                    <div class="container-fluid-no mt-0"> 
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h3 class="mb-sm-0 font-size-18 mt-1 text-uppercase">@yield('title', 'No Title')</h3> 
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0"> 
                                        <!-- <li class="breadcrumb-item active">@yield('title', 'No Title')</li> -->
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                        @yield('content') 
                    </div>  
                </div>  
                @include('layout.footer')
            </div> 

        </div>
       
      @include('layout.footer_links')
       <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
       </script> 
        @yield('js')

    </body>
</html>
