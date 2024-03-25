@php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp


<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            {{-- <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a> --}}
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{($route == 'home')?'active':''}}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li> 

            
            <li class="nav-item">
                <a href="{{ route('voltage_ampere.index') }}"  class="nav-link {{($route == 'voltage_ampere.index')?'active':''}}">
                    <i class="nav-icon fas fa-window-restore"></i>
                    <p>
                       Voltage & Ampere 
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('monitoring_report.index') }}"  class="nav-link {{($route == 'monitoring_report.index')?'active':''}}">
                    <i class="nav-icon fas fa-window-restore"></i>
                    <p>
                       Monitoring Report
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->


