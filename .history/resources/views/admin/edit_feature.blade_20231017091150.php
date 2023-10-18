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
                                    <div class="col-md-12">
                                        <div class="mb-3 row">
                                            <label for="listing"></label>
                                            <select name="listing_id" id="listing" class="form-control">
                                                <option value="">-- Choose a listing --</option>
                                                @foreach($listings as $listing)
                                                <option value="{{ $listing->id }}" {{ $feature->listing_id == $listing->id ? 'selected' : '' }}>{{ $listing->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Baths
                                            <input type="text" name="baths" class="form-control" value="{{ $feature->baths }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Bedrooms
                                            <input type="text" name="bedrooms" class="form-control" value="{{ $feature->bedrooms }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Rooms
                                            <input type="text" name="rooms" class="form-control" value="{{ $feature->rooms }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Kitchens
                                            <input type="text" name="kitchens" class="form-control" value="{{ $feature->kitchens }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Living Rooms
                                            <input type="text" name="livingrooms" class="form-control" value="{{ $feature->livingrooms }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Area (sqft)
                                            <input type="text" name="area" class="form-control" value="{{ $feature->area }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Year Built
                                            <input type="text" name="year_built" class="form-control" value="{{ $feature->year_built }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Garages
                                            <input type="text" name="garages" class="form-control" value="{{ $feature->garages }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Bathrooms
                                            <input type="text" name="bathrooms" class="form-control" value="{{ $feature->bathrooms }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Plot Size
                                            <input type="text" name="plot_size" class="form-control" value="{{ $feature->plot_size }}" placeholder="">
                                        </div>
                                    </div>

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
