<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">

        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('admin') ? ' active' : '' }}"><a class="nav-link" href="{{ route('dashboard.index') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            @if (Auth::user()->role == 1)
                <li class="{{ Request::is('admin/department*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('department.index') }}"><i class="fas fa-briefcase"></i> <span>Department</span></a></li>
                <li class="{{ Request::is('admin/location*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('location.index') }}"><i class="fas fa-location-arrow"></i> <span>Location</span></a></li>
                <li class="{{ Request::is('admin/brand*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('brand.index') }}"><i class="fas fa-copyright"></i> <span>Brand</span></a></li>
                <li class="{{ Request::is('admin/type*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('type.index') }}"><i class="fas fa-bolt"></i> <span>Type Asset</span></a></li>
                <li class="{{ Request::is('admin/user*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-users"></i> <span>Users</span></a></li>
                <li class="{{ Request::is('admin/vendor*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('vendor.index') }}"><i class="fas fa-address-card"></i> <span>Vendors</span></a></li>
                <li class="{{ Request::is('admin/asset*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('asset.index') }}"><i class="fas fa-boxes"></i> <span>Assets</span></a></li>
                <li class="{{ Request::is('admin/license*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('license.index') }}"><i class="fas fa-id-badge"></i> <span>Licenses</span></a></li>
                <li class="{{ Request::is('admin/maintenance*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('maintenance.index') }}"><i class="fas fa-wrench"></i> <span>Maintenance</span></a></li>
            @endif
            <li class="{{ Request::is('admin/my-asset*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('myasset.index', Auth::user()->id) }}"><i class="fas fa-box"></i> <span>My Asset</span></a></li>
            <li class="{{ Request::is('admin/my-license*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('mylicense.index', Auth::user()->id) }}"><i class="fas fa-id-badge"></i> <span>My License</span></a></li>
            
        </ul>
    </aside>
</div>