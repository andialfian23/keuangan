<div class="card card-success card-outline">
    <div class="card-body">

        <!-- BTN PROSESS -->
        <div class="row mb-2">
            <div class="col-lg-12">
                <a href="#modal-form" class="btn bg-gradient-primary " data-toggle="modal" onclick="add()">Tambah Pemasukan</a>
            </div>
        </div>

        <!-- TABEL PEMASUKAN -->
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hovered table-stripped" id="my-table" width="100%">
                        <thead>
                            <tr>
                                <!-- <th class="text-dark">No.</th> -->
                                <th class="text-dark">Tanggal</th>
                                <th class="text-dark">Keterangan</th>
                                <th class="text-dark">Pemasukan</th>
                                <th class="text-dark">Pengeluaran</th>
                                <th class="text-dark">Sisa</th>
                                <th class="text-dark">Opsi</th>
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

<div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-gradient-dark">
            <div class="modal-header">
                <div class="d-flex px-2">
                    <h4 id="txt_keterangan"></h4>
                </div>
                <button type="button" class="btn btn-close bg-gradient-danger " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body overflow-auto">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 id="txt_jml_pemasukan"></h5>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered table-stripped" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">--</th>
                            </tr>
                        </thead>
                        <tbody id="showPemakaian"></tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h5 id="txt_total_pemakaian"></h5>
                        <h5 id="txt_total_sisa"></h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <a class="mr-auto btn btn-info" href="#modal-add" data-toggle="modal" id="addPemakaian">Tambah Pemakaian</a>
                <p class="ml-auto" id="txt_updated_at"></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title-modal"></h5>
                <button type="button" class="btn btn-close bg-gradient-danger " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tgl_pemasukan">Tanggal</label>
                    <input type="date" class="form-control" id="tgl_pemasukan" name="tgl_pemasukan">
                    <small id="notif_tgl_pemasukan" class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="jml_pemasukan">Jumlah Pemasukan</label>
                    <input type="number" class="form-control" id="jml_pemasukan" name="jml_pemasukan">
                    <small id="notif_jml_pemasukan" class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                    <small id="notif_keterangan" class="text-danger"></small>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" id="id">
                <button type="submit" class="btn bg-gradient-primary" id="btn_save">Simpan</button>
                <button type="submit" class="btn bg-gradient-primary" id="btn_save_edit">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title-modal">Tambah Pemakaian</h5>
                <button type="button" class="btn btn-close bg-gradient-danger " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="total">Jumlah Pemasukan</label>
                    <input type="text" class="form-control" id="total" name="total" disabled />
                </div>
                <div class="form-group">
                    <label for="sisa">Sisa Pemasukan</label>
                    <input type="text" class="form-control" id="sisa" name="sisa" disabled />
                </div>
                <div class="form-group">
                    <label for="jml_pemakaian">Jumlah Pemakaian</label>
                    <input type="number" class="form-control" id="jml_pemakaian" name="jml_pemakaian">
                    <small id="notif_jml_pemakaian" class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="tgl_pemakaian">Tanggal</label>
                    <input type="date" class="form-control" id="tgl_pemakaian" name="tgl_pemakaian">
                    <small id="notif_tgl_pemakaian" class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="nama_pemakaian">Keterangan</label>
                    <input type="text" class="form-control" id="nama_pemakaian" name="nama_pemakaian">
                    <small id="notif_nama_pemakaian" class="text-danger"></small>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_pemasukan" id="id_pemasukan">
                <button type="submit" class="btn bg-gradient-primary" id="submit_add_pemakaian">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = "<?= base_url() ?>/Pemasukan";
    var base_url2 = "<?= base_url() ?>/Pemakaian";

    function add() {
        $('#title-modal').html('Form Tambah Pemasukan');
        $('#tgl_pemasukan').val('');
        $('#jml_pemasukan').val('');
        $('#keterangan').val('');
        $('#btn_save').show();
        $('#btn_save_edit').hide();
    }

    function show(id) {
        $('#showPemakaian').empty();
        $('#addPemakaian').show();

        $.ajax({
            url: base_url + '/get',
            type: 'POST',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(res) {

                $('#txt_keterangan').html(res.pemasukan.keterangan);
                $('#txt_jml_pemasukan').html('Total Pemasukan : ' + rupiah(res.pemasukan.jml_pemasukan));

                $('#showPemakaian').removeAttr('style');
                if (res.total_row > 10) {
                    $('#showPemakaian').attr('style', 'height: 750px;');
                }
                var total_pemakaian = 0;
                var tbody = [];
                var updated_at = null;
                $.each(res.pemakaian, function(i, row) {
                    tbody[i] = `
                            <tr>
                                <td class="text-center">` + row.tgl_pemakaian + `</td>
                                <td class="text-right">` + rupiah(row.jml_pemakaian) + `</td>
                                <td>` + row.nama_pemakaian + `</td>
                                <td class="text-center">
                                    <a href="#" class='badge badge-danger' onclick="deletePemakaian(` + row.id + `)">Hapus</a>
                                </td>
                            </tr>
                            `;
                    total_pemakaian += parseInt(row.jml_pemakaian);
                    updated_at = row.updated_at;
                });
                tfoot = `<tr>
                                <td class="text-center">Total </td>
                                <td class="text-right">` + rupiah(total_pemakaian) + `</td>
                                <td colspan="2"></td>
                            </tr>`;

                $('#showPemakaian').append(tbody.join('') + tfoot);

                if (total_pemakaian > 0) {
                    $('#txt_total_pemakaian').html('Total Pengeluaran : ' + rupiah(total_pemakaian));
                }

                var sisa = parseInt(res.pemasukan.jml_pemasukan) - total_pemakaian;

                $('#addPemakaian').attr('data-id', id);
                $('#addPemakaian').attr('data-total', rupiah(res.pemasukan.jml_pemasukan));
                $('#addPemakaian').attr('data-sisa', rupiah(sisa));

                if (sisa > 0) {
                    $('#txt_total_sisa').html('Sisa Pemasukan : ' + rupiah(sisa));
                } else {
                    $('#addPemakaian').hide();
                }

                if (updated_at != null) {
                    $('#txt_updated_at').html('Last Update : ' + updated_at);
                }
            }
        });
    }

    function edit(id) {
        $('#title-modal').html('Form Edit Pemasukan');
        $('#btn_save').hide();
        $('#btn_save_edit').show();
        $('id').val(id);

        $.ajax({
            url: base_url + '/get',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(res) {
                var row = res.pemasukan;
                console.log('Edit : ' + row);
                $('#tgl_pemasukan').val(row.tgl_pemasukan);
                $('#jml_pemasukan').val(row.jml_pemasukan);
                $('#keterangan').val(row.keterangan);
            }
        });
    }

    function deletePemasukan(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data pemasukan ini?')) {
            $.ajax({
                url: base_url + "/delete",
                type: 'POST',
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    // Swal.fire({
                    //     title: 'Sukses!',
                    //     text: 'Berhasil Menghapus Data Pemasukan!!!',
                    //     icon: 'success',
                    //     confirmButtonText: 'OK',
                    //     onClose: function() {
                    //         window.location.replace(base_url);
                    //     }
                    // });
                    window.location.replace(base_url);
                }
            });
        }
    }

    function deletePemakaian(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data pemakaian ini?')) {
            $.ajax({
                url: base_url2 + "/delete",
                type: 'POST',
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    // Swal.fire({
                    //     title: 'Sukses!',
                    //     text: 'Berhasil Menghapus Data Pemakaian!!!',
                    //     icon: 'success',
                    //     confirmButtonText: 'OK',
                    //     onClose: function() {
                    //         window.location.replace(base_url);
                    //     }
                    // });
                    window.location.replace(base_url);
                }
            });
        }
    }

    $(function() {
        var link = base_url + '/print';
        $('#btn_print').removeAttr('href');
        $('#btn_print').attr('href', link);
        $('#btn_excel').removeAttr('href');
        $('#btn_excel').attr('href', link);

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
                    className: 'btn btn-info',
                },
                {
                    extend: 'pdf',
                    className: 'btn bg-gradient-danger',
                    text: '<i class="fa fa-print"></i>&nbsp; Print',
                    action: function(e, dt, node, config) {
                        btn_print = base_url + '/print/';
                        setTimeout(function() {
                            window.open(btn_print, '_blank');
                        }, 1000);
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn btn-success',
                    text: '<i class="fa fa-file-spreadsheet"></i>&nbsp; Excel',
                    action: function(e, dt, node, config) {
                        btn_excel = base_url + '/print/';
                        setTimeout(function() {
                            window.open(btn_excel, '_blank');
                        }, 1000);
                    }
                },
            ],
            "columnDefs": [{
                "orderable": false,
                "targets": [5]
            }],
            columns: [{
                    data: 'tanggal',
                },
                {
                    data: 'keterangan',
                },
                {
                    data: 'pemasukan',
                    render: $.fn.dataTable.render.number('.', ',', 0, 'Rp '),
                },
                {
                    data: 'pemakaian',
                    render: $.fn.dataTable.render.number('.', ',', 0, 'Rp '),
                },
                {
                    data: 'sisa',
                    render: $.fn.dataTable.render.number('.', ',', 0, 'Rp '),
                },
                {
                    data: 'id',
                    render: function(data, type, row, meta) {
                        return `
                                <a href="#preview" class="badge badge-secondary" data-toggle="modal" onclick="show(` + row.id + `)">Detail</a>
                                <a href="#modal-form" class="badge badge-info" data-toggle="modal" onclick="edit(` + row.id + `)">Edit</a>
                                <a href="#" class="badge badge-danger" onclick="deletePemasukan(` + row.id + `)">Hapus</a>
                                
                                `;
                    }
                },
            ],
        });

        // BTN SUBMIT ADD
        $('#btn_save').click(function() {
            if ($('#tgl_pemasukan').val() == '') {
                $('#tgl_pemasukan').addClass('border border-danger');
                $('#notif_tgl_pemasukan').html('Tanggal tidak Boleh Kosong !!');
                return false;
            } else {
                $('#tgl_pemasukan').removeClass('border-danger');
                $('#notif_tgl_pemasukan').html('');
            }

            if ($('#jml_pemasukan').val() == '') {
                $('#jml_pemasukan').addClass('border border-danger');
                $('#notif_jml_pemasukan').html('Jumlah Pemasukan tidak Boleh Kosong !!');
                return false;
            } else {
                $('#jml_pemasukan').removeClass('border-danger');
                $('#notif_jml_pemasukan').html('');
            }

            if ($('#keterangan').val() == '') {
                $('#keterangan').addClass('border border-danger');
                $('#notif_keterangan').html('Keterangan tidak Boleh Kosong !!');
                return false;
            } else {
                $('#notif_keterangan').html('');
                $('#keterangan').removeClass('border-danger');
            }

            $.ajax({
                url: base_url + '/insert',
                type: 'POST',
                data: {
                    tgl_pemasukan: $('#tgl_pemasukan').val(),
                    jml_pemasukan: $('#jml_pemasukan').val(),
                    keterangan: $('#keterangan').val(),
                },
                dataType: 'json',
                success: function(res) {
                    console.log(res);

                    // Swal.fire({
                    //     title: 'Sukses!',
                    //     text: 'Berhasil Menambahkan Data Pemasukan!!!',
                    //     icon: 'success',
                    //     confirmButtonText: 'OK',
                    //     onClose: function() {
                    //         window.location.replace(base_url);
                    //     }
                    // });
                    window.location.replace(base_url);
                }
            });
        });

        // BTN SUBMIT EDIT
        $('#btn_save_edit').click(function() {

            if ($('#tgl_pemasukan').val() == '') {
                $('#tgl_pemasukan').addClass('border border-danger');
                $('#notif_tgl_pemasukan').html('Tanggal tidak Boleh Kosong !!');
                return false;
            } else {
                $('#tgl_pemasukan').removeClass('border-danger');
                $('#notif_tgl_pemasukan').html('');
            }

            if ($('#jml_pemasukan').val() == '') {
                $('#jml_pemasukan').addClass('border border-danger');
                $('#notif_jml_pemasukan').html('Jumlah Pemasukan tidak Boleh Kosong !!');
                return false;
            } else {
                $('#jml_pemasukan').removeClass('border-danger');
                $('#notif_jml_pemasukan').html('');
            }

            if ($('#keterangan').val() == '') {
                $('#keterangan').addClass('border border-danger');
                $('#notif_keterangan').html('Keterangan tidak Boleh Kosong !!');
                return false;
            } else {
                $('#notif_keterangan').html('');
                $('#keterangan').removeClass('border-danger');
            }

            $.ajax({
                url: base_url + '/update',
                type: 'POST',
                data: {
                    tgl_pemasukan: $('#tgl_pemasukan').val(),
                    jml_pemasukan: $('#jml_pemasukan').val(),
                    keterangan: $('#keterangan').val(),
                    id: $('#id').val(),
                },
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    // Swal.fire({
                    //     title: 'Sukses!',
                    //     text: 'Berhasil Mengubah Data Pemasukan !!!',
                    //     icon: 'success',
                    //     confirmButtonText: 'OK',
                    //     onClose: function() {
                    //         window.location.replace(base_url);
                    //     }
                    // });
                    window.location.replace(base_url);
                }
            });
        });

        //BTN ADD PEMAKAIAN
        $('#addPemakaian').click(function() {
            var id_pemasukan = $(this).data('id');
            var total_pemasukan = $(this).data('total');
            var sisa_pemasukan = $(this).data('sisa');
            console.log(total_pemasukan);
            console.log(sisa_pemasukan);
            $('#id_pemasukan').val(id_pemasukan);
            $('#total').val(total_pemasukan);
            $('#sisa').val(sisa_pemasukan);
        });

        $('#submit_add_pemakaian').click(function() {

            if ($('#jml_pemakaian').val() == '') {
                $('#jml_pemakaian').addClass('border border-danger');
                $('#notif_jml_pemakaian').html('Jumlah Pemakaian tidak Boleh Kosong !!');
                return false;
            } else {
                $('#jml_pemakaian').removeClass('border-danger');
                $('#notif_jml_pemakaian').html('');
            }

            if ($('#tgl_pemakaian').val() == '') {
                $('#tgl_pemakaian').addClass('border border-danger');
                $('#notif_tgl_pemakaian').html('Tanggal tidak Boleh Kosong !!');
                return false;
            } else {
                $('#tgl_pemakaian').removeClass('border-danger');
                $('#notif_tgl_pemakaian').html('');
            }

            if ($('#nama_pemakaian').val() == '') {
                $('#nama_pemakaian').addClass('border border-danger');
                $('#notif_nama_pemakaian').html('Keterangan tidak Boleh Kosong !!');
                return false;
            } else {
                $('#notif_nama_pemakaian').html('');
                $('#nama_pemakaian').removeClass('border-danger');
            }
            $.ajax({
                url: base_url2 + '/insert',
                type: 'POST',
                data: {
                    tgl_pemakaian: $('#tgl_pemakaian').val(),
                    jml_pemakaian: $('#jml_pemakaian').val(),
                    nama_pemakaian: $('#nama_pemakaian').val(),
                    id_pemasukan: $('#id_pemasukan').val(),
                },
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    // Swal.fire({
                    //     title: 'Sukses!',
                    //     text: 'Berhasil Mengubah Data Pemasukan !!!',
                    //     icon: 'success',
                    //     confirmButtonText: 'OK',
                    //     onClose: function() {
                    //         window.location.replace(base_url);
                    //     }
                    // });
                    window.location.replace(base_url);
                }
            })
        });
    });
</script>