<div class="row">

    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chevron-circle-down"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Total Pemasukan</span>
                <span class="info-box-number">Rp <?= number_format($total->total_pemasukan); ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chevron-circle-up"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Total Pengeluaran</span>
                <span class="info-box-number">Rp <?= number_format($total->total_pemakaian); ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-hand-holding-usd"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Sisa Pemasukan</span>
                <span class="info-box-number">Rp <?= number_format($total->total_sisa); ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Pemasukan & Pengeluaran Perbulan</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <p class="d-flex flex-column">
                        <span class="text-bold text-lg"><?= 'Rp ' . number_format($pemasukan_akhir); ?></span>
                        <span class="text-success">Pemasukan Terakhir</span>
                    </p>
                    <!-- <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                            <i class="fas fa-arrow-up"></i> 33.1%
                        </span>
                        <span class="text-muted">Since last month</span>
                    </p> -->
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                        <i class="fas fa-square text-success"></i> Pemasukan
                    </span>

                    <span>
                        <i class="fas fa-square text-danger"></i> Pengeluaran
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('AdminLTE_3/') ?>plugins/chart.js/Chart.min.js"></script>
<script>
    $(function() {
        'use strict'

        var ticksStyle = {
            fontColor: '#495057',
            fontStyle: 'bold'
        }

        var mode = 'index';
        var intersect = true;
        var $salesChart = $('#sales-chart');
        var salesChart = new Chart($salesChart, {
            type: 'bar',
            data: {
                labels: [<?php foreach ($gbpb['tgl'] as $tanggal) {
                                echo "'" . $tanggal . "',";
                            }; ?>],
                datasets: [{
                        backgroundColor: '#28a745',
                        borderColor: '#28a745',
                        data: [<?php foreach ($gbpb['pemasukan'] as $pm) {
                                    echo $pm . ",";
                                }; ?>]
                    },
                    {
                        backgroundColor: '#dc3545',
                        borderColor: '#dc3545',
                        data: [<?php foreach ($gbpb['pengeluaran'] as $pk) {
                                    echo $pk . ",";
                                }; ?>]
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                tooltips: {
                    mode: mode,
                    intersect: intersect
                },
                hover: {
                    mode: mode,
                    intersect: intersect
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        // display: false,
                        gridLines: {
                            display: true,
                            lineWidth: '4px',
                            color: 'rgba(0, 0, 0, .2)',
                            zeroLineColor: 'transparent'
                        },
                        ticks: $.extend({
                            beginAtZero: true,
                            // Include a dollar sign in the ticks
                            callback: function(value) {
                                return rupiah(value);
                            }
                        }, ticksStyle)
                    }],
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: false
                        },
                        ticks: ticksStyle
                    }]
                }
            }
        });
    });
</script>