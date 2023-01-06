@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">{{ $category->category_name }} Category</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        {{-- Start Table Sub Category --}}
        <div>
            <a href="{{ route('sub.category.add', $category->category_slug) }}" class="btn btn-primary mb-2">Add Sub Category</a>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">All Sub Category</h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sub Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php($i = 1)
                                    @foreach ($subcategories as $sub)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $sub->sub_name }}</td>
                                            <td>
                                                {{-- <a href="{{ route('sub.category.index', $sub->category_slug) }}" class="btn btn-primary sm" title="Show Data"><i class="fas fa-eye"></i></a> --}}
                                                <a href="{{ route('sub.category.edit', [$sub->category->category_slug, $sub->id]) }}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('sub.category.delete', [$sub->category->category_slug, $sub->id]) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        {{-- End Table Sub Category --}}

    </div>
</div>
@endsection
