@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My trials</div>

                <div class="panel-body">
                    @if($trials->count())
                        <ul class="list-group">
                            @foreach($trials as $trial)
                                <li class="list-group-item clearfix">
                                    <span class="pull-left">
                                        <b>{{ $trial->name }}</b> - {{ $trial->end_at->diffForHumans() }}
                                    </span>
                                    <span class="pull-right">
                                        <a href="{{ route('trial.delete', [$trial->id]) }}" class="text-danger">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </a>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        No entries at the moment.
                        <br><br>
                    @endif
                    <hr>
                    <a href="{{ route('trial.create') }}" class="btn btn-primary">Add a trial</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
