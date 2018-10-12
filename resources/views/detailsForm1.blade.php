@extends('layouts.app')

@section('content')
<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="DOB"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Fill Your Personal Details!</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('saveOne') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('candidate_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Candidate's Name</label>

                            <div class="col-md-6">
                                <input id="candidate_name" type="text" class="form-control" name="candidate_name" value="{{ old('candidate_name') }}" required autofocus>

                                @if ($errors->has('candidate_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('candidate_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group ">
                              <label class="col-md-4 control-label" for="DOB">
                               Date of Birth
                              </label>
                              <div class="col-sm-6">
                               <div class="input-group">
                                <div class="input-group-addon">
                                 <i class="fa fa-calendar">
                                 </i>
                                </div>
                                <input class="form-control" id="DOB" name="DOB" placeholder="YYYY/MM/DD" type="text"/>
                              
                             </div>
                                @if ($errors->has('DOB'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DOB') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                             
                                      <input id="gender" placeholder="Male or Female" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}">
                            <label for="father_name" class="col-md-4 control-label">Father's Name</label>

                            <div class="col-md-6">
                                <input id="father_name" type="text" class="form-control" name="father_name" value="{{ old('father_name') }}" required>

                                @if ($errors->has('father_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('post_applied') ? ' has-error' : '' }}">
                            <label for="post_applied" class="col-md-4 control-label">Post Applied</label>

                            <div class="col-md-6">
                                <input id="post_applied" type="text" class="form-control" name="post_applied" value="{{ old('post_applied') }}" required>

                                @if ($errors->has('post_applied'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_applied') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control" name="department" value="{{ old('department') }}" required>

                                @if ($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <input id="category" Placeholder="Gen or OBC or SC or ST" type="text" class="form-control" name="category" value="{{ old('category') }}" required>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                            <label for="marital_status"  class="col-md-4 control-label">Marital Status</label>
                            <div class="col-md-6">
                                  <input id="marital_status" placeholder="Married or Unmarried" type="text" class="form-control" name="marital_status" value="{{ old('marital_status') }}" required>
                                
                                @if ($errors->has('marital_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('marital_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('Permanent_address') ? ' has-error' : '' }}">
                            <label for="Permanent_address" class="col-md-4 control-label">Permanent Address</label>

                            <div class="col-md-6">
                                <input id="Permanent_address" type="textarea" class="form-control" name="Permanent_address" value="{{ old('Permanent_address') }}" required>

                                @if ($errors->has('Permanent_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Permanent_address') }}</strong>
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
