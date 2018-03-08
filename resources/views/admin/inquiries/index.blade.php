@extends('admin.layout.app')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="/theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <style>
        th, td { overflow-wrap: break-word; }
    </style>
@endsection

@section('js')
    <!-- DataTables -->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="/theme/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/datatable_pipeline.js"></script>
    <script>
        //
        // DataTables initialisation
        //
        $(document).ready(function () {
            $('#tbl_inquiries').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": $.fn.dataTable.pipeline({
                    url: '/admin/inquiries/list',
                    pages: 5 // number of pages to cache
                }),
                "columns": [
                    {"data": "created_at", searchable: true, orderable: true},
                    {"data": "name", searchable: true, orderable: true},
                    {"data": "email", searchable: true, orderable: true},
                    {"data": "topic", searchable: true, orderable: true},
                    {"data": "message", searchable: true, orderable: true}
                ],
            })
            ;
        })
        ;
    </script>

@endsection

@section('content-header')
    <section class="content-header">
        <h1>
            Inquiries
            <small>List</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-briefcase"></i> Inquiries</a></li>
            <li class="active">List</li>
        </ol>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="tbl_inquiries" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Message Topic</th>
                                <th>Message</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Message Topic</th>
                                <th>Message</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection