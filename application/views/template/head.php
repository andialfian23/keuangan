<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= $judul; ?></title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= base_url('AdminLTE_3/') ?>plugins/fontawesome-free/css/all.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('AdminLTE_3/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url('AdminLTE_3/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url('AdminLTE_3/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?= base_url('AdminLTE_3/') ?>dist/css/adminlte.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="<?= base_url('AdminLTE_3/') ?>plugins/daterangepicker/daterangepicker.css">
<!-- Toastr -->
<link rel="stylesheet" href="<?= base_url('AdminLTE_3/') ?>plugins/toastr/toastr.min.css">

<script src="<?= base_url('AdminLTE_3/') ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('AdminLTE_3/') ?>plugins/toastr/toastr.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('AdminLTE_3/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('AdminLTE_3/') ?>plugins/daterangepicker/daterangepicker.js"></script>

<script>
    function rupiah(uang) {
        var angka = parseFloat(uang);
        return angka.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR"
        });
    }
</script>