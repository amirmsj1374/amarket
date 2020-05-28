<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                    href="../../../html/rtl/vertical-menu-template-semi-dark/index.html">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Vuexy</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="#"><i class="feather icon-home"></i>
                    <span class="menu-title"data-i18n="Dashboard">پیشخوان</span>
                    <span class="badge badge badge-warning badge-pill float-right mr-2">2</span>
                </a>
                <ul class="menu-content">
                    <li><a href="{{Route('notice')}}"><i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Analytics">اعلانات</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>محصولات</span>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-shopping-cart"></i>
                    <span class="menu-title"data-i18n="User">محصولات</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('products.index')}}">
                            <i class="fa fa-list-alt success"></i>
                            <span class="menu-item"data-i18n="View">محصولات دیجیتال</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.create') }}">
                            <span class="menu-item"data-i18n="List"> <i class="feather icon-plus-circle success"></i> ایجاد محصول</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-message-square"></i>
                    <span class="menu-title" data-i18n="Chat">دسته بندی ها</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('category.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item"data-i18n="List">نمایش دسته ها</span>
                        </a>
                    </li>
                    <li><a href="{{route('category.create')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item"data-i18n="View">اضافه کردن </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-check-square"></i>
                    <span class="menu-title" data-i18n="Todo">ویژگی محصول</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('attribute.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item"data-i18n="List">نمایش ویژگی ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('attribute.create')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item"data-i18n="View">اضافه کردن </span>
                        </a>
                    </li>
                </ul>

            </li>
            <li class=" nav-item">
                <a href="app-calender.html">
                    <i class="feather icon-calendar"></i>
                    <span class="menu-title" data-i18n="Calender">سفارشات</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="app-ecommerce-shop.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item"data-i18n="Shop">لیست سفارشات</span>
                        </a>
                    </li>
                    <li>
                        <a href="app-ecommerce-details.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item"data-i18n="Details">وضعیت سفارشات</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="app-calender.html">
                    <i class="feather icon-calendar"></i>
                    <span class="menu-title" data-i18n="Calender">نظرات</span>
                </a>
            </li>
            <li class=" navigation-header"><span>مدیریت کاربر</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                        data-i18n="Data List">تعریف کاربر</span><span
                        class="badge badge badge-primary badge-pill float-right mr-2">جدید</span></a>
                <ul class="menu-content">
                    <li><a href="data-list-view.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="List View">سطح دسترسی</span></a>
                    </li>
                    <li><a href="data-thumb-view.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Thumb View">کاربر جدید</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>سفارشات</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-copy"></i><span class="menu-title"
                        data-i18n="Form Elements">مدیریت سفارشات</span></a>
                <ul class="menu-content">
                    <li><a href="form-select.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Select">تغییر وضعیت سفارش</span></a>
                    </li>
                    <li><a href="form-switch.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Switch">سفارشات ویژه</span></a>
                    </li>
                    <li><a href="form-checkbox.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Checkbox">پیامک</span></a>
                    </li>

                </ul>
            </li>
            <li class=" navigation-header"><span>انبارداری</span>
            </li>
            <li class=" nav-item"><a href="page-user-profile.html"><i class="feather icon-user"></i><span
                        class="menu-title" data-i18n="Profile">ارسال و حمل محصول</span></a>
            </li>
        <li class=" nav-item"><a href="{{route('inventory.index')}}"><i class="feather icon-settings"></i><span
                        class="menu-title" data-i18n="Account Settings">تعریف تعداد محصول</span></a>
            </li>
            <li class=" navigation-header"><span>امور مالی</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-pie-chart"></i><span class="menu-title"
                        data-i18n="Charts">پرداخت و صورت حساب</span><span
                        class="badge badge badge-pill badge-success float-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li><a href="chart-apex.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Apex">صورت حساب</span></a>
                    </li>
                    <li><a href="chart-chartjs.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Chartjs">انتخاب عرض</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="maps-google.html"><i class="feather icon-map"></i><span class="menu-title"
                        data-i18n="Google Maps">تخفیف ها</span></a>
                <ul class="menu-content">
                    <li><a href="chart-apex.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Apex">محصول انتخابی</span>
                        </a>
                    </li>
                    <li><a href="chart-apex.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Apex">دسته بندی خاص</span>
                        </a>
                    </li>
                    <li><a href="chart-apex.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Apex">کد تخفیف</span>
                        </a>
                    </li>
                    <li><a href="chart-apex.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Apex">تخفیف ویژه</span>
                        </a>
                    </li>
                    <li><a href="chart-apex.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Apex">تخفیف پله کانی</span>
                        </a>
                    </li>
                    <li><a href="chart-apex.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Apex">درج روبان</span>
                        </a>
                    </li>
                    <li><a href="chart-apex.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Apex">هدیه رایگان</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>فروشندگان</span></li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-life-buoy"></i>
                    <span class="menu-title" data-i18n="Raise Support">تعریف فروشگاه</span>
                </a>
            </li>
            <li class=" navigation-header"><span>مدیریت محتوا و اخبار</span></li>
            <li class=" nav-item">
                <a href="maps-google.html"><i class="feather icon-map"></i>
                    <span class="menu-title"data-i18n="Google Maps">اخبار</span>
                </a>
                <ul class="menu-content">
                    <li><a href="chart-apex.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Apex">مقالات</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>پشتیبانی</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-menu"></i><span class="menu-title"
                        data-i18n="Menu Levels">پشتیبانی دیتابیس</span></a></li>
            <li class="nav-item"><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Second Level">حالت تعمیرات</span></a>
                    </li>
            <li class="nav-item"><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Second Level">تیکت</span></a>
                    </li>
            <li class=" navigation-header"><span>تنظیمات</span>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-folder"></i>
                    <span class="menu-title" data-i18n="Documentation">تنظیم منوی اصلی</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-life-buoy"></i>
                    <span class="menu-title" data-i18n="Raise Support">تنظیم اسلایدر</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-life-buoy"></i>
                    <span class="menu-title" data-i18n="Raise Support">درج کد E نماد</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-life-buoy"></i>
                    <span class="menu-title" data-i18n="Raise Support">تغییر ایکون</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-life-buoy"></i>
                    <span class="menu-title" data-i18n="Raise Support">تغییر فایوایکون</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-life-buoy"></i>
                    <span class="menu-title" data-i18n="Raise Support">سئو</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-life-buoy"></i>
                    <span class="menu-title" data-i18n="Raise Support">بازگردانی سایت حالت اولیه</span>
                </a>
            </li>
        </ul>
    </div>
</div>
