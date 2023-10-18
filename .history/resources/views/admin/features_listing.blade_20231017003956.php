@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Feature List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Rooms</th>
                    <th>Area (sqft)</th>
                    <th>Year Built</th>
                    <th>Plot Size</th>
                </tr>
            </thead>
            <tbody>
                @foreach($features as $feature)
                    <tr>
                        <td>{{ $feature->rooms }}</td>
                        <td>{{ $feature->area }}</td>
                        <td>{{ $feature->year_built }}</td>
                        <td>{{ $feature->plot_size }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
