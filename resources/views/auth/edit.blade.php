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




