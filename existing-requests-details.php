<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || تفاصيل الطلب الحالي</title>
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
                        <h3 class="m-subheader__title ">تفاصيل الطلب الحالي</h3>
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
                                    <a href="#" data-toggle="modal" data-target="#m_modal_5" class="btn btn-success  m-btn m-btn--custom m-btn--icon d-block text-center mb-3">
                                    <span class="m-auto">
                                        <i class="fas fa-check"></i>
                                        <span> قبول الطلب </span>
                                    </span>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#m_modal_3" class="btn btn-danger  m-btn m-btn--custom m-btn--icon d-block text-center mb-3">
                                    <span class="m-auto">
                                       <i class="fas fa-power-off"></i>
                                        <span> رفض الطلب </span>
                                    </span>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#m_modal_1" class="btn btn-primary m-btn m-btn--custom m-btn--icon d-block text-center mb-3">
                                    <span class="m-auto">
                                        <i class="fas fa-edit"></i>
                                        <span> تعديل </span>
                                    </span>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#m_modal_2" class="btn btn-warning m-btn m-btn--custom m-btn--icon d-block text-center mb-3">
                                    <span class="m-auto">
                                        <i class="fas fa-coins"></i>
                                        <span> رسوم اضافية </span>
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
                                                    <div class="col-12 d-print-block d-none">
                                                        <div class="row justify-content-between align-items-center">
                                                            <div class="col-auto">
                                                                <img src="assets/images/tuku_logo.png" class="header-invoice-img" alt="">
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="title-print">
                                                                    <h3 class="m-0">
                                                                        شركة توكو للنقل السريع
                                                                    </h3>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p class="mt-2 mb-0 fs-20">
                                                                        مشتغل مرخص : 562587022
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>اسم صاحب الطلب:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="حمزة أبو عيطة">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>رقم هاتف صاحب الطلب:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="0595779004">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>اسم السائق:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="حمزة أبو عيطة">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>رقم هاتف السائق:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="0595779004">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>منطقة البداية:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="سلواد - رام الله">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>منطقة النهاية:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="يطا - الخليل	">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>سعر الحمولة:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="500 ₪">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>سعر التوصيل:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="20 ₪">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>عدد الطرود:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="5">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>محتوى الحمولة:</label>
                                                            <input type="text" disabled
                                                                   class="form-control m-input m-input--square"
                                                                   value="لابتوبات">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-6 col-md-6-print">
                                                        <div class="form-group m-form__group mb-4">
                                                            <label>وقت استلام الطلب:</label>
                                                            <input type="text" disabled dir="ltr"
                                                                   class="form-control text-left m-input m-input--square"
                                                                   value="10/01 01:00 PM">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row invoice-footer align-items-center mt-3">
                                                    <div class="col-12 d-print-block d-none">
                                                        <p class="mb-0 text-danger fs-20">
                                                            ملاحظة: شركة توكو للنقل السريع غير مسؤولة عن محتوى
                                                            الطرد
                                                        </p>
                                                    </div>
                                                    <div class="col-12 d-print-block d-none">
                                                        <div class="border-bottom dark-border mt-3 mb-3"></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <img src="assets/images/tuku_logo.png" class="invoice-footer-logo" alt="">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <ul class="invoice-footer-icon list-unstyled text-left m-0 p-0">
                                                            <li>
                                                                <span>العنوان: </span>
                                                                رام الله والبيرة - شارع نابلس - عمارة السلوادي ط5
                                                            </li>
                                                            <li>
                                                                <span>هاتف رقم: </span>
                                                                022410974 / 0566201050
                                                            </li>
                                                            <li>
                                                                <span> بريد الكتروني: </span>
                                                                info@tukuapp.com
                                                            </li>
                                                            <li>
                                                                <span> موقع الكتروني: </span>
                                                                www.tukuapp.com
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul class=" list-unstyled text-right m-0 p-0">
                                                            <li>
                                                                TukuDelivery
                                                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                                                                    <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path>
                                                                </svg>

                                                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                                                                    <path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" class=""></path>
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row print-d-none">
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

<!--begin::Modal-->
<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <form action="#">

        <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات الطلبيه</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">اسم صاحب الطلب:</label>
                                <input type="text" class="form-control m-input"
                                       value="حمزة" placeholder="اسم صاحب الطلب">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">رقم هاتف صاحب الطلب:</label>
                                <input type="text" class="form-control m-input"
                                       value="0595779004" placeholder="رقم هاتف صاحب الطلب">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">اسم مستلم الطلب:</label>
                                <input type="text" class="form-control m-input"
                                       value="اسم مستلم الطلب" placeholder="اسم مستلم الطلب">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">رقم هاتف مستلم الطلب:</label>
                                <input type="text" class="form-control m-input"
                                       value="0595779004" placeholder="رقم هاتف مستلم الطلب">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">منطقة البداية:</label>
                                <input type="text" class="form-control m-input"
                                       value="منطقة البداية" placeholder="منطقة البداية">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">منطقة النهاية:</label>
                                <input type="text" class="form-control m-input"
                                       value="منطقة النهاية" placeholder="منطقة النهاية">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">السائق:</label>
                                <input type="text" class="form-control m-input"
                                       value="منطقة النهاية" placeholder="منطقة النهاية">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">قيمة التحصيل:</label>
                                <div class="input-group">
                                    <input type="number" class="form-control m-input" value="10" placeholder="قيمة التحصيل" aria-describedby="basic-addon2">
                                    <div class="input-group-append"><span class="input-group-text" id="basic-addon2">₪</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary">تعديل</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="m_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <form action="#">

        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">رسوم اضافية</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">رسوم اضافية:</label>
                                <div class="input-group">
                                    <input type="number" class="form-control m-input" value="10" placeholder="رسوم اضافية" aria-describedby="basic-addon2">
                                    <div class="input-group-append"><span class="input-group-text" id="basic-addon2">₪</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary">تعديل</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <form action="#">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">قبول الطلب</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        هل انت متأكد من قبول طلب التوصيل؟
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="button" class="btn btn-success">تفعيل</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="m_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <form action="#">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">رفض الطلب</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        هل انت متأكد من رفض طلب التوصيل؟
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-danger">رفض</button>
                </div>
            </div>
        </form>
    </div>
</div>

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
