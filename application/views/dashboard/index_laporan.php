<div class="card card-danger card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hovered table-stripped" id="my-table" width="100%">
                        <thead>
                            <tr>
                                <th>Periode</th>
                                <th>Total Pengeluaran</th>
                                <th>Rata-rata Pengeluran PerHari</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = "<?= base_url() ?>/Laporan";

    $(function() {
        $('#my-table').DataTable({
            serverSide: true,
            processing: true,
            lengthMenu: [
                [10, 25, 50, -1],
                ['10', '25', '50', 'Semua Data']
            ],
            pageLength: 10,
            language: {
                url: "<?= base_url() ?>assets/ID.json",
            },
            ajax: {
                url: base_url + "/show",
                type: 'POST',
            },
            dom: "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'pageLength',
                    text: 'Tampilkan',
                },
                // {
                //     extend: 'pdf',
                //     className: 'btn bg-gradient-danger',
                //     text: '<i class="fa fa-print"></i>&nbsp; Print',
                //     action: function(e, dt, node, config) {
                //         btn_print = base_url + '/print/';
                //         setTimeout(function() {
                //             window.open(btn_print, '_blank');
                //         }, 1000);
                //     }
                // },
                // {
                //     extend: 'excel',
                //     className: 'btn btn-success',
                //     text: '<i class="fa fa-file-spreadsheet"></i>&nbsp; Excel',
                //     action: function(e, dt, node, config) {
                //         btn_excel = base_url + '/print/';
                //         setTimeout(function() {
                //             window.open(btn_excel, '_blank');
                //         }, 1000);
                //     }
                // },
            ],
            columns: [{
                    data: 'tanggal',
                },
                {
                    data: 'total',
                    render: $.fn.dataTable.render.number('.', ',', 0, 'Rp '),
                },
                {
                    data: 'rata_rata',
                    render: $.fn.dataTable.render.number('.', ',', 0, 'Rp '),
                },
            ],
        });
    });
</script>