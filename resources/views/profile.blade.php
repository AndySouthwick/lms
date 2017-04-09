@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Profile</div>
                    <div class="row edit-profile-form">
                        <!-- left column -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="text-center">
                                <img src="http://tilextile.com/assets/profile_placeholder-3242dfe5bfcf57f3284beff4421e8b1e.png" class="avatar img-circle img-thumbnail" alt="avatar">
                                <h6>Upload a different photo...</h6>
                                <input type="file" class="text-center center-block well well-sm img-input">
                            </div>
                        </div>
                        <!-- edit form column -->
                        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                            <div class="alert alert-info alert-dismissable hide">
                                <p>Something is wrong...</p>
                                <a class="panel-close close" data-dismiss="alert">×</a>
                            </div>
                            <h3>Personal info</h3>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{Auth::user()->name}}" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{Auth::user()->email}}" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Confirm password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input class="btn btn-primary" value="Save Changes" type="button">
                                        <span></span>
                                        <input class="btn btn-default" value="Cancel" type="reset">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection