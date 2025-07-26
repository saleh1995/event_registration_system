@extends('layouts.app')

@section('title', __('form.register_success'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-success text-white text-center fs-5">
                    {{ __('form.register_success') }}
                </div>

                <div class="card-body text-center">

                    <p class="mb-3">{{ __('form.qr_instructions') }}</p>

                    {{-- عرض QR --}}
                    <img src="{{ asset('storage/' . $attendee->qr_code) }}" alt="QR Code" class="img-fluid mb-4"
                        style="max-width: 300px;">

                    <ul class="list-group text-start">
                        <li class="list-group-item"><strong>{{ __('form.name') }}:</strong> {{ $attendee->name }}</li>
                        <li class="list-group-item"><strong>{{ __('form.email') }}:</strong> {{ $attendee->email }}</li>
                        <li class="list-group-item"><strong>{{ __('form.phone') }}:</strong> {{ $attendee->phone }}</li>
                    </ul>

                    <div class="mt-4">
                        <a href="{{ route('register.form') }}"
                            class="btn btn-primary">{{ __('form.register_another') }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
