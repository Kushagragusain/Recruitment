@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Please upload required files here!!</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('saveUpload') }}">
                        {{ csrf_field() }}

                         <div class="form-group{{ $errors->has('candidate_image') ? ' has-error' : '' }}">
                            <label for="candidate_image" class="col-md-4 control-label">Upload Image</label>

                            <div class="col-md-6">
                                <input id="candidate_image" type="file" class="form-control" name="candidate_image" value="{{ old('candidate_image') }}" required autofocus>
                                <p><font color="orange">Upload image in Jpeg or Jpg format</font></p>
                                @if ($errors->has('candidate_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('candidate_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('candidate_sign') ? ' has-error' : '' }}">
                            <label for="candidate_sign" class="col-md-4 control-label">Upload Signature</label>

                            <div class="col-md-6">
                                <input id="candidate_sign" type="file" class="form-control" name="candidate_sign" value="{{ old('candidate_sign') }}" required autofocus>
                                <p><font color="orange">Upload image in Jpeg or Jpg format</font></p>

                                @if ($errors->has('candidate_sign'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('candidate_sign') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Next
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
