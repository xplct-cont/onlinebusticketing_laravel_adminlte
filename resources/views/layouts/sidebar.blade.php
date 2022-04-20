<aside class="main-sidebar sidebar-light-info elevation-2">
    <a href="#" class="brand-link">
        <img src="{{url('/images/iconbus.png')}}"
             alt="{{ config('app.name') }} Logo" 
             class="brand-image img-circle elevation-3 bg-info p-1 ">
        <span class="brand-text font-weight-light">Online Bus Ticketing</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>





