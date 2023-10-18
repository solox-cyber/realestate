@extends('admin.includes.contents')

@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Location</h4>
                        <a class="btn btn-primary" href="{{route('location.new')}}">Add New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
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
                                <thead>
                                    <tr>
                                        <th class="width50">
                                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                <label class="custom-control-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th><strong>S/N</strong></th>
                                        <th><strong>State</strong></th>
                                        <th><strong>Town</strong></th>
                                        <th><strong>Community Name</strong></th>
                                        <th><strong>Full Address</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp
                                    @foreach($locations as $location)
                                    @php $i++; @endphp
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                <label class="custom-control-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td><strong>{{ $i }}.</strong></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="w-space-no">{{ $location->state }}</span>
                                            </div>
                                        </td>
                                        <td>{{ $location->town }}</td>
                                        <td>{{ $location->community }}</td>
                                        <td>{{ $location->full_address }}</td>

                                        <td>
                <div class="d-flex">
                    <a href="{{ route('location.edit', $location->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ route('agents.destroy', $location->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this agent?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
