@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-lg rounded-lg px-8 py-6 mt-8 sm:max-w-sm mx-auto">
            <h2 class="text-2xl font-semibold mb-6 text-gray-800">{{ __('Edit Profile') }}</h2>
            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('user-profile.update') }}" class="space-y-6">
                @csrf

                @foreach (['name', 'email', 'phone', 'nhs_number', 'address', 'date_of_birth', 'gender'] as $field)
                    <div>
                        <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">{{ __(ucfirst(str_replace('_', ' ', $field))) }}</label>
                        <input id="{{ $field }}" type="{{ $field == 'date_of_birth' ? 'date' : 'text' }}" class="mt-2 block w-full shadow-sm focus:ring-indigo-500 focus:ring-indigo-500 sm:text-sm border-gray-300 rounded-md" name="{{ $field }}" value="{{ old($field, $currentUser->$field) }}" {{ in_array($field, ['first_name', 'last_name', 'email']) ? 'required' : '' }}>
                        @error($field)
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                @endforeach

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        {{ __('Update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
