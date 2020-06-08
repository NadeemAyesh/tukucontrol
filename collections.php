<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || التحصيلات اليومية</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Tajawal:300,400,500,700,900"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <!--<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />-->

    <link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />-->

    <link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->

    <link href="assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="assets/images/icon.png"/>
    <link rel="stylesheet" href="assets/custome.css">
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="index.php" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/images/inline-logo.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->


                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <?php include 'top_bar.php' ?>
            </div>
        </div>
    </header>

    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <?php include 'menu.php' ?>

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">التحصيلات اليومية</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    التحصيلات اليومية
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <h4 class="m--font-success">
                                2020/1/1
                                <i class="fa fa-calendar-alt ml-2"></i>
                            </h4>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="table-responsive">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable"
                                   id="m_table_1">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>رقم الطلب</th>
                                    <th>المبلغ</th>
                                    <th>الشركة</th>
                                    <th>تاريخ التحصيل</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12345</td>
                                    <td>50 ₪</td>
                                    <td>
                                        اسم الشركة
                                    </td>
                                    <td>
                                        2020/1/1
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>12345</td>
                                    <td>50 ₪</td>
                                    <td>
                                        اسم الشركة
                                    </td>
                                    <td>
                                        2020/1/1
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12345</td>
                                    <td>50 ₪</td>
                                    <td>
                                        اسم الشركة
                                    </td>
                                    <td>
                                        2020/1/1
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-graphic-2"></i>
												</span>
                                <h3 class="m-portlet__head-text">
                                    احصائيات طلبات المستخدم
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-md-12 col-lg-12 col-xl-6">

                                <!--begin:: Widgets/Stats2-1 -->
                                <div class="m-widget1">
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h4 class="m-widget1__title m--icon-font-size-sm1">اجمالي التحصيلات
                                                    المتوفرة </h4>
                                            </div>
                                            <div class="col-auto m--align-right">
                                                <span class="m-widget1__number m--font-info">650</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end:: Widgets/Stats2-1 -->
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-6">
                                <!--begin:: Widgets/Stats2-3 -->
                                <div class="m-widget1">
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h4 class="m-widget1__title m--icon-font-size-sm1">اجمالي المبلغ
                                                    المتوفر </h4>
                                            </div>
                                            <div class="col-auto m--align-right">
                                                <span class="m-widget1__number m--font-success">200 ₪</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--begin:: Widgets/Stats2-3 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Body -->
    <?php include 'footer.php' ?>
</div>

<!-- end:: Page -->


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->


<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->


<!--begin::Page Scripts -->
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<script src="assets/demo/default/custom/crud/datatables/basic/headers.js" type="text/javascript"></script>
<script src="assets/js/parsley.min.js"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
