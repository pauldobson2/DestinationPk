<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Trip') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Display success message -->
                    @if(session('success'))
                        <div class="bg-green-200 border-green-400 text-green-700 px-4 py-2 rounded-md mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="bg-red-200 border-red-400 text-red-700 px-4 py-2 rounded-md mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('trips.update', $trip->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="trip_title" class="block text-sm font-semibold mb-2">Trip Title:</label>
                            <input type="text" name="trip_title" class="w-full border p-2" value="{{ $trip->trip_title }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="trip_category" class="block text-sm font-semibold mb-2">Trip Category:</label>
                            <select name="trip_category" class="w-full border p-2" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $trip->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- DESTINATIONS NEW CODE STARTS--}}
                        <div id="destinations">
                                <div class="flex items-center"> <!-- Flex container to align label and remove button horizontally -->
                                    <label for="trip_destinations" class="block font-semibold mb-2">Trip Destinations:</label>
                                    <button type="button" id="add-destination" class="bg-blue border border-blue-500 text-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-white ml-2 ">Add More Destination</button>
                                </div>
                            @if(isset($trip->destinations) && count($trip->destinations) > 0)
                                @foreach($trip->destinations as $index => $destination)
                                    <div class="form-group mb-4" id="destination_div_{{ $index + 1 }}">
                                        <div class="flex items-center"> <!-- Flex container to align label and remove button horizontally -->
                                        <label for="destination_{{ $index + 1 }}" class="block text-sm font-semibold mb-2 ml-2">Destination {{ $index + 1 }}</label>
                                        @if($index > 1)
                                            <button type="button" class="btn btn-danger remove-destination ml-2 text-red-600" data-id="{{ $index + 1 }}">Remove</button>
                                        @endif
                                        </div>
                                        <input type="text"   id="destination_{{ $index + 1 }}"     name="trip_destinations[{{ $index + 1 }}][name]" class="location-input w-full border p-2" value="{{ $destination->name }}" placeholder="Enter a destination">
                                        <input type="hidden" id="destination_{{ $index + 1 }}_lat" name="trip_destinations[{{ $index + 1 }}][latitude]" value="{{ $destination->latitude }}">
                                        <input type="hidden" id="destination_{{ $index + 1 }}_lng" name="trip_destinations[{{ $index + 1 }}][longitude]" value="{{ $destination->longitude }}">
                                    </div>
                                @endforeach
                                @php
                                    $destinationCount = count($trip->destinations);
                                @endphp
                            @else
                                <div class="form-group mb-4" id="destination_div_1">
                                    <label for="destination_1" class="block text-sm font-semibold mb-2">Destination 1</label>
                                    <input type="text" id="destination_1" name="trip_destinations[1][name]" class="location-input w-full border p-2" placeholder="Enter a destination">
                                    <input type="hidden" id="destination_1_lat" name="trip_destinations[1][latitude]" value="">
                                    <input type="hidden" id="destination_1_lng" name="trip_destinations[1][longitude]" value="">
                                </div>
                                <div class="form-group mb-4" id="destination_div_2">
                                    <label for="destination_2" class="block text-sm font-semibold mb-2">Destination 2</label>
                                    <input type="text" id="destination_2" name="trip_destinations[2][name]" class="location-input w-full border p-2" placeholder="Enter a destination">
                                    <input type="hidden" id="destination_2_lat" name="trip_destinations[2][latitude]" value="">
                                    <input type="hidden" id="destination_2_lng" name="trip_destinations[2][longitude]" value="">
                                </div>
                                @php
                                    $destinationCount = 2;
                                @endphp
                            @endif
                        </div>

                        {{-- DESTINATIONS NEW CODE ENDS--}}

