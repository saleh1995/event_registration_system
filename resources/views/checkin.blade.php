@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>{{ __('checkin.title') }}</h1>

        <div class="card mt-4">
            <div class="card-body">
                <p><strong>{{ __('checkin.name') }}:</strong> {{ $attendee->name }}</p>
                <p><strong>{{ __('checkin.email') }}:</strong> {{ $attendee->email }}</p>

                @if(session('status'))
                    <div class="alert alert-info mt-3">
                        {{ session('status') }}
                    </div>
                @endif

                @if(!$attendee->checked_in_at)
                    <form method="POST" action="{{ route('checkin.process', $attendee->id) }}">
                        @csrf
                        <button class="btn btn-success mt-3">
                            {{ __('checkin.checkin') }}
                        </button>
                    </form>
                @elseif(!session('status'))
                    <div class="alert alert-success mt-3">
                        {{ __('checkin.already_checked_in') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
