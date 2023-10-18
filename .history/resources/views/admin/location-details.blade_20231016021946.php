@extends('admin.includes.contents')

@section('content')

<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Location Details</h4>
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

                            <form action="{{route('location.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row p-lg-5">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            State
                                            <select name="state" class="form-control">
                                                <option value="">Select State</option>
                                                <?php
                                                $states = [
                                                    'Abia', 'Adamawa', 'Akwa Ibom', 'Anambra', 'Bauchi', 'Bayelsa', 'Benue', 'Borno', 'Cross River',
                                                    'Delta', 'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 'Gombe', 'Imo', 'Jigawa', 'Kaduna', 'Kano', 'Katsina',
                                                    'Kebbi', 'Kogi', 'Kwara', 'Lagos', 'Nasarawa', 'Niger', 'Ogun', 'Ondo', 'Osun', 'Oyo', 'Plateau',
                                                    'Rivers', 'Sokoto', 'Taraba', 'Yobe', 'Zamfara', 'FCT'
                                                ];

                                                foreach ($states as $state) {
                                                    echo "<option value='$state'>$state</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Town
                                            <select name="town" id="town" class="form-control">
                                                <option value="">Select Town</option>
                                                <!-- Options for towns will be dynamically populated here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Community Name
                                            <input type="text" name="address" class="form-control input-default" placeholder="input-default">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Full Address
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


<script>
    const statesAndTowns = {
        // Define the towns for each state here
        "Abia": ["Aba", "Umuahia", "Arochukwu", "Ohafia", "Bende"],
        // Add towns for other states in the same format
        "Adamawa": ["Yola", "Mubi", "Numan", "Ganye", "Guyuk"]
        // Include other states and their respective towns
    };

    const stateSelect = document.querySelector('select[name="state"]');
    const townSelect = document.querySelector('select[name="town"]');

    stateSelect.addEventListener('change', function() {
        // Clear existing options
        townSelect.innerHTML = '<option value="">Select Town</option>';

        // Get the selected state
        const selectedState = stateSelect.value;

        // Add options based on the selected state
        if (statesAndTowns[selectedState]) {
            statesAndTowns[selectedState].forEach(function(town) {
                const option = document.createElement('option');
                option.value = town;
                option.text = town;
                townSelect.appendChild(option);
            });
        }
    });
</script>
@endsection
