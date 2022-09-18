<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('role.store') }}">
                        @csrf
                        <div>
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <h3 class="inline-flex font-semibold text-xl text-gray-800 leading-tight py-4">Permissions</h3>
                        <div class="grid grid-cols-4 gap-4">
                            @forelse ($permissions as $permission)
                            <label for="perrmission" class="inline-flex">
                                <x-checkbox name="permissions[]" value="{{ $permission->name }}" />
                                <span class="ml-2 text-sm text-gray-600">{{ __( $permission->name ) }}</span>
                            </label>
                            @empty
                            {{ __('No Permissions Found') }}
                            @endforelse
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