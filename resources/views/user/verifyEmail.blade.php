@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Verify email</div>

                <div class="panel-body">
                    Before allowing you to add any trial accounts, we need to check your email address.
                    Click below to send a confirmation email to {{ auth()->user()->email }}.
                    <br><br>
                    <hr>
                    <a href="{{ route('user.resendEmail') }}" class="btn btn-primary">Send confirmation link</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
