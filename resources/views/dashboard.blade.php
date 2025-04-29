<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Custom Content -->
                    <h4>Welcome, {{ auth()->user()->name }}!</h4>
                    <p>{{ __("You're logged in and can manage your intellectual property records.") }}</p>
                    
                    <div class="mt-4">
                        <!-- Record Count Card -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow-sm mb-4">
                            <h5 class="font-semibold">Total IPR Records: {{ $iprsCount }}</h5>
                            <p class="text-sm">View, edit, or delete your existing records below.</p>
                            <a href="{{ route('iprs.index') }}" class="btn btn-primary mt-2">View Records</a>
                        </div>
                        <!-- Add New Record Card -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                            <h5 class="font-semibold">Add New IPR Record</h5>
                            <p class="text-sm">Start managing your intellectual property today by adding a new record.</p>
                            <a href="{{ route('iprs.create') }}" class="btn btn-success mt-2">Add New Record</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
