@extends('admin.includes.contents')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Feature Details</h4>
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

                            <form action="{{ route('feature.update', $feature->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="row p-lg-5">
                                    <!-- Your input fields here -->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            Baths
                                            <input type="text" name="baths" class="form-control" value="{{ $feature->baths }}" placeholder="">
                                        </div>
                                    </div>
                                    <!-- Add other input fields here -->

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
