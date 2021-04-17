@extends('admin.layouts.master')

@section('title', 'Data Kategori Produk | MZ.ID')

@section('content-header')
<div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title mb-0">Data Kategori</h3>
    <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Kategori</a>
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
                        <table id="users-list-datatable" class="table">
                            <thead>
                                <tr style="text-align: center; vertical-align: middle;">
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Kategori Induk</th>
                                    <th>Dibuat Pada</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <?php
                                $parent_cates = DB::table('categories')->where('id', $category->parent_id)->get();
                                $i++;
                                ?>
                                <tr style="text-align: center; vertical-align: middle;">
                                    <td>{{$i}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        @foreach($parent_cates as $parent_cate)
                                        {{$parent_cate->name}}
                                        @endforeach
                                    </td>
                                    <td>{{$category->created_at->diffForHumans()}}</td>
                                    <td>{{($category->status==0)?' Disabled':'Enable'}}</td>
                                    <td>
                                        <a href="/admin/category/edit/{{$category->id}}" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger delete" category-id="{{$category->id}}" category-name="{{$category->name}}">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
        var category_id = $(this).attr('category-id');
        var category_name = $(this).attr('category-name');
        swal({
                title: "Apakah anda yakin?",
                text: "Menghapus pada data kategori " + category_name + " ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/category/delete/" + category_id;
                }
            });
    });
</script>
@endsection