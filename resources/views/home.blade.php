@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                   <p> But can't Access the Dashboard.
                    if you wanna get dashboard then use </p>
                    <p>email : admin@gmail.com</p>
                    <p>password : 12345678 </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
