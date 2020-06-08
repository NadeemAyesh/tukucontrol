<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || احصائيات</title>
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
                        <h3 class="m-subheader__title ">احصائيات توكو</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <!--begin:: Widgets/Stats-->
                <div class="m-portlet pb-3 pt-3 my-statistics">
                    <div class="m-portlet__body  m-portlet__body--no-padding">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-md-12 col-lg-6 col-xl-3">

                                <!--begin::New Feedbacks-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            ارباح
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-info">
													₪15000
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-info" role="progressbar" style="width: 100%;"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::New Feedbacks-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-3">

                                <!--begin::New Orders-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            طلبات
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-danger">
													567
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-danger" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::New Orders-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-3">

                                <!--begin::New Users-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            المستخدمين
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-success">
													250
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-success" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::New Users-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-3">
                                <!--begin::New Users-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                             السائقيين
                                        </h4><br>

                                        <span class="m-widget24__stats m--font-warning">
													50
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-warning" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>
                                <!--end::New Users-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                                <h3 class="m-portlet__head-text">
                                    أكثر 10 مستخدمين طلبا
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div id="chartdiv2"></div>
                    </div>
                </div>
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    أكثر 5 مدن طلبا
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">

                        <!--begin::Section-->
                   
                            <div class="m-section__content">
                                <table class="table table-striped m-table m-table--head-bg-info best-provider-table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم المدينة</th>
                                        <th>عدد الطلبات</th>
                                        <th>اجمالي الأرباح</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>رام الله</td>
                                        <td>20</td>
                                        <td>₪4000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>الخليل</td>
                                        <td>18</td>
                                        <td>₪3500</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>نابلس</td>
                                        <td>17</td>
                                        <td>₪3000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>جنين</td>
                                        <td>15</td>
                                        <td>₪2800</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>طولكرم</td>
                                        <td>13</td>
                                        <td>₪2200</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        <!--end::Section-->
                    </div>

                    <!--end::Form-->
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


<!--end::Modal-->


<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!-- Resources -->
<script src="assets/js/core.js"></script>
<script src="assets/js/charts.js"></script>
<script src="assets/js/animated.js"></script>

<script>
    am4core.ready(function () {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
        var chart = am4core.create("chartdiv2", am4charts.XYChart);
        chart.scrollbarX = new am4core.Scrollbar();

// Add data
        chart.data = [{
            "country": "ارامكو",
            "visits": 3025
        }, {
            "country": "حمزة",
            "visits": 1882
        }, {
            "country": "محمد",
            "visits": 1809
        }, {
            "country": "احمد",
            "visits": 1322
        }, {
            "country": "خالد",
            "visits": 1122
        }, {
            "country": "نور",
            "visits": 1114
        }, {
            "country": "مؤيد",
            "visits": 984
        }, {
            "country": "حازم",
            "visits": 711
        }, {
            "country": "فوزي",
            "visits": 665
        }, {
            "country": "فايق",
            "visits": 580
        }];

// Create axes
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "country";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.minGridDistance = 30;
        categoryAxis.renderer.labels.template.horizontalCenter = "right";
        categoryAxis.renderer.labels.template.verticalCenter = "middle";
        categoryAxis.renderer.labels.template.rotation = 270;
        categoryAxis.tooltip.disabled = true;
        categoryAxis.renderer.minHeight = 110;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.minWidth = 50;

// Create series
        var series = chart.series.push(new am4charts.ColumnSeries());
        series.sequencedInterpolation = true;
        series.dataFields.valueY = "visits";
        series.dataFields.categoryX = "country";
        series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
        series.columns.template.strokeWidth = 0;

        series.tooltip.pointerOrientation = "vertical";

        series.columns.template.column.cornerRadiusTopLeft = 10;
        series.columns.template.column.cornerRadiusTopRight = 10;
        series.columns.template.column.fillOpacity = 0.8;

// on hover, make corner radiuses bigger
        var hoverState = series.columns.template.column.states.create("hover");
        hoverState.properties.cornerRadiusTopLeft = 0;
        hoverState.properties.cornerRadiusTopRight = 0;
        hoverState.properties.fillOpacity = 1;

        series.columns.template.adapter.add("fill", function (fill, target) {
            return chart.colors.getIndex(target.dataItem.index);
        });

// Cursor
        chart.cursor = new am4charts.XYCursor();

    }); // end am4core.ready()

</script>
</body>

<!-- end::Body -->
</html>
