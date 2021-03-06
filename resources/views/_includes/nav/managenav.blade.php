<div class="side-menu" id="admin-side-menu">
  <aside class="menu m-t-30 m-l-10 m-r-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
    </ul>
    
    <p class="menu-label">
      Administration
    </p>

    <ul class="menu-list">
      <li><a href="{{route('users.index')}}">Manage Users</a></li>
       <li>
        <a class="has-submenu">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="">Permissions</a></li>
        </ul>
      </li>
    </ul>

  </aside>
</div>
