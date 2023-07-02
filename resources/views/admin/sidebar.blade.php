<?php
use App\Helpers\MenuActiveHelpers;
?>
<style>
    .active-custom{
        background: #eee!important;
    }
</style>

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="{{ asset('/admin/assets/img/book.png') }}" class="header-logo" /> <span
                    class="logo-name"></span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ MenuActiveHelpers::routesNameActive(['admin.dashboard']) }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown  {{ MenuActiveHelpers::routesNameActive(['admin.user.index','admin.user.create','admin.role.index', 'admin.permission.index' ]) }}">
                <a href="#" class="menu-toggle nav-link has-dropdown {{ MenuActiveHelpers::routesNameToggle(['admin.user.index','admin.user.create', ]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg><span>{{ __('Administrator') }}</span></a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="active"><a class="nav-link active-custom  {{ MenuActiveHelpers::routeNameActive('admin.user.index') }}" href="{{ route('admin.user.index') }}">Foydalanuvchilar</a></li>
                    <li><a  class="nav-link {{ MenuActiveHelpers::routeNameActive('admin.role.index') }}" href="{{ route('admin.role.index') }}">{{ __('Roles') }}</a></li>
                    <li><a  class="nav-link {{ MenuActiveHelpers::routeNameActive('admin.permission.index') }}" href="{{ route('admin.permission.index') }}">{{ __('Permissions') }}</a></li>
                </ul>
            </li>

            <li class="dropdown {{ MenuActiveHelpers::routesNameActive(['admin.reference.type']) }}">
                <a href="{{ route('admin.reference.type') }}" class="nav-link"><i data-feather="monitor"></i><span>Qo'shimchalar</span></a>
            </li>
            <li class="dropdown {{ MenuActiveHelpers::routesNameActive(['admin.news.index']) }}">
                <a href="{{ route('admin.news.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Yangiliklar</span></a>
            </li>
            <li class="dropdown {{ MenuActiveHelpers::routesNameActive(['admin.settings.index']) }}">
                <a href="{{ route('admin.settings.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Sozlamalar</span></a>
            </li>
            <li class="dropdown {{ MenuActiveHelpers::routesNameActive(['admin.partners.index']) }}">
                <a href="{{ route('admin.partners.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Hamkorlar</span></a>
            </li>
        </ul>
    </aside>
</div>
