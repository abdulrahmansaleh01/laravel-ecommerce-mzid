@extends('admin.layouts.master')

@section('title', 'Data Produk | MZ.ID')

@section('style')
<!-- BEGIN: Vendor CSS-->
<!-- <link rel="stylesheet" type="text/css" href="/adminstyle/app-assets/vendors/css/animate/animate.css">
<link rel="stylesheet" type="text/css" href="/adminstyle/app-assets/vendors/css/extensions/sweetalert2.min.css"> -->
<!-- END: Vendor CSS-->
@endsection
@section('content-header')
<div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title mb-0">Data Produk</h3>
    <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Produk</a>
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
                        <!-- alert -->
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
                        <!--end alert -->

                        <table id="users-list-datatable" class="table">
                            <thead>
                                <tr style="text-align: center; vertical-align: middle;">
                                    <th>No</th>
                                    <th>Produk</th>
                                    <th>Kode</th>
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Galeri</th>
                                    <th>Atribut</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                @php $i++; @endphp
                                <tr style="text-align: center; vertical-align: middle;">
                                    <td>{{$i}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->code}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td><img src="{{'/storage/'.$product->image}}" width="40"></td>
                                    <td><a href="/admin/product-gallery/{{$product->id}}" class="badge badge-default">Add Images</a></td>
                                    <td><a href="/admin/product-attribute/{{$product->id}}" class="badge badge-secondary">Add Attr</a></td>
                                    <td>
                                        <a href="/admin/product/show/{{$product->id}}" class="badge badge-info">Lihat</a>
                                        <a href="/admin/product/edit/{{$product->id}}" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger delete" product-id="{{$product->id}}" product-name="{{$product->name}}">Hapus</a>
                                        <!-- -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div align="right">
                            <a href="{{route('product-pdf')}}" class="btn btn-primary" target="_blank">CETAK PDF <i class="fa fa-print fa-xs" aria-hidden="true"></i></a>
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
        var product_id = $(this).attr('product-id');
        var product_name = $(this).attr('product-name');
        swal({
                title: "Apakah anda yakin?",
                text: "Menghapus pada data produk " + product_name + " ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/product/delete/" + product_id;
                }
            });
    });
</script>
@endsection