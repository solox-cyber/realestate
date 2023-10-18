@extends('admin.includes.contents')

@section('content')

<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Agent Details</h4>
                    </div>
                    <div class="card-body p-10">
                        <div class="basic-form ">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{route('agent.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="input-group custom_file_input col-md-9 mb-3">
                                        <div class="form-file">
                                            <input type="file" name="image" class="form-file-input form-control">
                                        </div>
                                        <span class="input-group-text">Upload</span>

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
                                    <!-- <div class="col-md-6">
                                        <div class="mb-3">
                                            Website
                                            <input type="text" name="website" class="form-control input-default" placeholder="input-default">
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-md-6">
                                        <div class="mb-3">
                                            Contact
                                            <input type="text" name="contact" class="form-control input-default" placeholder="input-default">
                                        </div>
                                    </div> -->
                                    <div class="col-md-10">
                                        <button type="submit" class="btn col-md-12 btn-primary">Submit</button>
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

@endsection
