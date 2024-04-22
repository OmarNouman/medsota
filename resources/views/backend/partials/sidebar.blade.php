<div class="app-sidebar sidebar-shadow bg-warning sidebar-text-dark">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboard</li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Home
                    </a>
                </li>
                <li class="app-sidebar__heading">Content</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                        Categories
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('categories.index') }}">
                                <i class="metismenu-icon"></i>
                                All Categories
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.create') }}">
                                <i class="metismenu-icon"> </i>
                                Add Category
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-box1"></i>
                        Products
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('products.index') }}">
                                <i class="metismenu-icon"></i>
                                All Products
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.create') }}">
                                <i class="metismenu-icon"> </i>
                                Add Product
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="app-sidebar__heading">Settings</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-settings"></i>
                        Settings
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('settings.edit') }}">
                                <i class="metismenu-icon"> </i>
                                Update Settings
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
