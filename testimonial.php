<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || أراء العملاء</title>
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
                        <h3 class="m-subheader__title ">أرآء العملاء</h3>
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
                                    أرآء العملاء
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <a href="#" data-toggle="modal" data-target="#m_modal_6" class="btn btn-success  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                        <i class="fas fa-plus-circle"></i>
                                        <span> مستخدم جديد </span>
                                    </span>
                            </a>
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
                                    <th>صورة العميل</th>
                                    <th>اسم العميل</th>
                                    <th>وظيفة العميل</th>
                                    <th>محتوى التقيم</th>
                                    <th>عمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="clint-img">
                                        <img src="assets/app/media/img/users/user4.jpg" alt="">
                                    </td>
                                    <td>حمزة ابو عيطة</td>
                                    <td>مدير مشروع مضياف</td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#m_modal_1"
                                                class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only">
                                            <i class="fa fa-envelope"></i>
                                        </button>
                                    </td>
                                    <td>
                                         <span class="dropdown user-option rtl-drop">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_5" data-toggle="modal"
                                               data-target="#m_modal_5"><i
                                                        class="la la-edit"></i> تعديل  </a>


                                               <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                                  data-target="#m_modal_3">
                                                   <i class="la la-trash"></i> حذف</a>
                                        </div>
                                    </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="clint-img">
                                        <img src="assets/app/media/img/users/user4.jpg" alt="">
                                    </td>
                                    <td>حمزة ابو عيطة</td>
                                    <td>مدير مشروع مضياف</td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#m_modal_1"
                                                class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only">
                                            <i class="fa fa-envelope"></i>
                                        </button>
                                    </td>
                                    <td>
                                         <span class="dropdown user-option rtl-drop">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_5" data-toggle="modal"
                                               data-target="#m_modal_5"><i
                                                        class="la la-edit"></i> تعديل  </a>


                                               <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                                  data-target="#m_modal_3">
                                                   <i class="la la-trash"></i> حذف</a>
                                        </div>
                                    </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="clint-img">
                                        <img src="assets/app/media/img/users/user4.jpg" alt="">
                                    </td>
                                    <td>حمزة ابو عيطة</td>
                                    <td>مدير مشروع مضياف</td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#m_modal_1"
                                                class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only">
                                            <i class="fa fa-envelope"></i>
                                        </button>
                                    </td>
                                    <td>
                                         <span class="dropdown user-option rtl-drop">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_5" data-toggle="modal"
                                               data-target="#m_modal_5"><i
                                                        class="la la-edit"></i> تعديل  </a>


                                               <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                                  data-target="#m_modal_3">
                                                   <i class="la la-trash"></i> حذف</a>
                                        </div>
                                    </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
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

<!--begin::Modal-->
<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <form action="#">

        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">محتوى التقييم</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                        التطبيق.
                        إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص
                        لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                        يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="m_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <form action="#">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">حذف</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        هل انت متأكد من حذف رأي العميل؟
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-danger">حذف</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="m_modal_6" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="user_register_form" data-parsley-validate="" data-parsley-trigger="change">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">رأي عميل جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-12 mb-4">
                            <div class="edit-profile-photo">
                                <img class="profile-pic pic1"
                                     src="assets/app/media/img/users/user4.jpg"
                                     alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span>اختر صورة العميل</span>
                                        <input type="file" required class="upload file-upload up1"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group mb-4">
                                <label>اسم العميل:</label>
                                <input required type="text" placeholder="اسم العميل" name="user_name"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group mb-4">
                                <label>المسمى الوظيفي:</label>
                                <input required type="text" placeholder="المسمى الوظيفي" name="user_name"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group m-form__group mb-4">
                                <label>نص التقييم:</label>
                                <textarea required class="form-control no-resize" placeholder="نص التقييم"></textarea>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-info">اضافة</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="user_register_form" data-parsley-validate="" data-parsley-trigger="change">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">تعديل رأي العميل</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-12 mb-4">
                            <div class="edit-profile-photo">
                                <img class="profile-pic pic1"
                                     src="assets/app/media/img/users/user4.jpg"
                                     alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span>اختر صورة العميل</span>
                                        <input type="file" required class="upload file-upload up1"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group mb-4">
                                <label>اسم العميل:</label>
                                <input required type="text" placeholder="اسم العميل" name="user_name"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group mb-4">
                                <label>المسمى الوظيفي:</label>
                                <input required type="text" placeholder="المسمى الوظيفي" name="user_name"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group m-form__group mb-4">
                                <label>نص التقييم:</label>
                                <textarea required class="form-control no-resize" placeholder="نص التقييم"></textarea>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-info">اضافة</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--end::Modal-->


<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->


<!--begin::Page Scripts -->
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<script src="assets/demo/default/custom/crud/datatables/basic/headers.js" type="text/javascript"></script>
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
</body>

<!-- end::Body -->
</html>
