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

                            <form action="{{ route('feature.update', $feature->id) }}" method="post">
                                @csrf
                                @method('Put')

                                <div class="row p-lg-5">
                                    <div class="col-md-12">
                                        <div class="mb-3 row">
                                            <label for="listing"></label>
                                            <select name="listing_id" id="listing" class="form-control">
                                                <option value="">-- Choose a listing --</option>
                                                @foreach($listings as $listing)
                                                <option value="{{ $listing->id }}" {{ $listing->id == $feature->listing_id ? 'selected' : '' }}>{{ $listing->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Rest of the form fields with pre-filled values -->
                                    <!-- Example: -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Baths
                                            <input type="text" name="baths" class="form-control" value="{{ $feature->baths }}" placeholder="">
                                        </div>
                                    </div>
                                    <!-- Add other form fields here with pre-filled values -->

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
