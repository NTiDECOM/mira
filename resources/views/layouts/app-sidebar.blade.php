<!-- sidebar-->
<aside class="aside">
   <!-- START Sidebar (left)-->
   <div class="aside-inner">
      <nav data-sidebar-anyclick-close="" class="sidebar">
         <!-- START sidebar nav-->
         <ul class="nav">
            <!-- Iterates over all sidebar items-->
            <li class="nav-heading ">
               <span data-localize="sidebar.heading.HEADER">Menu Navigation</span>
            </li>
            <li class="{{ (Request::is('usuarios') ? 'active' : '') }}">
               <a href="{{action('UserController@index')}}" title="Usuários">
                  <em class="fa fa-users"></em>
                  <span data-localize="sidebar.nav.SINGLEVIEW">Usuários</span>
               </a>
            </li>
            <li class="{{ (Request::is('arquivos') ? 'active' : '') }}">
               <a href="{{action('FileController@index')}}" title="Arquivos">
                  <em class="fa fa-file"></em>
                  <span data-localize="sidebar.nav.SINGLEVIEW">Arquivos</span>
               </a>
            </li>
            <li>
               <a href="#" title="Relatórios">
                  <em class="fa fa-th-list"></em>
                  <span data-localize="sidebar.nav.SINGLEVIEW">Relatórios</span>
               </a>
            </li>
         </ul>
         <!-- END sidebar nav-->
      </nav>
   </div>
   <!-- END Sidebar (left)-->
</aside>
