@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Resend Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('resendotp') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                            <label for="mobile_no" class="col-md-4 control-label">Enter Mobile No.</label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="integer" class="form-control" name="mobile_no" value="{{ old('mobile_no') }}" required>

                                @if ($errors->has('mobile_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset OTP
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
