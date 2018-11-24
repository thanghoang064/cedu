<div id="main-wrapper">
    <div  style="border: 1px solid #ccc;
    margin:48px 27px 57px 0px;
    background: #fff;">
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div style="width:100%;color:#4f3fff; padding-bottom:15px;">
                            <canvas id="buyers" ></canvas>
                        </div>
                        <script>

                            // get line chart canvas
                            var buyers = document.getElementById('buyers').getContext('2d');

                            var myLineChart = new Chart(buyers,{
                                type: 'line',
                                data: <?php echo $strJSON;?>,
                                options: {
                                    responsive: true,
                                    title: {
                                        //display: true,
                                        //position:'right',
                                        //text:'Doanh thu năm 2016'
                                    },// end title
                                    scales: {
                                        xAxes: [{
                                            display: true,
                                            scaleLabel: {
                                                display: true,
                                                labelString: 'Tháng Năm',

                                            }
                                        }],
                                        yAxes: [{
                                            display: true,
                                            scaleLabel: {
                                                display: true,
                                                labelString: 'Trị giá'
                                            },
                                            ticks: {
                                                suggestedMin: -10,
                                                suggestedMax: 250,
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