{{--                        <div class="mb-4">--}}
{{--                            <label for="trip_destinations" class="block text-sm font-semibold mb-2">Trip Destinations:</label>--}}
{{--                            <input type="text" name="trip_destinations" class="w-full border p-2" value="{{ $trip->trip_destinations }}" required>--}}
{{--                        </div>--}}

                        <div class="mb-4">
                            <label for="trip_duration" class="block text-sm font-semibold mb-2">Trip Duration:</label>
                            <input type="number" name="trip_duration" class="w-full border p-2" value="{{ $trip->trip_duration }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="trip_image" class="block text-sm font-semibold mb-2">Trip Image:</label>
                            <input type="file" name="trip_image" class="w-full border p-2">
                            <img src="{{ asset('assets/images/resources/featured/' . $trip->trip_image) }}" alt="Trip Image" class="mt-2 max-w-xs">
                        </div>

                        <div class="mb-4">
                            <label for="trip_price" class="block text-sm font-semibold mb-2">Trip Price:</label>
                            <input type="number" name="trip_price" class="w-full border p-2" value="{{ $trip->trip_price }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="trip_description" class="block text-sm font-semibold mb-2">Trip Description:</label>
                            <textarea id="trip_description" name="trip_description" class="w-full border p-2" required>{{ $trip->trip_description }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="trip_overview" class="block text-sm font-semibold mb-2">Trip Overview:</label>
                            <textarea id="trip_overview" name="trip_overview" class="w-full border p-2" >{{ $trip->trip_overview }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="trip_includes" class="block text-sm font-semibold mb-2">Trip Includes:</label>
                            <textarea id="trip_includes" name="trip_includes" class="w-full border p-2" required>{{ $trip->trip_includes }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="trip_excludes" class="block text-sm font-semibold mb-2">Trip Excludes:</label>
                            <textarea id="trip_excludes" name="trip_excludes" class="w-full border p-2" required>{{ $trip->trip_excludes }}</textarea>
                        </div>

{{--                        <div class="mb-4">--}}
{{--                            <label for="trip_itinerary" class="block text-sm font-semibold mb-2">Trip Itinerary:</label>--}}
{{--                            <textarea id="trip_itinerary" name="trip_itinerary" class="w-full border p-2" required>{{ $trip->trip_itinerary }}</textarea>--}}
{{--                        </div>--}}

                        {{-- TRIP ITINERARY NEW CODE STARTS --}}
                        <div class="block">
                            <div class="flex items-center">
                                <label for="trip_itineraries" class="block font-semibold mb-2">Trip Itineraries:</label>
                                <button type="button" id="add-itinerary" class="bg-blue border border-blue-500 text-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-white ml-2">Add More Itinerary</button>
                            </div>
                            <div id="itineraries" style="border: 1px solid black">
                                @if(isset($trip->itineraries) && count($trip->itineraries) > 0)
                                    @foreach($trip->itineraries as $index => $itinerary)
                                        <div class="form-group mb-4" id="itinerary_div_{{ $index + 1 }}">
                                            <div class="flex items-center">
                                                <label for="itinerary_{{ $index + 1 }}" class="block text-sm font-semibold mb-2 ml-2">Itinerary {{ $index + 1 }}</label>
                                                <button type="button" class="remove-itinerary bg-red border border-red-500 text-red-500 px-4 py-2 rounded hover:bg-red-500 hover:text-white ml-2">Remove</button>
                                            </div>
                                            <input type="text" id="itinerary_{{ $index + 1 }}" name="trip_itineraries[{{ $index + 1 }}][title]" class="w-full border p-2 mb-2" value="{{ $itinerary->title }}" required>
                                            <input type="file" id="itinerary_image_{{ $index + 1 }}" name="trip_itineraries[{{ $index + 1 }}][image]" class="w-full border p-2 mb-2" >
                                            @if(!empty($itinerary->image))
                                                <input type="hidden" name="trip_itineraries[{{ $index + 1 }}][existing_image]" value="{{$itinerary->image}}">
                                                <img src="{{ asset('assets/images/resources/destinations/' . $itinerary->image) }}" alt="Trip Itinerary Image" class="mt-2 max-w-xs">
                                            @endif
                                            <textarea id="itinerary_detail_{{ $index + 1 }}" name="trip_itineraries[{{ $index + 1 }}][detail]" class="mb-2 w-full border p-2 itinerary-textarea">{{ $itinerary->detail }}</textarea>
                                        </div>
                                    @endforeach
                                    @php
                                        $itineraryCount = count($trip->itineraries);
                                    @endphp
                                @else
                                    <div class="form-group mb-4" id="itinerary_div_1">
                                        <label for="itinerary_1" class="block text-sm font-semibold mb-2 ml-2">Itinerary 1</label>
                                        <input type="text" id="itinerary_1" name="trip_itineraries[1][title]" class="w-full border p-2 mb-2" placeholder="Enter itinerary title" required>
                                        <input type="file" id="itinerary_image_1" name="trip_itineraries[1][image]" class="w-full border p-2 mb-2" >
                                        <textarea id="itinerary_detail_1" name="trip_itineraries[1][detail]" class="mb-2 w-full border p-2 itinerary-textarea" placeholder="Enter itinerary detail"></textarea>
                                    </div>
                                    @php
                                        $itineraryCount = 1;
                                    @endphp
                                @endif
                            </div>
                        </div>
                        {{-- TRIP ITINERARY NEW CODE ENDS --}}

                        {{-- TRIP SCHEDULE NEW CODE STARTS --}}
                        <div class="block">
                            <div class="flex items-center">
                                <label for="trip_schedules" class="block text-sm font-semibold mb-2">Trip Schedules:</label>
                                <button type="button" id="add-schedule" class="bg-blue border border-blue-500 text-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-white ml-2">Add More Schedules</button>
                            </div>
                            <div id="schedules" style="border: 1px solid black">
                                @if(isset($trip->schedules) && count($trip->schedules) > 0)
                                    @foreach($trip->schedules as $index => $schedule)
                                        <div class="form-group mb-4" id="schedule_div_{{ $index + 1 }}">
                                            <label for="schedule_{{ $index + 1 }}" class="block text-sm font-semibold mb-2 ml-2">Schedule {{ $index + 1 }}</label>
                                            <div class="flex items-center">
                                                <div class="form-group w-1/4 ml-1">
                                                    <label for="schedule_{{ $index + 1 }}_start_date" class="block text-sm font-semibold">Start Date</label>
                                                    <input type="date" id="schedule_{{ $index + 1 }}_start_date" name="trip_schedules[{{ $index + 1 }}][start_date]" value="{{$schedule->start_date}}" class="border p-2 start_date" required />
                                                </div>
                                                <div class="form-group w-1/4 ml-1">
                                                    <label for="schedule_{{ $index + 1 }}_end_date" class="block text-sm font-semibold">End Date</label>
                                                    <input type="date" id="schedule_{{ $index + 1 }}_end_date" name="trip_schedules[{{ $index + 1 }}][end_date]" value="{{$schedule->end_date}}" class="border p-2 end_date" required/>
                                                </div>
                                                <div class="form-group w-1/4 ml-1">
                                                    <label for="schedule_{{ $index + 1 }}_price" class="block text-sm font-semibold">Price</label>
                                                    <input type="number" id="schedule_{{ $index + 1 }}_price" step="0.01" name="trip_schedules[{{ $index + 1 }}][price]" value="{{$schedule->price}}" class="border w-1/2 p-2 price" />
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @php
                                        $scheduleCount = count($trip->schedules);
                                    @endphp
                                @else
                                <div class="form-group mb-4" id="schedule_div_1">
                                    <label for="schedule_1" class="block text-sm font-semibold mb-2 ml-2">Schedule 1</label>
                                    <div class="flex items-center">
                                        <div class="form-group w-1/4 ml-1">
                                            <label for="schedule_1_start_date" class="block text-sm font-semibold">Start Date</label>
                                            <input type="date" id="schedule_1_start_date" name="trip_schedules[1][start_date]" class="border p-2 start_date" required/>
                                        </div>
                                        <div class="form-group w-1/4 ml-1">
                                            <label for="schedule_1_end_date" class="block text-sm font-semibold">End Date</label>
                                            <input type="date" id="schedule_1_end_date" name="trip_schedules[1][end_date]" class="border p-2 end_date" required />
                                        </div>
                                        <div class="form-group w-1/4 ml-1">
                                            <label for="schedule_1_price" class="block text-sm font-semibold">Price</label>
                                            <input type="number" id="schedule_1_price" step="0.01" name="trip_schedules[1][price]" class="border w-1/2 p-2 price" />
                                        </div>
                                    </div>
                                </div>
                                    @php
                                        $scheduleCount = 1;
                                    @endphp
                                @endif
                            </div>
                        </div>
                        {{-- TRIP SCHEDULE NEW CODE ENDS --}}
                        <button type="submit" class="bg-blue border border-blue-500 text-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-white">Update Trip</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- CKEditor scripts -->
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR-KEY&libraries=places"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                ClassicEditor.create(document.querySelector('#trip_description')).catch(error => console.error(error));
                ClassicEditor.create(document.querySelector('#trip_overview')).catch(error => console.error(error));
                ClassicEditor.create(document.querySelector('#trip_includes')).catch(error => console.error(error));
                ClassicEditor.create(document.querySelector('#trip_excludes')).catch(error => console.error(error));
                // Initialize CKEditor for existing itinerary textareas
                document.querySelectorAll('.itinerary-textarea').forEach((textarea) => {
                    ClassicEditor.create(textarea).catch(error => {
                        console.error(error);
                    });
                });
                let destinationCount = {{ $destinationCount }};
                document.getElementById('add-destination').addEventListener('click', function() {
                    destinationCount++;
                    const destinationsDiv = document.getElementById('destinations');
                    const newDestinationDiv = document.createElement('div');
                    newDestinationDiv.classList.add('form-group', 'mb-4');
                    newDestinationDiv.id = `destination_div_${destinationCount}`;
                    newDestinationDiv.innerHTML = `
                    <div class="flex items-center">
                        <label for="destination_${destinationCount}" class="block text-sm font-semibold mb-2 ml-2">Destination ${destinationCount}</label>
                        <button type="button" class="remove-destination bg-red border border-red-500 text-red-500 px-4 py-2 rounded hover:bg-red-500 hover:text-white ml-2">Remove</button>
                    </div>
                    <input type="text" id="destination_${destinationCount}" name="trip_destinations[${destinationCount}][name]" class="location-input w-full border p-2" placeholder="Enter a destination">
                    <input type="hidden" id="destination_${destinationCount}_lat" name="trip_destinations[${destinationCount}][latitude]">
                    <input type="hidden" id="destination_${destinationCount}_lng" name="trip_destinations[${destinationCount}][longitude]">
                `;
                    destinationsDiv.appendChild(newDestinationDiv);
                    initializeGooglePlacesAutocomplete();
                    reindexDestinations();
                });

                document.addEventListener('click', function(event) {
                    if (event.target.classList.contains('remove-destination')) {
                        const destinationDiv = event.target.closest('.form-group');
                        destinationDiv.remove();
                        reindexDestinations();
                    }
                });

                function reindexDestinations() {
                    const destinationDivs = document.querySelectorAll('[id^="destination_div_"]');
                    destinationDivs.forEach((div, index) => {
                        const newIndex = index + 1;
                        div.id = `destination_div_${newIndex}`;
                        const label = div.querySelector('label');
                        //const input = div.querySelector('.location-input');
                        const input = div.querySelector('input[type="text"]');
                        const latInput = div.querySelector('input[type="hidden"][id*="lat"]');
                        const lngInput = div.querySelector('input[type="hidden"][id*="lng"]');
                        label.setAttribute('for', `destination_${newIndex}`);
                        label.textContent = `Destination ${newIndex}`;
                        input.id = `destination_${newIndex}`;
                        input.name = `trip_destinations[${newIndex}][name]`;
                        latInput.id = `destination_${newIndex}_lat`;
                        latInput.name = `trip_destinations[${newIndex}][latitude]`;
                        lngInput.id = `destination_${newIndex}_lng`;
                        lngInput.name = `trip_destinations[${newIndex}][longitude]`;
                    });
                }

                ////////////////////////////////////////////////////////////////////////////////////////////////

                let itineraryCount = 1;
                document.getElementById('add-itinerary').addEventListener('click', function() {
                    itineraryCount++;
                    const itinerariesDiv = document.getElementById('itineraries');
                    const newItineraryDiv = document.createElement('div');
                    newItineraryDiv.classList.add('form-group', 'mb-4');
                    newItineraryDiv.id = `itinerary_div_${itineraryCount}`;
                    newItineraryDiv.innerHTML = `
                    <div class="flex items-center">
                        <label for="itinerary_${itineraryCount}" class="block text-sm font-semibold mb-2 ml-2">Itinerary ${itineraryCount}</label>
                        <button type="button" class="remove-itinerary bg-red border border-red-500 text-red-500 px-4 py-2 rounded hover:bg-red-500 hover:text-white ml-2">Remove</button>
                    </div>
                    <input type="text" id="itinerary_${itineraryCount}" name="trip_itineraries[${itineraryCount}][title]" class="w-full border p-2 mb-2" placeholder="Enter itinerary title" required>
                    <input type="file" id="itinerary_image_${itineraryCount}" name="trip_itineraries[${itineraryCount}][image]" class="w-full border p-2 mb-2" >
                    <textarea id="itinerary_detail_${itineraryCount}" name="trip_itineraries[${itineraryCount}][detail]" class="mb-2 w-full border p-2 itinerary-textarea" placeholder="Enter itinerary detail"></textarea>
                `;
                    itinerariesDiv.appendChild(newItineraryDiv);
                    //ClassicEditor.create(document.querySelector(`#itinerary_detail_${itineraryCount}`)).catch(error => console.error(error));
                    ClassicEditor.create(newItineraryDiv.querySelector(`#itinerary_detail_${itineraryCount}`)).catch(error => console.error(error));
                    reindexItineraries();
                });

                document.addEventListener('click', function(event) {
                    if (event.target.classList.contains('remove-itinerary')) {
                        const itineraryDiv = event.target.closest('.form-group');
                        itineraryDiv.remove();
                        reindexItineraries();
                    }
                });

                function reindexItineraries() {
                    const itineraryDivs = document.querySelectorAll('[id^="itinerary_div_"]');
                    itineraryDivs.forEach((div, index) => {
                        const newIndex = index + 1;
                        div.id = `itinerary_div_${newIndex}`;
                        const label = div.querySelector('label');
                        const input = div.querySelector('input[type="text"]');
                        const fileInput = div.querySelector('input[type="file"]');
                        const textarea = div.querySelector('textarea');
                        label.setAttribute('for', `itinerary_${newIndex}`);
                        label.textContent = `Itinerary ${newIndex}`;
                        input.id = `itinerary_${newIndex}`;
                        input.name = `trip_itineraries[${newIndex}][title]`;
                        fileInput.id = `itinerary_image_${newIndex}`;
                        fileInput.name = `trip_itineraries[${newIndex}][image]`;
                        textarea.id = `itinerary_detail_${newIndex}`;
                        textarea.name = `trip_itineraries[${newIndex}][detail]`;
                    });
                }

                ////////////////////////////////////////////////////////////////////////////////////
                let scheduleCount = 1;
                document.getElementById('add-schedule').addEventListener('click', function() {
                    scheduleCount++;
                    const schedulesDiv = document.getElementById('schedules');
                    const newScheduleDiv = document.createElement('div');
                    newScheduleDiv.classList.add('form-group', 'mb-4');
                    newScheduleDiv.id = `schedule_div_${scheduleCount}`;
                    newScheduleDiv.innerHTML = `
        <div class="flex items-center">
            <label for="schedule_${scheduleCount}" class="block text-sm font-semibold mb-2 ml-2">Schedule ${scheduleCount}</label>
            <button type="button" class="remove-schedule bg-red border border-red-500 text-red-500 px-4 py-2 rounded hover:bg-red-500 hover:text-white ml-2">Remove</button>
        </div>
        <div class="flex items-center">
            <div class="form-group w-1/4 ml-1">
                <label for="schedule_${scheduleCount}_start_date" class="block text-sm font-semibold">Start Date</label>
                <input type="date" id="schedule_${scheduleCount}_start_date" name="trip_schedules[${scheduleCount}][start_date]" class="border p-2 start_date" required />
            </div>
            <div class="form-group w-1/4 ml-1">
                <label for="schedule_${scheduleCount}_end_date" class="block text-sm font-semibold">End Date</label>
                <input type="date" id="schedule_${scheduleCount}_end_date" name="trip_schedules[${scheduleCount}][end_date]" class="border p-2 end_date" required/>
            </div>
            <div class="form-group w-1/4 ml-1">
                <label for="schedule_${scheduleCount}_price" class="block text-sm font-semibold">Price</label>
                <input type="number" id="schedule_${scheduleCount}_price" step="0.01" name="trip_schedules[${scheduleCount}][price]" class="border w-1/2 p-2 price" />
            </div>
        </div>`;
                    schedulesDiv.appendChild(newScheduleDiv);
                    reindexSchedules();
                });

                document.addEventListener('click', function(event) {
                    if (event.target.classList.contains('remove-schedule')) {
                        const scheduleDiv = event.target.closest('.form-group');
                        scheduleDiv.remove();
                        reindexSchedules();
                    }
                });

                function reindexSchedules() {
                    const scheduleDivs = document.querySelectorAll('[id^="schedule_div_"]');
                    scheduleDivs.forEach((div, index) => {
                        const newIndex = index + 1;
                        div.id = `schedule_div_${newIndex}`;

                        const label = div.querySelector('label');
                        if (label) {
                            label.setAttribute('for', `schedule_${newIndex}`);
                            label.textContent = `Schedule ${newIndex}`;
                        }

                        const start_date_Input = div.querySelector('.start_date');
                        if (start_date_Input) {
                            start_date_Input.id = `schedule_${newIndex}_start_date`;
                            start_date_Input.name = `trip_schedules[${newIndex}][start_date]`;
                        }

                        const end_date_Input = div.querySelector('.end_date');
                        if (end_date_Input) {
                            end_date_Input.id = `schedule_${newIndex}_end_date`;
                            end_date_Input.name = `trip_schedules[${newIndex}][end_date]`;
                        }

                        const price_Input = div.querySelector('.price');
                        if (price_Input) {
                            price_Input.id = `schedule_${newIndex}_price`;
                            price_Input.name = `trip_schedules[${newIndex}][price]`;
                        }
                    });
                }
                ////////////////////////////////////////////////////////////////////////////////////

             //   initializeGooglePlacesAutocomplete();
            });
            $(window).on('load', function() {
                initializeGooglePlacesAutocomplete();
            });
            // Google Places Autocomplete initialization
            function initializeGooglePlacesAutocomplete() {
                const locationInputs = document.querySelectorAll('.location-input');
                locationInputs.forEach((input, index) => {
                    const autocomplete = new google.maps.places.Autocomplete(input);
                    autocomplete.addListener('place_changed', function() {
                        const place = autocomplete.getPlace();
                        document.getElementById(`destination_${index + 1}_lat`).value = place.geometry.location.lat();
                        document.getElementById(`destination_${index + 1}_lng`).value = place.geometry.location.lng();
                    });
                });
            }
        </script>
    @endpush
</x-app-layout>
