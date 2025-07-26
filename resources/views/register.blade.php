@extends('layouts.app')

@section('title', __('form.page_title'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center fs-5">
                {{ __('form.registration_title') }}
            </div>

            <div class="card-body">
                {{-- رسالة النجاح --}}
                @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- نموذج التسجيل --}}
                <form method="POST" action="{{ route('register.store') }}">
                    @csrf

                    <!-- الاسم -->
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('form.name') }}</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- البريد الإلكتروني -->
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('form.email') }}</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- رقم الجوال -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">{{ __('form.phone') }}</label>
                        <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror"
                               value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- زر الإرسال -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">
                            {{ __('form.register_button') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
