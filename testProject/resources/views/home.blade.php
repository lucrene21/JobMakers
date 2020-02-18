@extends('layouts.default')

@section('css')
    <link rel="stylesheet" media="screen, print"
          href="{{asset('theme')}}/css/datagrid/datatables/datatables.bundle.css">
@endsection

@section('contenu')
    <main id="js-page-content" role="main" class="page-content">
        <div class="subheader">
            <h1 class="subheader-title">
                <i class="subheader-icon fal fa-chart-area"></i> Statistics <span class="fw-300">Dashboard</span>
            </h1>
            <div class="d-flex mr-4">
                <div class="mr-2">
                    <span class="peity-donut"
                          data-peity="{ &quot;fill&quot;: [&quot;#967bbd&quot;, &quot;#ccbfdf&quot;],  &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }"
                          style="display: none;">7/10</span>
                    <svg class="peity" height="40" width="40">
                        <path
                            d="M 20 0 A 20 20 0 1 1 0.9788696740969307 26.18033988749895 L 6.685208771867851 24.326237921249266 A 14 14 0 1 0 20 6"
                            data-value="7" fill="#967bbd"></path>
                        <path
                            d="M 0.9788696740969307 26.18033988749895 A 20 20 0 0 1 19.999999999999996 0 L 19.999999999999996 6 A 14 14 0 0 0 6.685208771867851 24.326237921249266"
                            data-value="3" fill="#ccbfdf"></path>
                    </svg>
                </div>
                <div>
                    <label class="fs-sm mb-0 mt-2 mt-md-0">New Jobs</label>
                    <h4 class="font-weight-bold mb-0">70.60%</h4>
                </div>
            </div>
            <div class="d-flex mr-0">
                <div class="mr-2">
                    <span class="peity-donut"
                          data-peity="{ &quot;fill&quot;: [&quot;#2196F3&quot;, &quot;#9acffa&quot;],  &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }"
                          style="display: none;">3/10</span>
                    <svg class="peity" height="40" width="40">
                        <path
                            d="M 20 0 A 20 20 0 0 1 39.02113032590307 26.18033988749895 L 33.31479122813215 24.326237921249263 A 14 14 0 0 0 20 6"
                            data-value="3" fill="#2196F3"></path>
                        <path
                            d="M 39.02113032590307 26.18033988749895 A 20 20 0 1 1 19.999999999999996 0 L 19.999999999999996 6 A 14 14 0 1 0 33.31479122813215 24.326237921249263"
                            data-value="7" fill="#9acffa"></path>
                    </svg>
                </div>
                <div>
                    <label class="fs-sm mb-0 mt-2 mt-md-0">Finish Jobs</label>
                    <h4 class="font-weight-bold mb-0">5</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                    @if(Auth::user()->isAdmin())
                        <div class="">
                            <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                {{ \App\Models\User::count() }}
                                <small class="m-0 l-h-n">Total users</small>
                            </h3>
                        </div>
                        <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1"
                           style="font-size:6rem"></i>
                    @else
                        <div class="">
                            <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                {{ Auth::user()->offers()->count() }}
                                <small class="m-0 l-h-n">Total Offers</small>
                            </h3>
                        </div>
                        <i class="fal fa-credit-card position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4"
                           style="font-size: 6rem;"></i>
                    @endif
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            @if(Auth::user()->isAdmin())
                                {{ \App\Models\Job::count() }}
                            @else
                                {{ Auth::user()->jobs()->count() }}
                            @endif
                            <small class="m-0 l-h-n">Total Jobs</small>
                        </h3>
                    </div>
                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4"
                       style="font-size: 6rem;"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            @if(Auth::user()->isAdmin())
                                {{ \App\Models\Order::count() }}
                            @else
                                {{ Auth::user()->orders()->count() }}
                            @endif
                            <small class="m-0 l-h-n">Total works</small>
                        </h3>
                    </div>
                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6"
                       style="font-size: 8rem;"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            @if(Auth::user()->isAdmin())
                                {{ \App\Models\Payment::count() }}
                            @else
                                {{ \App\Models\Payment::whereIn('order_id', Auth::user()->orders()->pluck('id'))->count() }}
                            @endif
                            <small class="m-0 l-h-n">Total payments</small>
                        </h3>
                    </div>
                    <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4"
                       style="font-size: 6rem;"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 sortable-grid ui-sortable">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Marketing profits
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content bg-subtlelight-fade">
                            <div id="js-checkbox-toggles" class="d-flex mb-3">
                                <div class="custom-control custom-switch mr-2">
                                    <input type="checkbox" class="custom-control-input" name="gra-0" id="gra-0"
                                           checked="checked">
                                    <label class="custom-control-label" for="gra-0">Target Profit</label>
                                </div>
                                <div class="custom-control custom-switch mr-2">
                                    <input type="checkbox" class="custom-control-input" name="gra-1" id="gra-1"
                                           checked="checked">
                                    <label class="custom-control-label" for="gra-1">Actual Profit</label>
                                </div>
                                <div class="custom-control custom-switch mr-2">
                                    <input type="checkbox" class="custom-control-input" name="gra-2" id="gra-2"
                                           checked="checked">
                                    <label class="custom-control-label" for="gra-2">User Signups</label>
                                </div>
                            </div>
                            <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
    <script src="{{asset('theme')}}/js/statistics/peity/peity.bundle.js"></script>
    <script src="{{asset('theme')}}/js/statistics/flot/flot.bundle.js"></script>
    <script src="{{asset('theme')}}/js/statistics/easypiechart/easypiechart.bundle.js"></script>

    <script>
        /* defined datas */
        $(document).ready(function () {
            setTimeout(() => {
                var dataTargetProfit = [
                    [1354586000000, 153],
                    [1364587000000, 658],
                    [1374588000000, 198],
                    [1384589000000, 663],
                    [1394590000000, 801],
                    [1404591000000, 1080],
                    [1414592000000, 353],
                    [1424593000000, 749],
                    [1434594000000, 523],
                    [1444595000000, 258],
                    [1454596000000, 688],
                    [1464597000000, 364]
                ]
                var dataProfit = [
                    [1354586000000, 53],
                    [1364587000000, 65],
                    [1374588000000, 98],
                    [1384589000000, 83],
                    [1394590000000, 980],
                    [1404591000000, 808],
                    [1414592000000, 720],
                    [1424593000000, 674],
                    [1434594000000, 23],
                    [1444595000000, 79],
                    [1454596000000, 88],
                    [1464597000000, 36]
                ]
                var dataSignups = [
                    [1354586000000, 647],
                    [1364587000000, 435],
                    [1374588000000, 784],
                    [1384589000000, 346],
                    [1394590000000, 487],
                    [1404591000000, 463],
                    [1414592000000, 479],
                    [1424593000000, 236],
                    [1434594000000, 843],
                    [1444595000000, 657],
                    [1454596000000, 241],
                    [1464597000000, 341]
                ]

                var data = [
                    {
                        label: "Target Profit",
                        data: dataTargetProfit,
                        color: color.info._400,
                        bars:
                            {
                                show: true,
                                align: "center",
                                barWidth: 30 * 30 * 60 * 1000 * 80,
                                lineWidth: 0,
                                /*fillColor: {
                                    colors: [color.primary._500, color.primary._900]
                                },*/
                                fillColor:
                                    {
                                        colors: [
                                            {
                                                opacity: 0.9
                                            },
                                            {
                                                opacity: 0.1
                                            }]
                                    }
                            },
                        highlightColor: 'rgba(255,255,255,0.3)',
                        shadowSize: 0
                    },
                    {
                        label: "Actual Profit",
                        data: dataProfit,
                        color: color.warning._500,
                        lines:
                            {
                                show: true,
                                lineWidth: 2
                            },
                        shadowSize: 0,
                        points:
                            {
                                show: true
                            }
                    },
                    {
                        label: "User Signups",
                        data: dataSignups,
                        color: color.success._500,
                        lines:
                            {
                                show: true,
                                lineWidth: 2
                            },
                        shadowSize: 0,
                        points:
                            {
                                show: true
                            }
                    }]

                var options = {
                    grid:
                        {
                            hoverable: true,
                            clickable: true,
                            tickColor: '#f2f2f2',
                            borderWidth: 1,
                            borderColor: '#f2f2f2'
                        },
                    tooltip: true,
                    tooltipOpts:
                        {
                            cssClass: 'tooltip-inner',
                            defaultTheme: false
                        },
                    xaxis:
                        {
                            mode: "time"
                        },
                    yaxes:
                        {
                            tickFormatter: function (val, axis) {
                                return "$" + val;
                            },
                            max: 1200
                        }

                };

                var plot2 = null;

                function plotNow() {
                    var d = [];
                    $("#js-checkbox-toggles").find(':checkbox').each(function () {
                        if ($(this).is(':checked')) {
                            d.push(data[$(this).attr("name").substr(4, 1)]);
                        }
                    });
                    if (d.length > 0) {
                        if (plot2) {
                            plot2.setData(d);
                            plot2.draw();
                        } else {
                            plot2 = $.plot($("#flot-toggles"), d, options);
                        }
                    }

                };

                $("#js-checkbox-toggles").find(':checkbox').on('change', function () {
                    plotNow();
                });
                plotNow()
            }, 500);
        });
    </script>


@endsection
