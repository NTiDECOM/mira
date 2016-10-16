<!-- top navbar-->
<header class="topnavbar-wrapper">
   <!-- START Top Navbar-->
   <nav role="navigation" class="navbar topnavbar">
      <!-- START navbar header-->
      <div class="navbar-header">
         <a href="#/" class="navbar-brand">
            <div class="brand-logo">
               <img src="/img/logo.png" alt="App Logo" class="img-responsive">
            </div>
            <div class="brand-logo-collapsed">
               <img src="/img/logo-single.png" alt="App Logo" class="img-responsive">
            </div>
         </a>
      </div>
      <!-- END navbar header-->
      <!-- START Nav wrapper-->
      <div class="nav-wrapper">
         <!-- START Left navbar-->
         <ul class="nav navbar-nav">
            <li>
               <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
               <a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
                  <em class="fa fa-navicon"></em>
               </a>
               <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
               <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                  <em class="fa fa-navicon"></em>
               </a>
            </li>
         </ul>
         <!-- END Left navbar-->
         <!-- START Right Navbar-->
         <!-- Right Side Of Navbar -->
         <ul class="nav navbar-nav navbar-right">
             <!-- Authentication Links -->
             @if (Auth::guest())
                 <li><a href="{{ url('/login') }}">Login</a></li>
                 <li><a href="{{ url('/register') }}">Register</a></li>
             @else
                 <li>
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a id="user-block-toggle" href="{{ url('/logout') }}"
                      onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" data-toggle="collapse">
                       <em class="icon-logout"></em>&nbsp Sair

                       <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                       </form>
                    </a>
                 </li>
             @endif
         </ul>
   </nav>
   <!-- END Top Navbar-->
</header>
