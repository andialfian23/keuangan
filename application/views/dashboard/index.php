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
    <!-- /.col -->



    <!-- /.col -->
</div>
<!-- /.row -->