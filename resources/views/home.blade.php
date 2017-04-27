@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default inverse " align="left">
                <div class="panel-heading inverse"> <span class="white">Dashboard</span></div>

        

        <p> TechIT members enjoy access to the following features and benefits:</p>
    <p> Access to entire 5,000+ course library</p>
    <p> Learning paths</p>
    <p> Skill measurement</p>
    <p> Exercise files</p>
    <p> course learning checks</p>
    <p> Completion certificates</p>
    <p> Mobile apps</p>
    <p> Offline viewing</p>
               
                <checkout-form :plans="{{ $plans }}"></checkout-form>
            
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://checkout.stripe.com/checkout.js"></script>

@endsection
