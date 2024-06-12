@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body-1">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in successfully!') }}
                    <h1>Welcome to Ideal Mineral Water Company MIS</h1>
                    <p><a href="/mainpage" class="main-link">Go to Main Page</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
