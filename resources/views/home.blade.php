@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My trials</div>

                <div class="panel-body">
                    @if($trials->count())
                        <ul>
                            @foreach($trials as $trial)
                                <li>{{ $trial->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        No entries at the moment<br><br>
                        <hr>
                        <a href="{{ route('trial.create') }}" class="btn btn-primary">Add a trial</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
