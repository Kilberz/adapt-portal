<!-- resources/views/users/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-lg rounded-lg px-8 py-6 mt-8 sm:max-w-sm mx-auto">
            <h2 class="text-2xl font-semibold mb-1 text-gray-800">{{ __('Edit User') }}</h2>
            <a class="mb-6 inline-flex my-auto py-1" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                </svg>
                <span class="my-auto">Back to Patients</span>
            </a>
            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('users.update', $user->id) }}" class="space-y-6">
                @csrf

                @foreach (['name', 'email', 'phone', 'nhs_number', 'address', 'date_of_birth', 'gender'] as $field)
                    <div>
                        <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">{{ __(ucfirst(str_replace('_', ' ', $field))) }}</label>
                        <input id="{{ $field }}" type="{{ $field == 'date_of_birth' ? 'date' : 'text' }}" class="mt-2 block w-full shadow-sm focus:ring-primary focus:border-primary sm:text-sm border-gray-300 rounded-md" name="{{ $field }}" value="{{ old($field, $user->$field) }}" {{ in_array($field, ['first_name', 'last_name', 'email']) ? 'required' : '' }}>
                        @error($field)
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                @endforeach

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-primary px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
