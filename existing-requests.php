<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || طلبات حالية</title>
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
                        <h3 class="m-subheader__title ">الطلبات</h3>
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
                                    طلبات حالية
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                       <div class="">
                           <h6 class="fw-600">فرز حسب:</h6>
                           <div class="row">
                               <div class="col-lg-3 col-md-6">
                                   <div class="form-group m-form__group">
                                       <label for="example2">اسم المستلم:</label>
                                       <input type="text" class="form-control m-input filter-column1" id="example2"  placeholder="اسم المستلم">
                                   </div>
                               </div>
                               <div class="col-lg-3 col-md-6">
                                   <div class="form-group m-form__group">
                                       <label for="exampleSelect2">نوع الطرد:</label>
                                       <select class="form-control m-input filter-column2" id="exampleSelect2">
                                           <option value="">عرض الكل</option>
                                           <option value="صندوق هدايا">صندوق هدايا</option>
                                           <option value="باقة ورد">باقة ورد	</option>
                                           <option value="اخرى">اخرى</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-lg-3 col-md-6">
                                   <div class="form-group m-form__group">
                                       <label for="exampleSelect2">مكان التسليم محافظة:</label>
                                       <select class="form-control m-input" id="exampleSelect2">
                                           <option value="">عرض الكل</option>
                                           <option value="صندوق هدايا">محافظة</option>
                                           <option value="باقة ورد">محافظة</option>
                                           <option value="اخرى">محافظة</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-lg-3 col-md-6">
                                   <div class="form-group m-form__group">
                                       <label for="exampleSelect2">مكان التسليم مدينة:</label>
                                       <select class="form-control m-input" id="exampleSelect2">
                                           <option value="">عرض الكل</option>
                                           <option value="صندوق هدايا">مدينة</option>
                                           <option value="باقة ورد">مدينة</option>
                                           <option value="اخرى">مدينة</option>
                                       </select>
                                   </div>
                               </div>
                           </div>
                       </div>
                        <div class="table-responsive">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable no-nowrap"
                                   id="m_table_1">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>رقم الطلب</th>
                                    <th>نوع المستخدم</th>
                                    <th> اسم صاحب الطلب</th>
                                    <th>مكان الإستلام</th>
                                    <th>عنوان الإستلام</th>
                                    <th>رقم المستلم</th>
                                    <th>مكان التسليم</th>
                                    <th>عنوان التسليم</th>
                                    <th>نوع الطرد</th>
                                    <th>عدد الطرود</th>
                                    <th>الوزن</th>
                                    <th>تفاصيل اضافية</th>
                                    <th>سعر التوصيل</th>
                                    <th>سعر الطرد</th>
                                    <th>السعر الإجمالي</th>
                                    <th>وقت الإنشاء</th>
                                    <th>عمليات</th>
                                    <th>تفاصيل</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>رقم الطلب</td>
                                    <td>شركة</td>
                                    <td> حمزة خميس</td>
                                    <td>مكان الإستلام</td>
                                    <td>عنوان الإستلام</td>
                                    <td>رقم المستلم</td>
                                    <td>مكان التسليم</td>
                                    <td>عنوان التسليم</td>
                                    <td>صندوق هدايا</td>
                                    <td>عدد الطرود</td>
                                    <td>الوزن</td>
                                    <td>تفاصيل اضافية</td>
                                    <td>سعر التوصيل</td>
                                    <td>سعر الطرد</td>
                                    <td>السعر الإجمالي</td>
                                    <td>وقت الإنشاء</td>
                                    <td>
                                     <span class="dropdown user-option">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_5" data-toggle="modal"
                                               data-target="#m_modal_5"><i
                                                    class="la la-check"></i> قبول الطلب  </a>


                                               <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                                  data-target="#m_modal_3">
                                                   <i class="la la-power-off"></i> رفض الطلب</a>
                                        </div>
                                    </span>
                                    </td>
                                    <td>
                                        <a href="existing-requests-details.php"
                                           class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom
                                       m-btn--pill m-btn--air">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>رقم الطلب</td>
                                    <td>فرد</td>
                                    <td> فوزي نوفل</td>
                                    <td>مكان الإستلام</td>
                                    <td>عنوان الإستلام</td>
                                    <td>رقم المستلم</td>
                                    <td>مكان التسليم</td>
                                    <td>عنوان التسليم</td>
                                    <td>باقة ورد</td>
                                    <td>عدد الطرود</td>
                                    <td>الوزن</td>
                                    <td>تفاصيل اضافية</td>
                                    <td>سعر التوصيل</td>
                                    <td>سعر الطرد</td>
                                    <td>السعر الإجمالي</td>
                                    <td>وقت الإنشاء</td>
                                    <td>
                                     <span class="dropdown user-option">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_5" data-toggle="modal"
                                               data-target="#m_modal_5"><i
                                                    class="la la-check"></i> قبول الطلب  </a>


                                               <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                                  data-target="#m_modal_3">
                                                   <i class="la la-power-off"></i> رفض الطلب</a>
                                        </div>
                                    </span>
                                    </td>
                                    <td>
                                        <a href="existing-requests-details.php"
                                           class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom
                                       m-btn--pill m-btn--air">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>رقم الطلب</td>
                                    <td>فرد</td>
                                    <td> وسيم برزق</td>
                                    <td>مكان الإستلام</td>
                                    <td>عنوان الإستلام</td>
                                    <td>رقم المستلم</td>
                                    <td>مكان التسليم</td>
                                    <td>عنوان التسليم</td>
                                    <td>اخرى</td>
                                    <td>عدد الطرود</td>
                                    <td>الوزن</td>
                                    <td>تفاصيل اضافية</td>
                                    <td>سعر التوصيل</td>
                                    <td>سعر الطرد</td>
                                    <td>السعر الإجمالي</td>
                                    <td>وقت الإنشاء</td>
                                    <td>
                                     <span class="dropdown user-option">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_5" data-toggle="modal"
                                               data-target="#m_modal_5"><i
                                                    class="la la-check"></i> قبول الطلب  </a>


                                               <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                                  data-target="#m_modal_3">
                                                   <i class="la la-power-off"></i> رفض الطلب</a>
                                        </div>
                                    </span>
                                    </td>
                                    <td>
                                        <a href="existing-requests-details.php"
                                           class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom
                                       m-btn--pill m-btn--air">
                                            <i class="far fa-eye"></i>
                                        </a>
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
                    <div class="form-group m-form__group">
                        <input type="text" class="form-control m-input" id="exampl" placeholder="سبب الرفض">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-danger">رفض</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--end::Modal-->


<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->


<!--begin::Page Scripts -->
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
<script>
    var DatatablesBasicHeaders = {
        init: function () {
            var table = $("#m_table_1");
            table.DataTable({
                responsive:true,
                initComplete: function() {

                }
            });

            $('.filter-column1').on('keyup change', function() {
                table.dataTable().fnFilter(this.value,3);
            });
                $('.filter-column2').on('keyup change', function() {
                    table.dataTable().fnFilter(this.value,9);
                });

        }
    };
    jQuery(document).ready(function () {
        DatatablesBasicHeaders.init()
    });

</script>
<script src="assets/js/parsley.min.js"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
