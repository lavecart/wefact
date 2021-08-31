@include('partials.mobile_menu')
<!--------------------
START - Main Menu
-------------------->
<div class="menu-w menu-activated-on-hover menu-has-selected-link selected-menu-color-light color-scheme-dark color-style-default sub-menu-color-white menu-position-side menu-side-left menu-layout-full sub-menu-style-flyout" style="background-image: url(https://i.imgur.com/PeCJiP3.png), linear-gradient(-180deg, #4B72FA 0%, #934BFA 60%); background-size: full;">
    <div class="logo-w" style="background-color: rgba(0, 0, 0, 0.00)">
    <a class="logo" href="{{ URL('/')}}">
        <div class="logo-label ml-0">
            <img src="{{ asset('images/logo-4.png') }}" class="w-100" alt="Ruby Finance" style="filter: invert(1.00)">
        </div>
    </a>
    </div>
    <div class="logged-user-w avatar-inline">
    <div class="logged-user-i">
        <div class="avatar-w" style="border: 0px; border-radius: 0%;">
            <img alt="User Image" src="{{ asset('theme/img/avatar1.jpg') }}">
        </div>
        <div class="logged-user-info-w">
        <div class="logged-user-name">{{ auth()->user()->name }}</div>
        <div class="logged-user-role">{{ (auth()->user()->role) }}</div>
        </div>
        <div class="logged-user-toggler-arrow">
        <div class="os-icon os-icon-chevron-down"></div>
        </div>
        <div class="logged-user-menu color-style-light">
        <div class="logged-user-avatar-info">
            <div class="avatar-w" style="border: 0px; border-radius: 0%;">
            <img alt="User Image" src="{{ asset('theme/img/avatar1.jpg') }}">
        </div>
            <div class="logged-user-info-w">
            <div class="logged-user-name">{{ auth()->user()->name }}</div>
            <div class="logged-user-role">{{ (auth()->user()->role) }}</div>
            </div>
        </div>
        <div class="bg-icon">
            <i class="os-icon os-icon-wallet-loaded"></i>
        </div>
        <ul>
            <li>
                <a href="{{ route('client-user-edit') }}">
                <i class="os-icon os-icon-user-male-circle2"></i>
                <span>{{ trans('cruds.clientManagement.my_profile') }}</span></a>
            </li>
            <li>
                <a href="{{ route('auth.change_password') }}">
                <i class="os-icon os-icon-coins-4"></i>
                <span>{{ trans('cruds.clientManagement.change_password') }}</span></a>
            </li>
            <li>
            <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logoutform').submit();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
            </li>
        </ul>
        </div>
    </div>
    </div>



    <ul class="main-menu">

    @if(auth()->user()->role == 'admin')
    <li class="selected has-sub-menu {{ request()->is('admin/home') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}" class="arrow-none">
        <div class="icon-w">
            <div class="os-icon os-icon-layout"></div>
        </div>
        <span>Users</span></a>
    </li>
    @endif

    <!-- Dashboard Link for All Users -->
    <li class="selected has-sub-menu {{ request()->is('admin/home') ? 'active' : '' }}">
        <a href="{{ URL('/admin/home') }}" class="arrow-none">
        <div class="icon-w">
            <div class="os-icon os-icon-layout"></div>
        </div>
        <span>{{ trans('global.dashboard') }}</span></a>
    </li>


    <!-- Invoice Options only for Client -->
   
    <li class="has-sub-menu {{ request()->is('client/product') || request()->is('client/product/*') ? 'active' : '' }}">
        <a href="{{ route('product.index') }}" class="arrow-none">
            <div class="icon-w">
                <div class="os-icon os-icon-package"></div>
            </div>
            <span>{{ trans('cruds.product.menu') }}</span>
        </a>
    </li>

    <li class="has-sub-menu {{ request()->is('client/invoice/index') || request()->is('client/invoice/*') || request()->is('client/invoice/*') || request()->is('client/invoice') ? 'active' : '' }}">
        <a href="{{ route('invoice.index') }}" class="arrow-none">
            <div class="icon-w">
                <div class="os-icon os-icon-arrow-up-circle"></div>
            </div>
            <span>{{ trans('cruds.clientManagement.outgoing') }}</span>
        </a>
    </li>

    <li class="has-sub-menu {{ request()->is('client/incoming') || request()->is('client/incoming/*') ? 'active' : '' }}">
        <a href="{{ route('incoming.index') }}" class="arrow-none">
            <div class="icon-w">
                <div class="os-icon os-icon-arrow-down-circle"></div>
            </div>
            <span>{{ trans('cruds.clientManagement.incoming') }}</span>
        </a>
    </li>


    <li class=" has-sub-menu">
        <a href="javascript:void(0)">
            <div class="icon-w">
                <div class="os-icon os-icon-file-text"></div>
            </div>
            <span>Relationships</span>
        </a>
        <div class="sub-menu-w">
            <div class="sub-menu-header">
                Relationships
            </div>
            <div class="sub-menu-icon">
                <i class="os-icon os-icon-file-text"></i>
            </div>
            <div class="sub-menu-i">
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('debtors.index') }}">Debtors</a>
                    </li>
                    <li>
                        <a href="{{ route('creditors.index') }}">Creditors</a>
                    </li>
                </ul>
            </div>
        </div>
    </li>

    
    <li class=" has-sub-menu">
        <a href="javascript:void(0)">
        <div class="icon-w">
            <div class="os-icon os-icon-file-text"></div>
        </div>
        <span>{{ trans('cruds.clientManagement.settings') }}</span></a>
        <div class="sub-menu-w">
        <div class="sub-menu-header">
            {{ trans('cruds.clientManagement.settings') }}
        </div>
        <div class="sub-menu-icon">
            <i class="os-icon os-icon-file-text"></i>
        </div>
        <div class="sub-menu-i">
            <ul class="sub-menu">
            <li>
                <a href="{{ route('client-user-edit') }}">{{ trans('cruds.clientManagement.my_profile') }}</a>
            </li>
            <li>
                <a href="{{ route('auth.change_password') }}">{{ trans('cruds.clientManagement.change_password') }}</a>
            </li>
            </ul>
        </div>
        </div>
    </li>
   
    </ul>
</div>
<!--------------------
END - Main Menu
-------------------->


@section('scripts')
@endsection
