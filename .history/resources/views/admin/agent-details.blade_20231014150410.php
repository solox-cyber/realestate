@extends('admin.includes.contents')

@section('content')

<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Custom file input</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form row">
                            <form action="{{route('agent.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-6">
                                    <div class="input-group custom_file_input mb-3">
                                        <div class="form-file ">
                                            <input type="file" name="image" class="form-file-input form-control">
                                        </div>
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        Name
                                        <input type="text" name="name" class="form-control input-default" placeholder="input-default">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        Email
                                        <input type="email" name="email" class="form-control input-default" placeholder="input-default">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        Telephone
                                        <input type="text" name="telephone" class="form-control input-default" placeholder="input-default">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        Address
                                        <input type="text" name="address" class="form-control input-default" placeholder="input-default">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        Website
                                        <input type="text" name="website" class="form-control input-default" placeholder="input-default">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        Contact
                                        <input type="text" name="contact" class="form-control input-default" placeholder="input-default">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
