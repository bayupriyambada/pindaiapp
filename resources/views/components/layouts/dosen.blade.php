<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" href="{{  asset('assets/img/favicon/favicon.ico')}}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com')}}" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet"
        />
    
        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css')}}" />
    
        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}" />
    
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    
        <!-- Page CSS -->
    
        <!-- Helpers -->
        <script src="{{ asset('assets/vendor/js/helpers.js')}}"></script>
        {{-- jquery min --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('assets/js/config.js')}}"></script>

        <title>@yield('title') - {{ config('app.name') }} </title>
        @livewireStyles()

    </head>
    <body>

        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                @include('components.dosen.inc.aside')
        
                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
        
                    @include('components.dosen.inc.header')
        
                    <!-- / Navbar -->
        
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
        
                        <div class="container-xxl flex-grow-1 container-p-y">
                            {{ $slot }}
                        
                            
                        </div>
                        <!-- / Content -->
        
                        
                        {{-- <div class="content-backdrop fade"></div> --}}
                    </div>
                    @include('components.dosen.inc.footer')
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
        
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>

        <script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
        <script src="{{ asset('assets/vendor/libs/popper/popper.js')}}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js')}}"></script>
        <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    
        <script src="{{ asset('assets/vendor/js/menu.js')}}"></script>
        <!-- endbuild -->
    
        <!-- Vendors JS -->
        <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    
        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
    
        <!-- Page JS -->
        <script src="{{ asset('assets/js/dashboards-analytics.js')}}"></script>
    
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        @livewireScripts()
        @stack('js')

       
    </body>
</html>
