<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || سند قبض</title>
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
                            <a href="index.html" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/images/inline-logo.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools justify-content">

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
        <div class="m-grid__item m-grid__item--fluid m-wrapper my-profile">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">سند قبض</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="m-portlet m-portlet--full-height  ">
                            <div class="m-portlet__body">

                                <div class="profile-btn-option">
                                    <a href="#"  class="btn btn-primary m-btn m-btn--custom m-btn--icon d-block text-center mb-3">
                                    <span class="m-auto">
                                       <i class="fas fa-angle-right"></i>
                                        <span> رجوع </span>
                                    </span>
                                    </a>
                                    <button  class="btn btn-info  m-btn m-btn--custom m-btn--icon d-block w-100 text-center mb-3" onclick="window.print();">
                                    <span class="m-auto">
                                       <i class="fas fa-print"></i>
                                        <span> طباعة </span>
                                    </span>
                                    </button>
                                </div>

                                <div class="m-portlet__body-separator"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                    <form class="m-form m-form--fit m-form--label-align-right">
                                        <div class="m-portlet__body">
                                            <div class="myDivToPrint">
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>اسم صاحب الطلب:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="حمزة أبو عيطة">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>رقم هاتف صاحب الطلب:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="0595779004">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>عدد الطلبات المحصلة:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="20">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>اجمالي المبلغ المحصل:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="200 ₪">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>تاريخ:</label>
                                                            <input type="text" disabled dir="ltr"
                                                                   class="form-control text-left m-input m-input--square"
                                                                   value="2020/10/10">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row invoice-footer align-items-center mt-3">
                                                    <div class="col-auto">
                                                        <img src="assets/images/logo.png" class="invoice-footer-logo" alt="">
                                                    </div>
                                                    <div class="col">
                                                        <ul class="invoice-footer-icon list-inline text-right m-0 p-0">
                                                            <li class="list-inline-item ">
                                                                <p>-العنوان: </p>
                                                                فلسطين رام الله حي حي
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p>-هاتف رقم: </p>
                                                                00970595779004
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p>- بريد الكروني: </p>
                                                                example@example.com
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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

<!--begin::Modal-->
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->

<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
