@extends('layouts.app')

@section('content')
    <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel"><i class='fa fa-plus' aria-hidden='true'>Create new
                            plan</i></h1>
                </div>

                <form action="/subscribe" method='post'>
                    @csrf
                    <div class="modal-body">
                        <label>Name</label><br>
                        <input type="text" name='name' id='name' class='form-control' autocomplete="off">
                        <label>Description</label>
                        <input type="text" name='description' id='description' class='form-control' autocomplete="off">
                        <label>Trial period</label>
                        <input type="text" name='trial_period' id='trial' class='form-control' autocomplete="off">
                        <label>Invoice period</label>
                        <input type="text" name='invoice_period' id='invoice' class='form-control' autocomplete="off">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button class='btn btn-success' name='save' type="submit" title='save subscription'
                            href="{{ url('/subscribe/store') }}" style='display-inline'>save</button>


                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Subscribe</div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#subscribeModal">
                            Create new plan
                        </button>
                        <br />
                        <br />
                        {{-- @if ($message = Session::get('success'))
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif --}}
                        <div class="table-responsive" id="datatable">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>description</th>
                                        <th>Trial period</th>
                                        <th>invoice period</th>
                                        <th width='200px'>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscribes as $subscribes)
                                        <tr>
                                            <td>{{ $subscribes->name }}</td>
                                            <td>{{ $subscribes->description }}</td>
                                            <td>{{ $subscribes->trial_period }}</td>
                                            <td>{{ $subscribes->invoice_period }}</td>

                                            <td>
                                                {!! Form::open(['action' => ['SubscribeController@show', $subscribes->id], 'title' => 'show plan', 'method' => 'POST', 'style' => 'display:inline']) !!}
                                                {{ Form::submit('Show', ['class' => 'btn btn-info btn-sm']) }}
                                                {{ Form::hidden('_method', 'GET') }}
                                                {!! Form::close() !!}

                                                {!! Form::open(['action' => ['SubscribeController@edit', $subscribes->id], 'title' => 'edit plan', 'method' => 'POST', 'style' => 'display:inline']) !!}
                                                {{ Form::submit('Edit', ['class' => 'btn btn-primary btn-sm']) }}
                                                {{ Form::hidden('_method', 'GET') }}
                                                {!! Form::close() !!}


                                                {!! Form::open(['action' => ['SubscribeController@destroy', $subscribes->id], 'title' => 'delete plan', 'method' => 'POST', 'style' => 'display:inline']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
                                                {!! Form::close() !!}

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection








{{-- <form action="{{ url('/subscribe/store') }}" accept-charset='UTF-8' style='display-inline'>

                            @csrf
                            <button class='btn btn-success' name='save' type="submit"
                                title='save subscription'>save</button>
                        </form> --}}


{{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}

{{-- {{ route('/create', $item->id) }}
                {{ route('edit', $item->id) }}
                {{ route('delete', $item->id) }} --}}


{{-- <a href="{{ route('subscribe.show', $subscribes->id) }}"
                                                    title='show plan'><button class='btn btn-info btn-sm'>show</button></a> --}}
{{-- <a href="{{ route('subscribe.edit', $subscribes->id) }}"
                                                    title='edit subscription'><button
                                                        class='btn btn-primary btn-sm'>Edit</button>
                                                </a> --}}
{{-- <a href="/">
                                                    <button type='submit' title='delete subscription' title='delete plan'
                                                        class='btn btn-danger'>Delete
                                                    </button></a> --}}
