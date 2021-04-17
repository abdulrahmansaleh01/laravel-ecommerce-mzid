@extends('admin.layouts.master')

@section('title', 'MZ.ID - Data User')

@section('content-header')
<div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title mb-0">Data User</h3>
    <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">User</a>
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('content')
<section class="users-list-wrapper">
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <!-- datatable start -->
                    <div class="table-responsive">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible mb-2 text-center" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {{session('success')}}
                        </div>
                        @elseif(session('danger'))
                        <div class="alert alert-danger alert-dismissible mb-2 text-center" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {{session('danger')}}
                        </div>
                        @endif
                        <table id="users-list-datatable" class="table">
                            <thead>
                                <tr style="text-align: center; vertical-align: middle;">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr style="text-align: center; vertical-align: middle;">
                                    <td>{{$i++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td><a>{{$user->email}}</a></td>
                                    <td>{{$user->role}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>
                                        <a href="/admin/user/show/{{$user->id}}" class="badge badge-info">Lihat</a>
                                        <a href="/admin/user/edit/{{$user->id}}" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger delete" user-id="{{$user->id}}" user-name="{{$user->name}}">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div align="right">
                            <a href="{{route('user-pdf')}}" class="btn btn-primary" target="_blank">CETAK PDF <i class="fa fa-print fa-xs" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- datatable ends -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- users list ends -->
<!-- </div>
    </div>
</div> -->
@endsection
@section('footer')
<script>
    $('.delete').click(function() {
        var user_id = $(this).attr('user-id');
        var user_name = $(this).attr('user-name');
        swal({
                title: "Apakah anda yakin?",
                text: "Menghapus pada data user " + user_name + " ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/user/delete/" + user_id;
                }
            });
    });
</script>
@endsection