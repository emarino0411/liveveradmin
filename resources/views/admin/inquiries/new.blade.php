@extends('admin.layout.app')
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#toggle_status").change(function () {
                console.log('change');
                if ($(this).prop('checked')) {
                    $("#status").val('active');
                } else {
                    $("#status").val('inactive');
                }
                console.log($(this).prop('checked'));

            });
        });
    </script>
@endsection

@section('content-header')
    <section class="content-header">
        <h1>
            Merchants
            <small>Create New</small>
        </h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-briefcase"></i> Merchants</a></li>
            <li class="active">Create New</li>
        </ol>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Create Merchant</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" action="{{url('/admin/merchants/save')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{old('name')}}"
                                           required
                                           placeholder="Enter name">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                                    <label for="name">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                           value="{{old('slug')}}"
                                           required
                                           placeholder="Enter slug">
                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description"
                                              name="description" required>{{old('description')}}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('logo_url') ? ' has-error' : '' }}">
                                    <label for="logo_url">Logo URL</label>
                                    <input type="text" class="form-control" id="logo_url" name="logo_url"
                                           value="{{old('logo_url')}}"
                                           required
                                           placeholder="Enter Logo URL">
                                    @if ($errors->has('logo_url'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('logo_url') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('image_url') ? ' has-error' : '' }}">
                                    <label for="image_url">Image URL</label>
                                    <input type="text" class="form-control" id="image_url" name="image_url"
                                           value="{{old('image_url')}}"
                                           placeholder="Enter Image URL">
                                    @if ($errors->has('image_url'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image_url') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('welcome_copy') ? ' has-error' : '' }}">
                                    <label for="image_url">Welcome Copy</label>
                                    <input type="text" class="form-control" id="welcome_copy" name="welcome_copy"
                                           value="{{old('welcome_copy')}}"
                                           required
                                           placeholder="Welcome Copy">
                                    @if ($errors->has('welcome_copy'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('welcome_copy') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                    <label for="status">Status</label>
                                    <br>
                                    <input type="checkbox" checked data-toggle="toggle" name="toggle_status"
                                           id="toggle_status"
                                           data-on="Enabled" data-off="Disabled">
                                    <input type="hidden" name="status" id="status" value="active">
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer pull-right">
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>

@endsection