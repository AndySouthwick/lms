@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <p> Welcome {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</p>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection