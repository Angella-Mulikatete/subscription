@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">show a plan</div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/subscribe">Back</a>
                    </div>
                    <div class="card-body">

                       

                        {{-- <form action="/subscribe" method='POST'>
                            @csrf
                            <input type="hidden" name='id' value="{{ $subscribes->id }}" id='id' />
                            <label>name</label><br>
                            <input type="text" name='name' id='name' value='{{ $subscribes->name }}' class='form-control'>
                            <label>Description</label>
                            <input type="text" name='description' id='description' value='{{ $subscribes->description }}'
                                class='form-control'>
                            <label>trial period</label>
                            <input type="text" name='trial_period' id='trial_period'
                                value='{{ $subscribes->trial_period }}' class='form-control'>
                            <label>invoice period</label>
                            <input type="text" name='invoice_period' id='invoice_period'
                                value='{{ $subscribes->invoice_period }}' class='form-control'>
                        </form> --}}

                    </div>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="/subscribe">
                        @csrf
                        <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection



{{-- @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form> --}}



{{-- {{ $subscribes->name }}
{{ $subscribes->description }}
{{ $subscribes->trial_period }}
{{ $subscribes->invoice_period }} --}}
