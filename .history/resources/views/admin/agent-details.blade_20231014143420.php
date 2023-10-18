@extends('admin.includes.contents')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom file input</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
										<div class="input-group custom_file_input mb-3">
											<span class="input-group-text">Upload</span>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control">
                                            </div>
                                        </div>

                                        <div class="input-group custom_file_input mb-3">
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control">
                                            </div>
											<span class="input-group-text">Upload</span>
                                        </div>

                                        <div class="input-group custom_file_input mb-3">
											<button class="btn btn-primary btn-sm" type="button">Button</button>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control">
                                            </div>
                                        </div>

                                        <div class="input-group custom_file_input">
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
