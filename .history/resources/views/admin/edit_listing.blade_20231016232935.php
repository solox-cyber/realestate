@extends('admin.includes.contents')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Listing Details</h4>
                    </div>
                    <div class="card-body p-10">
                        <div class="basic-form">
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

                            <form action="{{ route('listing.update', $listing->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="row p-lg-5">

                                    <!-- Add your form fields here -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Name
                                            <input type="text" name="name" class="form-control input-default" value="{{ $listing->name }}" placeholder="input-default">
                                        </div>
                                    </div>
                                    <!-- Add other fields -->

                                    <div class="col-md-12">
                                        <button type="submit" class="btn col-md-12 btn-primary">Update</button>
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
