@extends('admin.includes.contents')

@section('content')

<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Location Details</h4>
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

                            <form action="{{ route('location.update', $location->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                                                    echo "<option value='$state' {{ $location->state == $state ? 'selected' : '' }}>$state</option>";
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
                                                @if(isset($towns))
                                                    @foreach ($towns as $town)
                                                        <option value="{{ $town }}" {{ $location->town == $town ? 'selected' : '' }}>{{ $town }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Community Name
                                            <input type="text" name="community" class="form-control input-default" value="{{ $location->community }}" placeholder="input-default">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            Full Address
                                            <input type="text" name="address" class="form-control input-default" value="{{ $location->full_address }}" placeholder="input-default">
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


<script>
    const statesAndTowns = {
        Abia: ["Aba", "Arochukwu", "Umuahia", "Ohafia", "Bende"],
        Adamawa: ["Yola", "Mubi", "Numan", "Ganye", "Guyuk"],
        AkwaIbom: ["Uyo", "Ikot Ekpene", "Oron", "Eket", "Ikot Abasi"],
        Anambra: ["Awka", "Onitsha", "Nnewi", "Aguata", "Ogidi"],
        // Add other states and their respective towns here
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
