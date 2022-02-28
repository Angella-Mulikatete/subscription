@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/subscribe">Back</a>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('subscribe.update', $subscribes->id) }}" method='POST'>
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
                            <button class='btn btn-success ' name='update' type='submit'
                                title='update subscription'>update</button>
                            {{ Form::hidden('_method', 'PUT') }}
                            <button type='submit' class='btn btn-danger ' title='Cancel plan'>Cancel</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



{{-- {!! Form::open(['action' => ['SubscribeController@update', $subscribes->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{ Form::label('name', 'name') }}
    {{ Form::text('name', $subscribes->name, ['class' => 'form-control', 'placeholder' => 'name']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'description') }}
    {{ Form::text('name', $subscribes->description, ['class' => 'form-control', 'placeholder' => 'description']) }}
</div>

<div class="form-group">
    {{ Form::label('trial_period', 'trial_period') }}
    {{ Form::text('trial_period', $subscribes->trial_period, ['class' => 'form-control','placeholder' => 'trial_period']) }}
</div>

<div class="form-group">
    {{ Form::label('invoice_period', 'invoice_period') }}
    {{ Form::text('invoice_period', $subscribes->invoice_period, ['class' => 'form-control','placeholder' => 'invoice_period']) }}
</div>

{{ Form::hidden('_method', 'PUT') }}
{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!} --}}


{{-- <form action="/subscribe{{ $subscribes->id }}" method='post'>
    @csrf
    <input type="hidden" name='id' value="{{ $subscribes->id }}" id='id' />
    <label>name</label><br>
    <input type="text" name='name' id='name' value='{{ $subscribes->name }}' class='form-control'>
    <label>Description</label>
    <input type="text" name='description' id='description' value='{{ $subscribes->description }}'
        class='form-control'>
    <label>trial period</label>
    <input type="text" name='trial_period' id='trial_period' value='{{ $subscribes->trial_period }}'
        class='form-control'>
    <label>sign-up fee</label>
                            <input type="text" name='sign-up' id='sign-up' value='{{ $subscribes->sign-up }}' class='form-control'>
    <label>invoice period</label>
    <input type="text" name='invoice_period' id='invoice_period' value='{{ $subscribes->invoice_period }}'
        class='form-control'>
    {{ Form::hidden('_method', 'PUT') }}
    <a href="/subscribe" title='update subscription'><button class='btn btn-success btn-sm'>update</button></a> --}}

















{{-- <form method="POST" action="{{ route('register') }}">

{{ route('subscribe/'. $subscribes->id) }}
value="{{ $subscribes->name }}" 
value="{{ $subscribes->description }}"
value="{{ $subscribes->trial_period }}"
value="{{ $subscribes->invoice_period }}"


                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form> --}}
