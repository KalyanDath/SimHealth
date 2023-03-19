<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Appoinment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('appoinment.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div>
                                <x-label for="doctor_id" value="{{ __('Doctor') }}" />
                                <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" name="doctor_id">
                                    <option value="" selected>--Select Any--</option>
                                    @foreach( $doctors as $doctor )
                                    <option value="{{ $doctor->id }}" @if (old('doctor_id')==$doctor->id) selected @endif>{{ $doctor->user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
                            <div>
                                <x-label for="appointment_date" value="{{ __('Appointment Date') }}" />
                                <x-input id="appointment_date" class="block mt-1 w-full" type="text" name="appointment_date" :value="old('appointment_date')" required autofocus autocomplete="appointment_date" />
                            </div>

                            <div>
                                <x-label for="appointment_time" value="{{ __('Appointment Time') }}" />
                                <x-input id="appointment_time" class="block mt-1 w-full" type="text" name="appointment_time" :value="old('appointment_time')" required autocomplete="appointment_time" />
                            </div>
                        </div>
                        <div class="flex mt-4">
                            <x-button>
                                {{ __('Save') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>