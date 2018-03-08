@extends('admin.layout.app')
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection

@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection

@section('content-header')
    <section class="content-header">
        <h1>
            Merchants
            <small>Edit Merchant</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-briefcase"></i> Merchants</a></li>
            <li class="active">Edit Merchant</li>
        </ol>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Merchant</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{$merchant->name}}"
                                           placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                           value="{{$merchant->slug}}"
                                           placeholder="Enter slug">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description">{{$merchant->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="logo_url">Logo URL</label>
                                    <input type="text" class="form-control" id="logo_url" name="logo_url"
                                           value="{{$merchant->logo_url}}"
                                           placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="image_url">Image URL</label>
                                    <input type="text" class="form-control" id="image_url" name="image_url"
                                           value="{{$merchant->image_url}}"
                                           placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="image_url">Welcome Copy</label>
                                    <input type="text" class="form-control" id="welcome_copy" name="welcome_copy"
                                           value="{{$merchant->welcome_copy}}"
                                           placeholder="Welcome Copy">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <br>
                                    <input type="checkbox" data-toggle="toggle" name="status" id="status"
                                          @if($merchant->status=='active') checked @endif data-on="Enabled" data-off="Disabled">
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer pull-right">
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <input type="hidden" id="merchant_id" name="id" value="{{$merchant->id}}">
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection