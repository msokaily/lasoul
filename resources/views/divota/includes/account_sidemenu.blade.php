<ul class="profile-link">
    <li class="{{ request()->routeIs('profile') ? 'active' : '' }}"><a class="font-news-bold" href="{{route('profile')}}">My Account</a></li>
    <li class="{{ request()->routeIs('bookings') ? 'active' : '' }}"> <a class="font-news-bold" href="{{route('bookings')}}"> My Bookings</a></li>
    <li class="{{ request()->routeIs('changepass') ? 'active' : '' }}"> <a class="font-news-bold" href="{{route('changepass')}}">Change Password</a></li>
    <li class="logout"><a class="font-news-bold" href="{{route('logout')}}">Logout</a></li>
</ul>