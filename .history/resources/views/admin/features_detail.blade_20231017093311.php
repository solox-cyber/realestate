@extends('admin.includes.contents')

@section('content')

<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Feature Details</h4>
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

                            <form action="{{route('feature.store')}}" method="post">
                                @csrf

                                <div class="row p-lg-5">
                                    <div class="col-md-12">
                                        <div class="mb-3 row">
                                            <label for="listing"></label>
                                            <select name="listing_id" id="listing" class="form-control">
                                                <option value="">-- Choose a listing --</option>
                                                @foreach($listings as $listing)
                                                <option value="{{ $listing->id }}">{{ $listing->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Baths
                                            <input type="text" name="baths" class="form-control " value="{{ old('baths') }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Bedrooms
                                            <input type="text" name="bedrooms" class="form-control " value="{{ old('bedrooms') }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Rooms
                                            <input type="text" name="rooms" class="form-control " value="{{ old('rooms') }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Kitchens
                                            <input type="text" name="kitchens" class="form-control " value="{{ old('kitchens') }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Living Rooms
                                            <input type="text" name="livingrooms" class="form-control " value="{{ old('livingrooms') }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Area (sqft)
                                            <input type="text" name="area" class="form-control " value="{{ old('area') }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Year Built
                                            <input type="text" name="year_built" class="form-control " value="{{ old('year_built') }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Garages
                                            <input type="text" name="garages" class="form-control " value="{{ old('garages') }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Bathrooms
                                            <input type="text" name="bathrooms" class="form-control " value="{{ old('bathrooms') }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Plot Size
                                            <input type="text" name="plot_size" class="form-control " value="{{ old('plot_size') }}" placeholder="">
                                        </div>
                                    </div>

                                    <hr class="m-4">
                                    <h3><b>Amenities</b></h3>
                                    <hr class="m-4">
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

@endsection
