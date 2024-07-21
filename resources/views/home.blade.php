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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>

<head>
    <title>ABC.com</title>
</head>

<body>
    <p>From Email: {{ $from_email }}</p>
    <p>To Email: {{ $to_email }}</p>
    <p>First Name: {{ $email_first_name }}</p>
    <p>Last Name: {{ $email_last_name }}</p>
</body>

</html>
