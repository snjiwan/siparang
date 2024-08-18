@include('admin.layout.top')
<div class="container-fluid page -body-wrapper">

@include('admin.layout.sidebar')
<div class="main-panel">

<div class="content-wrapper">

@yield('content')

</div>
</div>

@include('admin.layout.footer')