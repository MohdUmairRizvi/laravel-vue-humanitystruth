@extends('layouts.master')

@section('content')
<div class="form-control">
    <div class="w3-container w3-padding w3-card-4 w3-round-large w3-margin w3-white form-control">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="w3-container w3-padding">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="w3-container w3-margin-top">
                <button class="w3-button w3-black w3-right" type="submit">
                    Send Password Reset Link
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
