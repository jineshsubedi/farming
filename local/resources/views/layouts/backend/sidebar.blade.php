<!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    @php($logo = \App\Models\Setting::getLogo())
                    @if($logo)
                    <a href="{{route('home')}}"><img src="{{asset('images/'.$logo)}}" alt="logo"></a>
                    @else
                    <a href="{{route('home')}}"><img src="assets/images/icon/logo.png" alt="logo"></a>
                    @endif
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li @if(Request::segment(1)=='dashboard' ) class="active" @endif>
                                <a href="{{route('home')}}" aria-expanded="false"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <li @if(Request::segment(1)=='setting' ) class="active" @endif>
                                <a href="{{route('setting')}}" aria-expanded="false"><i class="ti-settings"></i><span>setting</span></a>
                            </li>
                            <li @if(Request::segment(1)=='user' ) class="active" @endif>
                                <a href="{{route('user.index')}}" aria-expanded="false"><i class="ti-user"></i><span>User</span></a>
                            </li>
                            <li @if(Request::segment(1)=='vendor' ) class="active" @endif>
                                <a href="{{route('vendor.index')}}" aria-expanded="false"><i class="ti-server"></i><span>Vendor</span></a>
                            </li>
                            <li @if(Request::segment(1)=='setting' ) class="active" @endif>
                                <a href="{{route('customer.index')}}" aria-expanded="false"><i class="fa fa-users"></i><span>Customer</span></a>
                            </li>
                            <li @if(Request::segment(1)=='blo' ) class="active" @endif>
                                <a href="{{route('blog.index')}}" aria-expanded="false"><i class="ti-rss"></i><span>Blog</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->