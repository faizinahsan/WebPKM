@extends('layouts.app')

@section('title', 'Konsultasi Dosen Pendamping')

@section('csslinks')
<link rel="stylesheet" href="../../css/main.css">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/navbar/navbar.css">
<link rel="stylesheet" href="../../css/navbar/sidebar.css">
<link rel="stylesheet" href="../../css/kemahasiswaan/kemahasiswaan.css">
<!-- datepicker -->
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://kit.fontawesome.com/3d79b0331b.js" crossorigin="anonymous"></script>
@endsection

{{-- Content --}}
@section('content')
<div class="wrapper">
    <!-- Sidebar  -->
    @include('layouts.sidenavkemahasiswaan')
    

    <!-- Page Content  -->
    <div id="content">
        <!-- Container Timeline -->
        <div class="container">
            <h3>Timeline</h3>
            <!-- Timeline -->
            <form class="form-timeline" action="#" method="POST">
                <div class="form-group row">
                    <label for="selectTanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" />
                    </div>
                    <div class="col-sm-2">
                        <i class="fas fa-calendar-week fa-2x" style="color: #f9ca48;"></i>
                    </div>
                    <!-- <div class='col-8 input-group date'>
                                        <input type='text' class="form-control"  id='date' name="date"/>
                                        <span class="input-group-addon">
                                            <span class="fas fa-calendar-week fa-2x" style="color: #f9ca48;"></span>
                                        </span>
                                    </div> -->
                </div>
                <div class="form-group row">
                    <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
                    <div class="col-sm-8">
                        <input type="text" name="kegiatan" id="kegiatan" class="form-control">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputHasilDiskusi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="hasilDiskusi" id="hasilDiskusi" cols="30"
                            rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 d-flex justify-content-end">
                        <button type="submit" class="btn btn-custom" style="width: 160px;">Tambahkan</button>
                    </div>
                </div>
            </form>
            <!-- End Timeline -->
        </div>
        <!-- End Container Timeline -->

        <!-- Container Tabel Timeline -->
        <div class="container container-table">
            <!-- Tabel Timeline -->
            <table class="table">
                <thead class="striped-section">
                    <th>Tanggal</th>
                    <th>Kegiatan</th>
                    <th>Deskripsi</th>
                    <th>Keterangan</th>
                </thead>
                <tbody>
                    <tr>
                        <td>11 Maret 2020</td>
                        <td>Upload Proposal Liga</td>
                        <td>Pengumpulan Proposal Liga PKM UNPAD dari tanggal 11 Maret - 6 April 2020</td>
                        <td>
                            <a href="" class="btn btn-custom mr-3">Edit</a>
                            <a href="" class="btn btn-custom">Delete</a>
                        </td>
                    </tr>
                    <tr class="striped-section">
                        <td>8 April 2020</td>
                        <td>Upload Proposal Non Liga</td>
                        <td>Pengumpulan Proposal Non Liga PKM UNPAD dari tanggal 8 April - 20 April 2020</td>
                        <td>
                            <a href="" class="btn btn-custom mr-3">Edit</a>
                            <a href="" class="btn btn-custom">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>22 April 2020</td>
                        <td>Evaluasi/Penilaian Proposal</td>
                        <td>Proposal yang sudah diupload akan dilakukan evaluasi dan penilaian terlebih dahulu dari tanggal 22 April - 30 April 2020</td>
                        <td>
                            <a href="" class="btn btn-custom mr-3">Edit</a>
                            <a href="" class="btn btn-custom">Delete</a>
                        </td>
                    </tr>
                    <tr class="striped-section">
                        <td>4 Mei 2020</td>
                        <td>Pengumuman Pemenang Liga</td>
                        <td>Pengumuman 10 proposal terbaik Liga PKM UNPAD pada tanggal 4 Mei 2020</td>
                        <td>
                            <a href="" class="btn btn-custom mr-3">Edit</a>
                            <a href="" class="btn btn-custom">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>22 Juni 2020</td>
                        <td>Coaching dengan Reviewer</td>
                        <td>Tahap ini dilakukan dengan diskusi dan beretemu dosen reviewer untuk merevisi proposal, tahap coaching dilakukan dari tanggal 22 Juni - 24 Agustus 2020</td>
                        <td>
                            <a href="" class="btn btn-custom mr-3">Edit</a>
                            <a href="" class="btn btn-custom">Delete</a>
                        </td>
                    </tr>
                    <tr class="striped-section">
                        <td>3 September 2020</td>
                        <td>Upload Propsal Final</td>
                        <td>Pengumpulan proposal PKM Final agar diseleksi kembali oleh reviewer untuk dapat username dan password simbelmawa pada tanggal 3 September - 17 September 2020</td>
                        <td>
                            <a href="" class="btn btn-custom mr-3">Edit</a>
                            <a href="" class="btn btn-custom">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2 November 2020</td>
                        <td>Akun Simbelmawa</td>
                        <td>Proposal yang sudah layak akan diberi akun pada tanggal 2 November 2020</td>
                        <td>
                            <a href="" class="btn btn-custom mr-3">Edit</a>
                            <a href="" class="btn btn-custom">Delete</a>
                        </td>
                    </tr>
                    <tr class="striped-section">
                        <td>13 November 2020</td>
                        <td>Upload Simbelmawa</td>
                        <td>Upload Proposal ke akun Simbelmawa dari tanggal 13 November - 2 Desember 2020</td>
                        <td>
                            <a href="" class="btn btn-custom mr-3">Edit</a>
                            <a href="" class="btn btn-custom">Delete</a>
                        </td>
                    </tr>
                    
                    
                </tbody>
            </table>
            <!-- End Tabel Timeline -->
        </div>
        <!-- End Container Tabel Timeline -->

    </div>
</div>
@endsection

@section('jslinks')
<script src="../../js/jquery.js"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
</script>
<script src="../../js/bootstrap.min.js"></script>

<!-- DatePicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<script>
    $(document).ready(function () {
        var date_input = $('input[name="date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
    })
</script>

@endsection
