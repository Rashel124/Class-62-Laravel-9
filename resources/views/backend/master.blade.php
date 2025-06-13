<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
 
@include('backend.includes.style')
 </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      @include('backend.includes.navbar')
      <!--end::Header-->
      <!--begin::Sidebar-->
     @include('backend.includes.sidebar')
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
     @yield('content')
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      

      @include('backend.includes.footer')
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    
    @include('backend.includes.script')
  </body>
  <!--end::Body-->
</html>
