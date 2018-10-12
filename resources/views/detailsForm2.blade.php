@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Fill Your Educational Details!</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('saveTwo') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('phd_stream') ? ' has-error' : '' }}">
                            <label for="phd_stream" class="col-md-4 control-label">Phd Stream</label>

                            <div class="col-md-6">
                                <input id="phd_stream" type="text" class="form-control" name="phd_stream" value="{{ old('phd_stream') }}" required autofocus>

                                @if ($errors->has('phd_stream'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phd_stream') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phd_marks') ? ' has-error' : '' }}">
                            <label for="phd_marks" class="col-md-4 control-label" >Phd Marks</label>

                            <div class="col-md-6">
                                <input id="phd_marks" type="text" placeholder="Marks in % or CGPA" class="form-control" name="phd_marks" value="{{ old('phd_marks') }}" required>

                                @if ($errors->has('phd_marks'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phd_marks') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phd_passing_year') ? ' has-error' : '' }}">
                            <label for="phd_passing_year" class="col-md-4 control-label">Phd Passing Year</label>

                            <div class="col-md-6">
                                <input id="phd_passing_year" type="text" class="form-control" name="phd_passing_year" value="{{ old('phd_passing_year') }}" required>

                                @if ($errors->has('phd_passing_year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phd_passing_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phd_university') ? ' has-error' : '' }}">
                            <label for="phd_university" class="col-md-4 control-label">Phd University</label>

                            <div class="col-md-6">
                                <input id="phd_university" type="text" class="form-control" name="phd_university" value="{{ old('phd_university') }}" required>

                                @if ($errors->has('phd_university'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phd_university') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pg_stream') ? ' has-error' : '' }}">
                            <label for="pg_stream" class="col-md-4 control-label">Post Grad Stream</label>

                            <div class="col-md-6">
                                <input id="pg_stream" type="text" class="form-control" name="pg_stream" value="{{ old('pg_stream') }}" required>

                                @if ($errors->has('pg_stream'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pg_stream') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('pg_marks') ? ' has-error' : '' }}">
                            <label for="pg_marks" class="col-md-4 control-label">Post Grad Marks</label>

                            <div class="col-md-6">
                                <input id="pg_marks" type="textarea" placeholder="Marks in % or CGPA" class="form-control" name="pg_marks" value="{{ old('pg_marks') }}" required>

                                @if ($errors->has('pg_marks'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pg_marks') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pg_passing_year') ? ' has-error' : '' }}">
                            <label for="pg_passing_year" class="col-md-4 control-label">PG Passing Year</label>

                            <div class="col-md-6">
                                <input id="pg_passing_year" type="text" class="form-control" name="pg_passing_year" value="{{ old('pg_passing_year') }}" required>

                                @if ($errors->has('pg_passing_year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pg_passing_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pg_university') ? ' has-error' : '' }}">
                            <label for="pg_university" class="col-md-4 control-label">PG University</label>

                            <div class="col-md-6">
                                <input id="pg_university" type="text" class="form-control" name="pg_university" value="{{ old('pg_university') }}" required>

                                @if ($errors->has('pg_university'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pg_university') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ug_stream') ? ' has-error' : '' }}">
                            <label for="ug_stream" class="col-md-4 control-label">Under Grad Stream</label>

                            <div class="col-md-6">
                                <input id="ug_stream" type="text" class="form-control" name="ug_stream" value="{{ old('ug_stream') }}" required>

                                @if ($errors->has('ug_stream'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ug_stream') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ug_marks') ? ' has-error' : '' }}">
                            <label for="ug_marks" class="col-md-4 control-label">Under Grad Marks</label>

                            <div class="col-md-6">
                                <input id="ug_marks" type="text" placeholder="Marks in % or CGPA" class="form-control" name="ug_marks" value="{{ old('ug_marks') }}" required>

                                @if ($errors->has('ug_marks'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ug_marks') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ug_passing_year') ? ' has-error' : '' }}">
                            <label for="ug_passing_year" class="col-md-4 control-label">UG Passing Year</label>

                            <div class="col-md-6">
                                <input id="ug_passing_year" type="text" class="form-control" name="ug_passing_year" value="{{ old('ug_passing_year') }}" required>

                                @if ($errors->has('ug_passing_year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ug_passing_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ug_university') ? ' has-error' : '' }}">
                            <label for="ug_university" class="col-md-4 control-label">UG University</label>

                            <div class="col-md-6">
                                <input id="ug_university" type="text" class="form-control" name="ug_university" value="{{ old('ug_university') }}" required>

                                @if ($errors->has('ug_university'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ug_university') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('inter_stream') ? ' has-error' : '' }}">
                            <label for="inter_stream" class="col-md-4 control-label">Inter Stream</label>

                            <div class="col-md-6">
                                <input id="inter_stream" type="text" class="form-control" name="inter_stream" value="{{ old('inter_stream') }}" required autofocus>

                                @if ($errors->has('inter_stream'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inter_stream') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('inter_marks') ? ' has-error' : '' }}">
                            <label for="inter_marks" class="col-md-4 control-label">Inter Marks</label>

                            <div class="col-md-6">
                                <input id="inter_marks" type="text" placeholder="Marks in % or CGPA" class="form-control" name="inter_marks" value="{{ old('inter_marks') }}" required>

                                @if ($errors->has('inter_marks'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inter_marks') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('inter_passing_year') ? ' has-error' : '' }}">
                            <label for="inter_passing_year" class="col-md-4 control-label">Inter Passing Year</label>

                            <div class="col-md-6">
                                <input id="inter_passing_year" type="text" class="form-control" name="inter_passing_year" value="{{ old('inter_passing_year') }}" required>

                                @if ($errors->has('inter_passing_year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inter_passing_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('inter_university') ? ' has-error' : '' }}">
                            <label for="inter_university" class="col-md-4 control-label">Inter University</label>

                            <div class="col-md-6">
                                <input id="inter_university" type="text" class="form-control" name="inter_university" value="{{ old('inter_university') }}" required>

                                @if ($errors->has('inter_university'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inter_university') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('high_school_stream') ? ' has-error' : '' }}">
                            <label for="high_school_stream" class="col-md-4 control-label">High School Stream</label>

                            <div class="col-md-6">
                                <input id="high_school_stream" type="text" class="form-control" name="high_school_stream" value="{{ old('high_school_stream') }}" required>

                                @if ($errors->has('high_school_stream'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('high_school_stream') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('high_school_marks') ? ' has-error' : '' }}">
                            <label for="high_school_marks" class="col-md-4 control-label">High School Marks</label>

                            <div class="col-md-6">
                                <input id="high_school_marks" placeholder="Marks in % or CGPA" type="textarea" class="form-control" name="high_school_marks" value="{{ old('high_school_marks') }}" required>

                                @if ($errors->has('high_school_marks'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('high_school_marks') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('high_school_passing_year') ? ' has-error' : '' }}">
                            <label for="high_school_passing_year" class="col-md-4 control-label">High School Passing Year</label>

                            <div class="col-md-6">
                                <input id="high_school_passing_year" type="text" class="form-control" name="high_school_passing_year" value="{{ old('high_school_passing_year') }}" required>

                                @if ($errors->has('high_school_passing_year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('high_school_passing_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('high_school_university') ? ' has-error' : '' }}">
                            <label for="high_school_university" class="col-md-4 control-label">High School University</label>

                            <div class="col-md-6">
                                <input id="high_school_university" type="text" class="form-control" name="high_school_university" value="{{ old('high_school_university') }}" required>

                                @if ($errors->has('high_school_university'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('high_school_university') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phd_title') ? ' has-error' : '' }}">
                            <label for="phd_title" class="col-md-4 control-label">Phd Title</label>

                            <div class="col-md-6">
                                <input id="phd_title" type="text" class="form-control" name="phd_title" value="{{ old('phd_title') }}" required>

                                @if ($errors->has('phd_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phd_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phd_field_spec') ? ' has-error' : '' }}">
                            <label for="phd_field_spec" class="col-md-4 control-label">Phd Field Specification</label>

                            <div class="col-md-6">
                                <input id="phd_field_spec" type="textarea" class="form-control" name="phd_field_spec" value="{{ old('phd_field_spec') }}" required>

                                @if ($errors->has('phd_field_spec'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phd_field_spec') }}</strong>
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
