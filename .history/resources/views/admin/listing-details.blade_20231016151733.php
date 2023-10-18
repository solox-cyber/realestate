@extends('admin.includes.contents')

@section('content')

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Listing Details</h4>
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

                            <form action="{{ route('listing.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row p-lg-5">

                                    <div class="input-group custom_file_input col-md-9 mb-3">
                                        <div class="form-file">
                                            <input type="file" name="image[]" class="form-file-input form-control" multiple>
                                        </div>
                                        <span class="input-group-text">Upload Multiple Images</span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Name
                                            <input type="text" name="name" class="form-control input-default" value="{{ old('name') }}" placeholder="input-default">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Location
                                            <select name="location_id" class="form-control">
                                                <option value="">Select Location</option>
                                                @foreach($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->community }}, {{$location->town}}, {{$location->state}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Agent
                                            <select name="agent_id" class="form-control">
                                                <option value="">Select Agent</option>
                                                @foreach($agents as $agent)
                                                <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Address
                                            <input type="text" name="address" class="form-control input-default" value="{{ old('address') }}" placeholder="input-default">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Cost 
                                            <input type="text" name="cost" class="form-control input-default" value="{{ old('cost') }}" placeholder="input-default">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Status
                                            <select name="status" class="form-control">
                                                <option value="">Select Current Status</option>
                                                <option value="Rent">Rent</option>
                                                <option value="Sold">Sold</option>
                                                <option value="Buy">Buy</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            Home Details
                                            <textarea name="details" id="details" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
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
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#details'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection
