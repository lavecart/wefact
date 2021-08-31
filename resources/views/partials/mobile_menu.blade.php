<!--------------------
START - Mobile Menu
-------------------->
<div class="menu-mobile menu-activated-on-click color-scheme-dark" style="background-image: url(https://i.imgur.com/PeCJiP3.png), linear-gradient(120deg, #4B72FA 0%, #934BFA 60%); background-size: full;">
    <div class="mm-logo-buttons-w">
    <a class="mm-logo" href="{{ URL('/') }}">
        <img src="{{ asset('public/images/logo-5.png') }}" alt="Ruby Finance" style="width: 100%">
    </a>

    <div class="mm-buttons">
		<div class="content-panel-open">
		<div class="os-icon os-icon-grid-circles"></div>
		</div>
        <div class="mobile-menu-trigger">
        <div class="os-icon os-icon-hamburger-menu-1"></div>
        </div>
    </div>
    </div>
    <div class="menu-and-user">
    <div class="logged-user-w">
        <div class="avatar-w" style="border: 0px; border-radius: 0%;">
        </div>
        <div class="logged-user-info-w">
        <div class="logged-user-name">
            
        </div>

        </div>
    </div>
    <!--------------------
    START - Mobile Menu List
    -------------------->
    <ul class="main-menu">
        <!-- Dashboard Link for All Users -->
        <li class="selected has-sub-menu {{ request()->is('admin/home') ? 'active' : '' }}">
            <a href="{{ URL('/admin/home') }}" class="arrow-none">
            <div class="icon-w">
                <div class="os-icon os-icon-layout"></div>
            </div>
            <span>{{ trans('global.dashboard') }}</span></a>
        </li>
        <!-- Invoice Options only for Client -->
       
        <li>
            <a href="{{ route('product.index') }}">
                <div class="icon-w">
                <div class="os-icon os-icon-layers"></div>
                </div>
                <span>{{ trans('cruds.product.menu') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('invoice.index') }}" class="arrow-none">
                <div class="icon-w">
                    <div class="os-icon os-icon-arrow-up-circle"></div>
                </div>
                <span>{{ trans('cruds.clientManagement.outgoing') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('incoming.index') }}" class="arrow-none">
                <div class="icon-w">
                    <div class="os-icon os-icon-arrow-down-circle"></div>
                </div>
                <span>{{ trans('cruds.clientManagement.incoming') }}</span>
            </a>
        </li>
        <li class="has-sub-menu">
            <a href="javascript:void(0)">
                <div class="icon-w">
                    <div class="os-icon os-icon-file-text"></div>
                </div>
                <span>{{ trans('cruds.clientManagement.settings') }}</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ route('client-user-edit') }}">{{ trans('cruds.clientManagement.my_profile') }}</a>
                </li>
                <li>
                    <a href="{{ route('auth.change_password') }}">{{ trans('cruds.clientManagement.change_password') }}</a>
                </li>
				<li>
            <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logoutform').submit();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
            </li>
            </ul>
        </li>

        <li class="has-sub-menu">
            <a href="javascript:void(0)">
                <div class="icon-w">
                    <div class="os-icon os-icon-file-text"></div>
                </div>
                <span>Relationships</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ route('debtors.index') }}">Debtors</a>
                </li>
                <li>
                    <a href="{{ route('creditors.index') }}">Creditors</a>
                </li>
            </ul>
        </li>
     
        <li class="has-sub-menu">
            <a href="javascript:void(0)">
                <div class="icon-w">
                    <div class="os-icon os-icon-life-buoy"></div>
                </div>
                <span>{{ trans('cruds.userManagement.title') }}</span>
            </a>
        </li>
     
    </ul>
    <!--------------------
    END - Mobile Menu List
    -------------------->

    </div>
</div>
<!--------------------
END - Mobile Menu
-------------------->