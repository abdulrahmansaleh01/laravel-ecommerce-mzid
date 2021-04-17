<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<head>
    <title>Laporan Data User | MZ.ID</title>

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/css/core/colors/palette-gradient.min.css')}}">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{public_path('/adminstyle/app-assets/css/bootstrap-extended.min.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <!-- END: Custom CSS-->
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;

        }
    </style>
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
        <h2>Laporan Data User</h2>
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
                                        <th>Foto Profil</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th style="font-size: 8px;">Dibuat pada</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach($users as $user)
                                    <tr style="text-align: center; vertical-align: middle;">
                                        <td>{{$i++}}</td>
                                        <td>
                                            @if($user->image == null)
                                            <img src="{{public_path('/img/usericon.png')}}" alt="users avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                                            @else
                                            <img src="{{public_path('/storage/'.$user->image)}}" alt="users avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                                            @endif
                                        </td>
                                        <td>{{$user->name}}</td>
                                        <td><a>{{$user->email}}</a></td>
                                        <td>{{$user->role}}</td>
                                        <td>{{$user->created_at->format('d-m-Y')}}</td>
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
    <!-- END: Page JS-->
</body>

</html>