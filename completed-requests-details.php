<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || تفاصيل الطلب المنجز</title>
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
                        <h3 class="m-subheader__title ">تفاصيل الطلب المنجز</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                    <form class="m-form m-form--fit m-form--label-align-right">
                                        <div class="m-portlet__body">
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
                                                        <label>اسم السائق:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="حمزة أبو عيطة">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>رقم هاتف السائق:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="0595779004">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>منطقة البداية:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="سلواد - رام الله">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>منطقة النهاية:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="يطا - الخليل	">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>سعر الحمولة:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="500 ₪">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>سعر التوصيل:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="20 ₪">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>عدد الطرود:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="5">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>محتوى الحمولة:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="لابتوبات">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>وقت استلام الطلب:</label>
                                                        <input type="text" disabled dir="ltr"
                                                               class="form-control text-left m-input m-input--square"
                                                               value="10/01 01:00 PM">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>وقت تسليم الطلب:</label>
                                                        <input type="text" disabled dir="ltr"
                                                               class="form-control text-left m-input m-input--square"
                                                               value="10/01 01:00 PM">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 px-5 mt-4">
                                                    <ul class="list-inline justify-content-center text-center marker-icon">
                                                        <li class="list-inline-item mr-0">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item mr-0">
                                                                    <img src="assets/images/0.png" alt="">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    البداية
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="list-inline-item ml-4">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <img src="assets/images/1.png" alt="">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    النهاية
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <div id="map" style="height: 400px; border-radius: 25px" class="shadow-lg "></div>
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


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->

<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script>

    function initMap() {
        var flightPlanCoordinates = [
            {lat: 24.627791, lng: 46.716011},
            {lat: 24.782371, lng: 45.452962},
            {lat: 26.052465, lng: 44.486588},
            {lat: 26.917784, lng: 42.949175},
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: {lat: 26.052465, lng: 44.486588}
        });
        var flightPath = new google.maps.Polyline({
            path: flightPlanCoordinates,
            geodesic: true,
            strokeColor: '#f4516c',
            strokeOpacity: 1.0,
            strokeWeight: 3
        });
        //ماركرات واستراحات
        var beaches = [
            ['0', 24.627791, 46.716011],
            ['', 24.782371, 45.452962],
            ['', 26.052465, 44.486588],
            ['car-marker', 26.917784, 42.949175],
            ['1', 27.287320, 41.378206]
        ];
        for (var i = 0; i < beaches.length; i++) {
            var beach = beaches[i];
            var marker = new google.maps.Marker({
                position: {lat: beach[1], lng: beach[2]},
                map: map,
                icon: './assets/images/'+ beach[0]+'.png',
                // shape: shape,
                // zIndex: beach[3]
            });
        }

        flightPath.setMap(map);


    }

</script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwQWgqTGypi82vAyP97l2O5Zi_RBiVA5E&amp;callback=initMap">
</script>
<!--end::Global Theme Bundle -->

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
