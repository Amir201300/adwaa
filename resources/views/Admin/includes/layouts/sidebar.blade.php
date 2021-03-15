<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile dropdown m-t-20">
                        <div class="user-pic">

                            <img src="{{getAdminImage(Auth::guard('Admin')->user()->photo)}}" alt="users"
                                 class="rounded-circle img-fluid"/>

                        </div>
                        <div class="user-content hide-menu m-t-10">
                            <h5 class="nameOfUser m-b-10 user-name font-medium">{{ Auth::guard('Admin')->user()->name }}</h5>
                            <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button"
                               data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="ti-settings"></i>
                            </a>
                            <a href="javascript:void(0)" title="Logout" class="btn btn-circle btn-sm">
                                <i class="ti-power-off"></i>
                            </a>
                            <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                <a class="dropdown-item" href="{{route('profile.index')}}">
                                    <a class="dropdown-item" href="{{route('user.logout')}}">
                                        <i class="fa fa-power-off m-r-5 m-l-5"></i> تسجيل الخروج</a>
                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <!-- main routes section-->
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">الاعدادات الرئيسية</span>
                </li>

{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link  waves-effect waves-dark" href="{{route('admin.dashboard')}}"--}}
{{--                       aria-expanded="false">--}}
{{--                        <i class="fa fa-home"></i>--}}
{{--                        <span class="hide-menu">الصفحة الرئيسية</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                @if(in_array(2,adminsRoleArray(Auth::guard('Admin')->user())))
                <li class="sidebar-item">
                    <a class="sidebar-link  waves-effect waves-dark" href="{{route('Category.index')}}"
                       aria-expanded="false">
                        <i class="icon-Bulleted-List"></i>
                        <span class="hide-menu">الاقسام</span>
                    </a>
                </li>
                @endif

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                       aria-expanded="false">
                        <i class="icon-Add-UserStar"></i>
                        <span class="hide-menu"> المديرين والمستخدمين </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if(in_array(9,adminsRoleArray(Auth::guard('Admin')->user())))
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{route('Admin.index')}}"
                               aria-expanded="false">
                                <i class="icon-Administrator"></i>
                                <span class="hide-menu">المديرين</span>
                            </a>
                        </li>
                        @endif
                            @if(in_array(10,adminsRoleArray(Auth::guard('Admin')->user())))
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark"
                               href="{{route('User.index')}}" aria-expanded="false">
                                <i class="icon-Add-UserStar"></i>
                                <span class="hide-menu">الاعضاء</span>
                            </a>
                        </li>
                                @endif


                    </ul>
                </li>

                @if(in_array(3,adminsRoleArray(Auth::guard('Admin')->user())))
                <li class="sidebar-item">
                    <a class="sidebar-link  waves-effect waves-dark" href="{{route('Color.index')}}"
                       aria-expanded="false">
                        <i class="icon-Font-Color"></i>
                        <span class="hide-menu">الوان المنتجات</span>
                    </a>
                </li>
                @endif
                @if(in_array(4,adminsRoleArray(Auth::guard('Admin')->user())))
                <li class="sidebar-item">
                    <a class="sidebar-link  waves-effect waves-dark" href="{{route('Product.index')}}"
                       aria-expanded="false">
                        <i class="icon-Shopping-Bag"></i>
                        <span class="hide-menu">المنتجات</span>
                    </a>
                </li>
                @endif
                @if(in_array(5,adminsRoleArray(Auth::guard('Admin')->user())))
                <li class="sidebar-item">
                    <a class="sidebar-link  waves-effect waves-dark" href="{{route('Brands.index')}}"
                       aria-expanded="false">
                        <i class="fa fa-calendar-check"></i>
                        <span class="hide-menu">الماركات</span>
                    </a>
                </li>
                @endif
                @if(in_array(8,adminsRoleArray(Auth::guard('Admin')->user())))
                <li class="sidebar-item">
                    <a class="sidebar-link  waves-effect waves-dark" href="{{route('Sliders.index')}}"
                       aria-expanded="false">
                        <i class="icon-File-Block"></i>
                        <span class="hide-menu">صور السلايدرز</span>
                    </a>
                </li>
                @endif
                @if(in_array(7,adminsRoleArray(Auth::guard('Admin')->user())))
                <li class="sidebar-item">
                    <a class="sidebar-link  waves-effect waves-dark" href="{{route('Order.index')}}"
                       aria-expanded="false">
                        <i class="icon-Data-Clock"></i>
                        <span class="hide-menu">الطلبات</span>
                    </a>
                </li>
                @endif
                @if(in_array(6,adminsRoleArray(Auth::guard('Admin')->user())))
                <li class="sidebar-item">
                    <a class="sidebar-link  waves-effect waves-dark" href="{{route('Discount_code.index')}}"
                       aria-expanded="false">
                        <i class="icon-Coin"></i>
                        <span class="hide-menu">اكواد الخصم</span>
                    </a>
                </li>
            @endif


                <!--end main routes section-->

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
