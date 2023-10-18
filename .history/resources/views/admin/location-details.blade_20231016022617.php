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
  Abia: ["Aba", "Arochukwu", "Umuahia", "Ohafia", "Bende"],
  Adamawa: ["Yola", "Mubi", "Numan", "Ganye", "Guyuk"],
  AkwaIbom: ["Uyo", "Ikot Ekpene", "Oron", "Eket", "Ikot Abasi"],
  Anambra: ["Awka", "Onitsha", "Nnewi", "Aguata", "Ogidi"],
  Bauchi: ["Bauchi", "Azare", "Jama'are", "Misau", "Katagum"],
  Bayelsa: ["Yenagoa", "Ogbia", "Brass", "Sagbama", "Ekeremor"],
  Benue: ["Makurdi", "Gboko", "Otukpo", "Katsina-Ala", "Kwande"],
  Borno: ["Maiduguri", "Biama", "Gamboru", "Damasak", "Bama"],
  CrossRiver: ["Calabar", "Ugep", "Ogoja", "Ikom", "Obudu"],
  Delta: ["Asaba", "Warri", "Agbor", "Oghara", "Sapele"],
  Ebonyi: ["Abakaliki", "Afikpo", "Onueke", "Ezza", "Ishielu"],
  Edo: ["Benin City", "Warri", "Auchi", "Irrua", "Sabongida-Ora"],
  Ekiti: ["Ado-Ekiti", "Ikere-Ekiti", "Ikole", "Ise-Ekiti", "Ode-Ekiti"],
  Enugu: ["Enugu", "Nsukka", "Awgu", "Oji-River", "Udi"],
  Gombe: ["Gombe", "Kumo", "Dukku", "Nafada", "Bajoga"],
  Imo: ["Owerri", "Orlu", "Okigwe", "Umuaka", "Obowo"],
  Jigawa: ["Dutse", "Hadejia", "Birnin Kudu", "Gumel", "Kazaure"],
  Kaduna: ["Kaduna", "Zaria", "Kafanchan", "Sanga", "Ikara"],
  Kano: ["Kano", "Wudil", "Kura", "Bichi", "Gwarzo"],
  Katsina: ["Katsina", "Daura", "Funtua", "Malumfashi", "Mani"],
  Kebbi: ["Birnin Kebbi", "Jega", "Zuru", "Kalgo", "Argungu"],
  Kogi: ["Lokoja", "Idah", "Kabba", "Okene", "Ankpa"],
  Kwara: ["Ilorin", "Offa", "Omu-Aran", "Jebba", "Lafiagi"],
  Lagos: ["Agege", "Lagos", "Ikeja", "", "Badagry", "Epe", "Ikeja", "Ikorodu"],
  Nasarawa: ["Lafia", "Keffi", "Karu", "Akwanga", "Nasarawa"],
  Niger: ["Minna", "Bida", "Kontagora", "Suleja", "Zungeru"],
  Ogun: ["Abeokuta", "Ijebu-Ode", "Ilaro", "Ota", "Sagamu"],
  Ondo: ["Akure", "Ondo", "Okitipupa", "Owo", "Idanre"],
  Osun: ["Oshogbo", "Ilesa", "Ife", "Ede", "Ikire"],
  Oyo: ["Ibadan", "Ogbomosho", "Iseyin", "Kishi", "Oyo"],
  Plateau: ["Jos", "Barkin Ladi", "Bokkos", "Mangu", "Pankshin"],
  Rivers: ["Port Harcourt", "Bonny", "Bori", "Degema", "Ahoada"],
  Sokoto: ["Sokoto", "Gwadabawa", "Wurno", "Rabah", "Tambuwal"],
  Taraba: ["Jalingo", "Wukari", "Bali", "Takum", "Gembu"],
  Yobe: ["Damaturu", "Bade", "Bulangu", "Buni-Yadi", "Gujba"],
  Zamfara: ["Gusau", "Anka", "Bakura", "Maradun", "Shinkafi"],
  FCT: ["Abuja", "Gwagwalada", "Kuje", "Bwari", "Kwali"]
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
