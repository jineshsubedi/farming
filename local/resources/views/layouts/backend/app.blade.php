@include('layouts.backend.header')
    <div class="page-container">

        @include('layouts.backend.sidebar')
        <div class="main-content">
		    <!-- header area start -->
		    <div class="header-area">
		        <div class="row align-items-center">
		            <!-- nav and search button -->
		            <div class="col-md-6 col-sm-8 clearfix">
		                <div class="nav-btn pull-left">
		                    <span></span>
		                    <span></span>
		                    <span></span>
		                </div>
		                <div class="search-box pull-left">
		                    <form action="#">
		                        <input type="text" name="search" placeholder="Search..." required>
		                        <i class="ti-search"></i>
		                    </form>
		                </div>
		            </div>
		            <!-- profile info & task notification -->
		            <div class="col-md-6 col-sm-4 clearfix">
		                <ul class="notification-area pull-right">
		                    <li id="full-view"><i class="ti-fullscreen"></i></li>
		                    <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
		                    <li class="dropdown">
		                        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
		                            <span>2</span>
		                        </i>
		                        <div class="dropdown-menu bell-notify-box notify-box">
		                            <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
		                            <div class="nofity-list">
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
		                                    <div class="notify-text">
		                                        <p>You have Changed Your Password</p>
		                                        <span>Just Now</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
		                                    <div class="notify-text">
		                                        <p>New Commetns On Post</p>
		                                        <span>30 Seconds ago</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
		                                    <div class="notify-text">
		                                        <p>Some special like you</p>
		                                        <span>Just Now</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
		                                    <div class="notify-text">
		                                        <p>New Commetns On Post</p>
		                                        <span>30 Seconds ago</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
		                                    <div class="notify-text">
		                                        <p>Some special like you</p>
		                                        <span>Just Now</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
		                                    <div class="notify-text">
		                                        <p>You have Changed Your Password</p>
		                                        <span>Just Now</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
		                                    <div class="notify-text">
		                                        <p>You have Changed Your Password</p>
		                                        <span>Just Now</span>
		                                    </div>
		                                </a>
		                            </div>
		                        </div>
		                    </li>
		                    <li class="dropdown">
		                        <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
		                        <div class="dropdown-menu notify-box nt-enveloper-box">
		                            <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
		                            <div class="nofity-list">
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb">
		                                        <img src="assets/images/author/author-img1.jpg" alt="image">
		                                    </div>
		                                    <div class="notify-text">
		                                        <p>Aglae Mayer</p>
		                                        <span class="msg">Hey I am waiting for you...</span>
		                                        <span>3:15 PM</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb">
		                                        <img src="assets/images/author/author-img2.jpg" alt="image">
		                                    </div>
		                                    <div class="notify-text">
		                                        <p>Aglae Mayer</p>
		                                        <span class="msg">When you can connect with me...</span>
		                                        <span>3:15 PM</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb">
		                                        <img src="assets/images/author/author-img3.jpg" alt="image">
		                                    </div>
		                                    <div class="notify-text">
		                                        <p>Aglae Mayer</p>
		                                        <span class="msg">I missed you so much...</span>
		                                        <span>3:15 PM</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb">
		                                        <img src="assets/images/author/author-img4.jpg" alt="image">
		                                    </div>
		                                    <div class="notify-text">
		                                        <p>Aglae Mayer</p>
		                                        <span class="msg">Your product is completely Ready...</span>
		                                        <span>3:15 PM</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb">
		                                        <img src="assets/images/author/author-img2.jpg" alt="image">
		                                    </div>
		                                    <div class="notify-text">
		                                        <p>Aglae Mayer</p>
		                                        <span class="msg">Hey I am waiting for you...</span>
		                                        <span>3:15 PM</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb">
		                                        <img src="assets/images/author/author-img1.jpg" alt="image">
		                                    </div>
		                                    <div class="notify-text">
		                                        <p>Aglae Mayer</p>
		                                        <span class="msg">Hey I am waiting for you...</span>
		                                        <span>3:15 PM</span>
		                                    </div>
		                                </a>
		                                <a href="#" class="notify-item">
		                                    <div class="notify-thumb">
		                                        <img src="assets/images/author/author-img3.jpg" alt="image">
		                                    </div>
		                                    <div class="notify-text">
		                                        <p>Aglae Mayer</p>
		                                        <span class="msg">Hey I am waiting for you...</span>
		                                        <span>3:15 PM</span>
		                                    </div>
		                                </a>
		                            </div>
		                        </div>
		                    </li>
		                </ul>
		            </div>
		        </div>
		    </div>
		    <div class="page-title-area">
			    <div class="row align-items-center">
			        <div class="col-sm-6">
			            @yield('breadcrums')
			        </div>
			        <div class="col-sm-6 clearfix">
			            <div class="user-profile pull-right">
			                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
			                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}<i class="fa fa-angle-down"></i></h4>
			                <div class="dropdown-menu">
			                	<a class="dropdown-item" href="#">
			                        {{ __('Profile') }}
			                    </a>

			                    <a class="dropdown-item" href="{{ route('logout') }}"
			                       onclick="event.preventDefault();
			                                     document.getElementById('logout-form').submit();">
			                        {{ __('Logout') }}
			                    </a>
			                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                        @csrf
			                    </form>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
    <!-- header area end -->
        <!-- main content area start -->
        
        @include('sweet::alert')
        	@yield('content')
    	</div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved</p>
            </div>
        </footer>
    </div>
  @include('layouts.backend.footer')
