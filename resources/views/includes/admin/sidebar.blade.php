<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">

        <div class="sidebar-brand">
            <a href="index.html">Thamrin Asset</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">TA</a>
        </div>
        
        <ul class="sidebar-menu">
            @if(Auth::user()->role == "1")
                <li class="menu-header">Home</li>
                <li class="{{ Request::is('admin') ? ' active' : '' }}"><a class="nav-link" href="{{ route('dashboard.index') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                <li class="menu-header">Master Data</li>
                <li class="{{ Request::is('admin/department*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('department.index') }}"><i class="fas fa-briefcase"></i> <span>Departments</span></a></li>
                <li class="{{ Request::is('admin/location*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('location.index') }}"><i class="fas fa-location-arrow"></i> <span>Locations</span></a></li>
                <li class="{{ Request::is('admin/brand*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('brand.index') }}"><i class="fas fa-copyright"></i> <span>Brands</span></a></li>
                <li class="{{ Request::is('admin/type*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('type.index') }}"><i class="fas fa-bolt"></i> <span>Asset Types</span></a></li>
                <li class="{{ Request::is('admin/user*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-users"></i> <span>Users</span></a></li>
                <li class="{{ Request::is('admin/vendor*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('vendor.index') }}"><i class="fas fa-address-card"></i> <span>Vendors</span></a></li>
                @endif

                @if (Auth::user()->role != "1")
                    <li class="menu-header">Dashboard</li>
                    <li class="{{ Request::is('admin/my-asset*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('myasset.index', Auth::user()->id) }}"><i class="fas fa-box"></i> <span>My Assets</span></a></li>
                    <li class="{{ Request::is('admin/my-license*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('mylicense.index', Auth::user()->id) }}"><i class="fas fa-id-badge"></i> <span>My Licenses</span></a></li>
                    <li class="{{ Request::is('admin/transfer*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('transfer.index') }}"><i class="fas fa-id-badge"></i> <span>Asset Transfer Requests</span></a></li>
                    <li class="menu-header">Download</li>
                    <li class="{{ Request::is('admin/download-request') ? ' active' : '' }}"><a class="nav-link" href="{{ route('download.request') }}"><i class="fas fa-file-download"></i> <span>Download Form Request Assets</span></a></li>
                @endif
            
                
                @if(Auth::user()->role == "1")
                    <li class="menu-header">Main-Menu</li>
                    <li class="{{ Request::is('admin/asset*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('asset.index') }}"><i class="fas fa-boxes"></i> <span>Assets</span></a></li>
                    <li class="{{ Request::is('admin/transfer*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('transfer.index') }}"><i class="fas fa-id-badge"></i> <span>Asset Transfer Requests</span></a></li>
                    <li class="{{ Request::is('admin/license*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('license.index') }}"><i class="fas fa-id-badge"></i> <span>Licenses</span></a></li>
                    <li class="{{ Request::is('admin/maintenance*') ? ' active' : '' }}"><a class="nav-link" href="{{ route('maintenance.index') }}"><i class="fas fa-wrench"></i> <span>Maintenances</span></a></li>
                @endif

                @if(Auth::user()->role == "3")
                <li class="menu-header">Manager Menu</li>
                <li class="{{ Request::is('admin/manager-print') ? ' active' : '' }}"><a class="nav-link" href="/admin/manager-print"><i class="fas fa-file-download"></i> <span>Generate Reports</span></a></li>
                @endif

                <li class="menu-header">Settings</li>
                <li class="{{ Request::is('admin/change-password') ? ' active' : '' }}"><a class="nav-link" href="{{ route('user.password.edit') }}"><i class="fas fa-key"></i> <span>Change Password</span></a></li>
        </ul>
    </aside>
</div>