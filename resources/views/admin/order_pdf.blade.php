<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<head>
    <title>Laporan Pembelian</title>



    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="/adminstyle/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/adminstyle/app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

</head>

<body style="background:#FFF;">
    <table align="center" style="border-bottom: 1px solid black; font-size:12px;">
        <tbody>
            <tr>
                <td><img src="{{public_path('/adminstyle/app-assets/images/portrait/logo-polinema.png')}}" style="width: 100px; height:100px;"></td>
                <td align="center">
                    <p><strong>KEMENTRIAN RISET TEKNOLOGI, DAN PENDIDIKAN TINGGI<br>POLITEKNIK NEGERI MALANG<br>JURUSAN TEKNOLOGI INFORMASI
                            <br>PROGRAM STUDI MANAJEMEN INFORMATIKA</strong><br> Jl.Soekarno Hatta PO BOX 04 Malang Telp. (0341) 404424 pes. 1122<br>
                        http://www.polinema.ac.id</p>
                </td>
                <td><img src="{{public_path('/adminstyle/app-assets/images/portrait/logo-jas-anz.png')}}" style="width: 100px; height:100px;"></td>
            </tr>
        </tbody>
    </table>
    <br>
    <center>
        <h2>Laporan Pembelian</h2>
    </center>
    <section id="child-rows">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <table class="table table-striped table-bordered responsive">
                                <thead style="font-size: 10px;">
                                    <tr style="text-align: center; vertical-align: middle;">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 9px;">
                                    @php $i=1 @endphp
                                    @foreach($orders as $order)
                                    <tr style="text-align: center; vertical-align: middle; padding:1px 1px 1px 1px;">
                                        <td>{{$i++}}</td>
                                        <td>{{$order->updated_at->format('d-m-Y')}}</td>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->user_email}}</td>

                                        <td style="font-size: 8px;">{{number_format($order->grand_total)}}</td>
                                        <td>
                                            <span class="badge badge-success badge-pill">SUKSES</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <div class="form-actions clearfix">
                                <div class="buttons-group float-right">
                                    <h5 class="mr-2">
                                        Tertanda,
                                    </h5>
                                </div>
                            </div>
                            <br>
                            <div class="form-actions clearfix">
                                <div class="buttons-group float-right">
                                    <h4 class="mr-2">
                                        <strong><u>MZ.ID</u></strong>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN: Vendor JS-->
    <script src="{{public_path('/adminstyle/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{public_path('/adminstyle/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->


    <!-- BEGIN: Page JS-->
    <script src="{{public_path('/app-assets/js/scripts/tables/datatables-extensions/datatable-responsive.min.js')}}"></script>
    <!-- END: Page JS-->
</body>

</html>