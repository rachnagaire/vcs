<!doctype html>
<html lang="en">

<head>
    <?php include 'inc/head.php'; ?> 
</head>

<body>
    <h1 class="sr-only">Vesuvio Admin Template</h1>
    <div class="wrapper">
        <!-- aside navigation starts -->
        <?php include 'inc/aside.php'; ?> 
        <!-- aside navigation ends -->

        <!-- main starts -->
        <main role="main" class="main">
            <!-- topbar starts -->
            <?php include 'inc/top-sticky.php'; ?> 
            <!-- topbar ends -->

            <!-- main content starts -->
        <div class="main-content">
                <div class="container-fluid">
                    <!-- page head starts -->
                    <div class="page-head d-flex justify-content-between">
                        <!-- page head ends -->
                        <h3 class="mb-5">Welcome Jarvis,</h3>

                    </div>
                    <!-- quick stats starts -->
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card p-4 quickstats mb-5">
                                <h6>
                                    <span class="pr-4 quickstats-title">Today's Income</span>
                                </h6>
                                <i class="fas fa-hand-holding-usd quickstats-icon h3"></i>
                                <p class="quickstats-data text-blue h1 text-right font-weight-bold">₤45</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card p-4 quickstats mb-5">
                                <h6>
                                    <span class="pr-4 quickstats-title">Today's Revenue</span>
                                </h6>
                                <i class="fas fa-file-invoice-dollar quickstats-icon h3"></i>
                                <p class="quickstats-data text-red h1 text-right font-weight-bold">₤125</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card p-4 quickstats mb-5">
                                <h6>
                                    <span class="pr-4 quickstats-title">Today's Insurance Registered</span>
                                </h6>
                                <i class="fas fa-users quickstats-icon h3"></i>
                                <p class="quickstats-data text-green h1 text-right font-weight-bold">15</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card p-4 quickstats mb-5">
                                <h6>
                                    <span class="pr-4 quickstats-title">Total Claim</span>
                                </h6>
                                <i class="fas fa-umbrella quickstats-icon h3"></i>
                                <p class="quickstats-data text-neon h1 text-right font-weight-bold">980</p>
                            </div>
                        </div>
                    </div>
                    <!-- quick stats ends -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card px-5 py-4 mb-5">
                                <div class="card-header px-0">
                                    <h6>Activity</h6>
                                    <p class="text-support">Nunc fermentum, massa sit amet tristique imperdiet</p>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-responsive-sm table-custom">
                                        <colgroup>
                                            <col width="50px">
                                        </colgroup>
                                        <tr>
                                            <td>
                                                <span class="user-item">
                                                    <img src="assets/img/profile-1.png" alt="Son">
                                                </span>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td class="text-right text-small font-italic">2 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-item">
                                                    <img src="assets/img/profile-2.png" alt="Son">
                                                </span>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td class="text-right text-small font-italic">2 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-item">
                                                    <img src="assets/img/profile-3.png" alt="Son">
                                                </span>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td class="text-right text-small font-italic">2 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-item">
                                                    <img src="assets/img/profile-4.png" alt="Son">
                                                </span>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td class="text-right text-small font-italic">2 hours ago</td>
                                        </tr>

                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card px-5 py-4 mb-5">
                                <div class="card-header px-0">
                                    <h6>Stats</h6>
                                    <p class="text-support">Nunc fermentum, massa sit amet tristique imperdiet</p>
                                </div>
                                <div class="card-body p-0 chart-height-A">
                                    <canvas id="chart-2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card px-5 py-4 dbox-height-sm mb-5">
                                <div class="card-header px-0 mb-4">
                                    <h6>News</h6>
                                </div>
                                <div class="card-body p-0" id="news">
                                    <div class="media mb-5">
                                        <div class="media-img square-img mr-4">
                                            <img class="mr-3" src="assets/img/mobile.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="text-secondary"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin. Cras purus odio</a>
                                        </div>
                                    </div>
                                    <div class="media mb-5">
                                        <div class="media-img square-img mr-4">
                                            <img class="mr-3" src="assets/img/earth.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="text-secondary"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin. Cras purus odio</a>
                                        </div>
                                    </div>
                                    <div class="media mb-5">
                                        <div class="media-img square-img mr-4">
                                            <img class="mr-3" src="assets/img/landscape.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="text-secondary"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin. Cras purus odio</a>
                                        </div>
                                    </div>
                                    <div class="media mb-5">
                                        <div class="media-img square-img mr-4">
                                            <img class="mr-3" src="assets/img/boats.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="text-secondary"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin. Cras purus odio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card px-5 py-4 dbox-height-sm mb-5">
                                <div class="card-header px-0">
                                    <h6>New Users</h6>
                                    <p class="text-support">Nunc fermentum, massa sit amet tristique imperdiet</p>
                                </div>

                                <div class="card-body p-0" id="new-users">
                                    <table class="table table-responsive-sm table-custom">
                                        <colgroup>
                                            <col width="50px">
                                        </colgroup>
                                        <tr>
                                            <td>
                                                <span class="user-item">
                                                    <img src="assets/img/profile-1.png" alt="Son">
                                                </span>
                                            </td>
                                            <td>Suspendisse</td>
                                            <td class="text-right text-small">2 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-item">
                                                    <img src="assets/img/profile-2.png" alt="Son">
                                                </span>
                                            </td>
                                            <td>Condimentum</td>
                                            <td class="text-right text-small">2 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-item">
                                                    <img src="assets/img/profile-3.png" alt="Son">
                                                </span>
                                            </td>
                                            <td>Tellus Nisi</td>
                                            <td class="text-right text-small">2 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-item">
                                                    <img src="assets/img/profile-4.png" alt="Son">
                                                </span>
                                            </td>
                                            <td>Amet Tellus Nisi</td>
                                            <td class="text-right text-small">2 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="user-item">
                                                    <img src="assets/img/profile-4.png" alt="Son">
                                                </span>
                                            </td>
                                            <td>Amet Tellus Nisi</td>
                                            <td class="text-right text-small">2 hours ago</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card px-5 py-4 dbox-height-sm mb-5">
                                <div class="card-header px-0">
                                    <h6>Notice</h6>
                                </div>
                                <div class="card-body p-0" id="notice">
                                    <ul class="text-list">
                                        <li>
                                            <a href="#">Pellentesque felis velit, molestie vel tortor id, porttitor imperdiet mauris.
                                                Sed fauci aliquet eros vel commodo.</a>
                                        </li>
                                        <li>
                                            <a href="#">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin. Cras purus odio</a>
                                        </li>
                                        <li>
                                            <a href="#">Pellentesque felis velit, molestie vel tortor id, porttitor imperdiet mauris.
                                                Sed fauci aliquet eros vel commodo.</a>
                                        </li>
                                        <li>
                                            <a href="#">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin. Cras purus odio</a>
                                        </li>
                                        <li>
                                            <a href="#">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin. Cras purus odio</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- main content ends -->
        </main>
        <!-- main ends -->
    </div>

    <!-- all js goes here -->
    <?php include 'inc/themejs.php'; ?>

    <!-- scrolljs initiater -->
    <script>
        $(function () {            
            $('#news, #new-users, #notice').slimScroll({
                height: '300px',
                size: '5px',
                alwaysVisible: false
            });
            
        });
    </script>


    <!-- charjs.org -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script src="assets/js/utils.js"></script>
    <script>
        var presets = window.chartColors;
        var utils = Samples.utils;
        var inputs = {
            min: -100,
            max: 100,
            count: 8,
            decimals: 2,
            continuity: 1
        };

        function generateData(config) {
            return utils.numbers(Chart.helpers.merge(inputs, config || {}));
        }

        function generateLabels(config) {
            return utils.months(Chart.helpers.merge({
                count: inputs.count,
                section: 3
            }, config || {}));
        }

        var options = {
            maintainAspectRatio: false,
            spanGaps: false,
            elements: {
                line: {
                    tension: 0.000001
                }
            },
            plugins: {
                filler: {
                    propagate: false
                }
            },
            scales: {
                xAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    }
                }]
            }
        };

        [false, 'origin', 'start', 'end'].forEach(function (boundary, index) {

            // reset the random seed to generate the same data for all charts
            utils.srand(8);

            new Chart('chart-' + index, {
                type: 'line',
                data: {
                    labels: generateLabels(),
                    datasets: [{
                        backgroundColor: utils.transparentize(presets.blue),
                        borderColor: presets.blue,
                        data: generateData(),
                        label: 'Dataset',
                        fill: boundary,
                    }],

                },
                options: Chart.helpers.merge(options, {
                    title: {
                        text: 'fill: ' + boundary,
                        display: false
                    },
                    elements: {
                        line: {
                            tension: 0.5,
                        }
                    }

                })
            });

        });
        
    </script>
</body>

</html>