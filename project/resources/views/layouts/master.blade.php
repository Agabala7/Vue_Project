<!DOCTYPE html>
<html lang="en">
<body>
    @include('layouts.head')
    @yield('addcss')
</body>
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    
    @include('layouts.nav')
    @include('layouts.header')

    <main id="main-container">
        @yield('content')
    </main>

    @include('layouts.footer')
    @include('layouts.js')

    @yield('addjs')

</div>
</html>