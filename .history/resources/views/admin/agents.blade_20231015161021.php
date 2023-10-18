@extends('admin.includes.contents')

@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Agents</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-responsive-md">
    <thead>
        <tr>
            <th class="width50">
                <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                    <input type="checkbox" class="form-check-input" id="checkAll" required="">
                    <label class="custom-control-label" for="checkAll"></label>
                </div>
            </th>
            <th><strong>Agent No.</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Email</strong></th>
            <th><strong>Building</strong></th>
            <th><strong>Date of Creation</strong></th>
            <th><strong>Status</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach($agents as $agent)
        <tr>
            <td>
                <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                    <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                    <label class="custom-control-label" for="customCheckBox2"></label>
                </div>
            </td>
            <td><strong>{{ $agent->id }}</strong></td>
            <td>
                <div class="d-flex align-items-center">
                    @if($agent->image)
                        <img src="{{ asset('images/agents/'.$agent->image) }}" class="rounded-lg me-2" width="24" alt="" />
                    @endif
                    <span class="w-space-no">{{ $agent->name }}</span>
                </div>
            </td>
            <td>{{ $agent->email }}</td>
            <td>{{ $agent->address }}</td>
            <td>{{ $agent->created_at->format('d F Y') }}</td>
            <td>
                <div class="d-flex align-items-center">
                    <i class="fas fa-circle text-success me-1"></i> Successful
                </div>
            </td>
            <td>
                <div class="d-flex">
                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fas fa-trash"></i></a>
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
