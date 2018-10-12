@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Fill Your Experience Details!</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('saveExperience') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('academic_position') ? ' has-error' : '' }}">
                            <label for="academic_position" class="col-md-4 control-label">Academic Designation</label>

                            <div class="col-md-6">
                                <input id="academic_position" type="text" class="form-control" name="academic_position" value="{{ old('academic_position') }}" required autofocus>

                                @if ($errors->has('academic_position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('academic_position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('academic_institution_name') ? ' has-error' : '' }}">
                            <label for="academic_institution_name" class="col-md-4 control-label"> Institution Name</label>

                            <div class="col-md-6">
                                <input id="academic_institution_name" type="text" class="form-control" name="academic_institution_name" value="{{ old('academic_institution_name') }}" required>

                                @if ($errors->has('academic_institution_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('academic_institution_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('academic_years_exp') ? ' has-error' : '' }}">
                            <label for="academic_years_exp" class="col-md-4 control-label">Academic Experience (in years)</label>

                            <div class="col-md-6">
                                <input id="academic_years_exp" type="text" class="form-control" name="academic_years_exp" value="{{ old('academic_years_exp') }}" required>

                                @if ($errors->has('academic_years_exp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('academic_years_exp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('academic_months_exp') ? ' has-error' : '' }}">
                            <label for="academic_months_exp" class="col-md-4 control-label">Academic Experience (in Months)</label>

                            <div class="col-md-6">
                                <input id="academic_months_exp" type="text" class="form-control" name="academic_months_exp" value="{{ old('academic_months_exp') }}" required>

                                @if ($errors->has('academic_months_exp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('academic_months_exp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('industrial_position') ? ' has-error' : '' }}">
                            <label for="industrial_position" class="col-md-4 control-label">Industrial Designation</label>

                            <div class="col-md-6">
                                <input id="industrial_position" type="text" class="form-control" name="industrial_position" value="{{ old('industrial_position') }}" required>

                                @if ($errors->has('industrial_position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('industrial_position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('industrial_institution_name') ? ' has-error' : '' }}">
                            <label for="industrial_institution_name" class="col-md-4 control-label">Institution Name</label>

                            <div class="col-md-6">
                                <input id="industrial_institution_name" type="textarea" class="form-control" name="industrial_institution_name" value="{{ old('industrial_institution_name') }}" required>

                                @if ($errors->has('industrial_institution_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('industrial_institution_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('industrial_years_exp') ? ' has-error' : '' }}">
                            <label for="industrial_years_exp" class="col-md-4 control-label">Industial Experience (in years)</label>

                            <div class="col-md-6">
                                <input id="industrial_years_exp" type="text" class="form-control" name="industrial_years_exp" value="{{ old('industrial_years_exp') }}" required>

                                @if ($errors->has('industrial_years_exp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('industrial_years_exp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('industrial_months_exp') ? ' has-error' : '' }}">
                            <label for="industrial_months_exp" class="col-md-4 control-label">Industial Experience (in months)</label>

                            <div class="col-md-6">
                                <input id="industrial_months_exp" type="text" class="form-control" name="industrial_months_exp" value="{{ old('industrial_months_exp') }}" required>

                                @if ($errors->has('industrial_months_exp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('industrial_months_exp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('research_position') ? ' has-error' : '' }}">
                            <label for="research_position" class="col-md-4 control-label">Research Position</label>

                            <div class="col-md-6">
                                <input id="research_position" type="text" class="form-control" name="research_position" value="{{ old('research_position') }}" required>

                                @if ($errors->has('research_position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('research_position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('research_institution_name') ? ' has-error' : '' }}">
                            <label for="research_institution_name" class="col-md-4 control-label">Research Institute Name</label>

                            <div class="col-md-6">
                                <input id="research_institution_name" type="textarea" class="form-control" name="research_institution_name" value="{{ old('research_institution_name') }}" required>

                                @if ($errors->has('research_institution_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('research_institution_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('research_years_exp') ? ' has-error' : '' }}">
                            <label for="research_years_exp" class="col-md-4 control-label">Research Experience (in years)</label>

                            <div class="col-md-6">
                                <input id="research_years_exp" type="textarea" class="form-control" name="research_years_exp" value="{{ old('research_years_exp') }}" required>

                                @if ($errors->has('research_years_exp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('research_years_exp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('research_months_exp') ? ' has-error' : '' }}">
                            <label for="research_months_exp" class="col-md-4 control-label">Research Experience (in momths)</label>

                            <div class="col-md-6">
                                <input id="research_months_exp" type="textarea" class="form-control" name="research_months_exp" value="{{ old('research_months_exp') }}" required>

                                @if ($errors->has('research_months_exp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('research_months_exp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save And Next
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
