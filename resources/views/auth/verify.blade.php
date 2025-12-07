@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-center">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body text-center">
                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p>{{ __('If you did not receive the email, please check your spam folder or register again.') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
