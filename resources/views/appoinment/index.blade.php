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
                    <div class="flex justify-between items-center">
                        @can('appointment create')
                        <x-link href="{{ route('appoinment.create') }}" class="m-4">Appoinment</x-link>
                        @endcan
                        <form class="m-4" method="GET" action="{{ route('appoinment.index') }}">
                            <div class="flex w-56">
                                <div class="relative w-full">
                                    <input name="search" class="inline-flex rounded-lg py-2 w-full z-20 text-sm text-gray-900 bg-gray-50  border border-gray-300 focus:ring-blue-500 focus:border-blue-500" type="search" value="{{ request()->input('search') }}" placeholder="Search..." required />
                                    <x-button class="absolute top-0 right-0">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </x-button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                @can('appointment create')
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Doctor') }}
                                </th>
                                @else
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Patient') }}
                                </th>
                                @endcan
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Date') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Time') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Actions') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($appoinments as $appoinment)
                            <tr class="bg-white border-b">
                                @can('appointment create')
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $appoinment->doctor->user->name }}
                                </td>
                                @else
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $appoinment->patient->user->name }}
                                </td>
                                @endcan
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $appoinment->appointment_date }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $appoinment->appointment_time }}
                                </td>
                                <td class="px-0 py-4 w-56">
                                    <x-link href="{{ route('record.create', $appoinment) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg> Create
                                    </x-link>
                                    <x-link href="{{ route('record.index') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg> View
                                    </x-link>
                                </td>
                            </tr>
                            @empty
                            <tr class="bg-white border-b">
                                <td colspan="2" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ __('No appoinments Found') }}
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="px-6 py-4">
                        {{ $appoinments->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>