
<li class="nav-item">
    <a href="{{ route('home') }}"
       class="nav-link {{ Request::is('home*') ? 'active' : '' }}">
        <p>View Dashboard</p>
        <i class="fas fa-bars fa-pull-left fa-md "></i>
        <hr size="1" color="grey">
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('bookings.index') }}"
       class="nav-link {{ Request::is('bookings*') ? 'active' : '' }}">
        <p>Edit Bookings</p>
        <i class="fas fa-book fa-pull-left fa-md "></i>
        <hr size="1" color="grey">
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('buses.index') }}"
       class="nav-link {{ Request::is('buses*') ? 'active' : '' }}">
        <p>Edit Buses</p>
        <i class="fas fa-bus fa-pull-left fa-md "></i>
        <hr size="1" color="grey">
    </a>
</li>



<style>
   
   p{
       position: relative;
       font-size:15px;
       left: 10px;
       font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
       text-decoration: none;
     
   }
   i{
       margin-top:5px;
       margin-left: 5px;
      
   }

</style>


