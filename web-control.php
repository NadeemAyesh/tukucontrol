<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || التحكم بالموقع</title>
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
                        <h3 class="m-subheader__title ">التحكم بالموقع</h3>
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
                                    ثوابت الموقع
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <div class="edit-profile-photo">
                                        <img class="profile-pic pic1"
                                             src="assets/app/media/img/users/user4.jpg"
                                             alt="">
                                        <div class="change-photo-btn">
                                            <div class="photoUpload">
                                                <span> تغير اللوقو<i class="fa fa-upload ml-1"></i></span>
                                                <input type="file" class="upload file-upload up1"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group m-form__group">
                                        <label for="facebook">تعديل رابط facebook</label>
                                        <input id="facebook" type="text" class="form-control m-input"
                                               value="" placeholder="https://www.facebook.com/PageName">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group m-form__group">
                                        <label for="facebook">تعديل رابط instagram</label>
                                        <input id="facebook" type="text" class="form-control m-input"
                                               value="" placeholder="https://www.instagram.com/shadidsoft">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group m-form__group">
                                        <label for="description">الوصف</label>
                                        <textarea id="description" class="form-control no-resize" placeholder="اكتب الوصف"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group m-form__group">
                                        <label for="description">الوصف</label>
                                        <textarea id="description" class="form-control no-resize" placeholder="اكتب الوصف"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <p class="font-weight-bold">تغير الموقع على الخريطة:</p>
                                    <div id="map_1"></div>
                                    <input type="hidden" id="lat">
                                    <input type="hidden" id="lng">

                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-success  m-btn">
                                        حفظ
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
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

<script src="assets/js/parsley.min.js"></script>
<script>
    $(document).ready(function () {

        var readURL = function (input = ['file']) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.pic1').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };

        $(".up1").on('change', function () {
            readURL(this);
        });


    });
</script>
<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(31.511153667989184, 34.93505459124765),
            zoom: 7,
        };
        var map = new google.maps.Map(document.getElementById("map_1"), mapProp);

        google.maps.event.addListener(map, 'click', function (event) {
            var lang = event.latLng.lng();
            var lat = event.latLng.lat();
            $("#lng").val(lang);
            document.getElementById("lat").value = lat;

        });
        var marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(31.511153667989184, 34.93505459124765),
            icon: 'assets/images/marker1.png'
        });
        google.maps.event.addListener(map, 'click', function (event) {
            marker.setPosition(event.latLng);
            console.log(document.getElementById("lng").value);
            console.log(document.getElementById("lat").value);
        });
    }


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwQWgqTGypi82vAyP97l2O5Zi_RBiVA5E&amp;callback=myMap "></script>
</body>

<!-- end::Body -->
</html>
