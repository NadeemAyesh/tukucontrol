<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || تفاصبل المستخدمين</title>
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
                        <h3 class="m-subheader__title ">تفاصيل الأدمن</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="m-portlet m-portlet--full-height  ">
                            <div class="m-portlet__body">
                                <div class="m-card-profile">
                                    <div class="m-card-profile__pic">
                                        <div class="m-card-profile__pic-wrapper mt-0">
                                            <img src="assets/app/media/img/users/user4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="m-card-profile__details">
                                        <span class="m-card-profile__name">اسم الأدمن</span>
                                        <a href="" class="m-card-profile__email m-link">admin@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--info"
                                        role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                               href="#m_user_profile_tab_1" role="tab">
                                                <i class="flaticon-share m--hide"></i>
                                                تعديل البيانات
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_user_profile_tab_2" role="tab">
                                                تغير كلمة المرور
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                    <form class="m-form m-form--fit m-form--label-align-right"
                                          data-parsley-validate="" data-parsley-trigger="change">
                                        <div class="m-portlet__body">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="edit-profile-photo">
                                                        <img class="profile-pic pic1"
                                                             src="assets/app/media/img/users/user4.jpg"
                                                             alt="">
                                                        <div class="change-photo-btn">
                                                            <div class="photoUpload">
                                                                <span> اختر صورة<i class="fa fa-upload ml-1"></i></span>
                                                                <input type="file" class="upload file-upload up1"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input"
                                                               class="col-12 col-form-label text-left">الأسم:</label>
                                                        <div class="col-12">
                                                            <input required class="form-control m-input" type="text"
                                                                   value="اسم الأدمن">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input"
                                                               class="col-12 col-form-label text-left">البريد
                                                            الإلكتروني:</label>
                                                        <div class="col-12">
                                                            <input required class="form-control m-input" type="email"
                                                                   value="admin@admin.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="m-portlet__foot m-portlet__foot--fit">
                                            <div class="m-form__actions">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="submit"
                                                                class="btn btn-success m-btn m-btn--air m-btn--custom">
                                                            حفظ التغيرات
                                                        </button>&nbsp;&nbsp;
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane " id="m_user_profile_tab_2">
                                    <form class="m-form m-form--fit m-form--label-align-right"
                                          data-parsley-validate="" data-parsley-trigger="change">
                                        <div class="m-portlet__body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input"
                                                               class="col-12 col-form-label text-left">كلمة المرور
                                                            الحالية:</label>
                                                        <div class="col-12">
                                                            <input required class="form-control m-input" type="password"
                                                                   data-parsley-required-message="هذا الحقل مطلوب">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input"
                                                               class="col-12 col-form-label text-left">
                                                                كلمة المرور الجديدة:
                                                        </label>
                                                        <div class="col-12">
                                                            <input required class="form-control m-input" type="password"
                                                                   minlength="6"
                                                                   id="password"
                                                                   data-parsley-minlength-message="يجب ادخال 6 احرف على الأقل"
                                                                   data-parsley-required-message="هذا الحقل مطلوب">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input"
                                                               class="col-12 col-form-label text-left">
                                                            تأكيد كلمة المرور الجديدة:
                                                        </label>
                                                        <div class="col-12">
                                                            <input required class="form-control m-input" type="password"
                                                                   minlength="6"
                                                                    data-parsley-equalto="#password"
                                                                   data-parsley-equalto-message="كلمة المرور لا تطابق"
                                                                   data-parsley-minlength-message="يجب ادخال 6 احرف على الأقل"
                                                                   data-parsley-required-message="هذا الحقل مطلوب">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-portlet__foot m-portlet__foot--fit">
                                            <div class="m-form__actions">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="submit"
                                                                class="btn btn-success m-btn m-btn--air m-btn--custom">
                                                            تغير كلمة المرور
                                                        </button>&nbsp;&nbsp;
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


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->
<!-- Modal -->


<!--end::Modal-->
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script src="assets/js/parsley.min.js"></script>
<script>
    const calculateSale = (listPrice, discount) => {
        listPrice = parseFloat(listPrice);
        discount = parseFloat(discount);
        return (listPrice - (listPrice * discount / 100)) // Sale price
    };
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
<!--end::Global Theme Bundle -->

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
