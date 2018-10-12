@extends('layouts.app')

@section('content')
<head>
    <style type="text/css">
        table {
    border-collapse: separate;
    border-spacing: 0 1em;
}
    </style>
</head>
<div class="container">
     {{ csrf_field() }}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><font color="green">Submission Successful</font></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Please Download your Registration Forms and Credit points Summary sheet, OR you can go back and edit the form by clicking here 
                     <a href="{{ route('newindex') }}" > 
                                    Edit Form
                                </a>       
                        <table class="col-md-offset-0" >
                       <tr>
                        <td>
                        <div >
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('pdfPersonalDownload') }}" class="btn btn-primary"> 
                                     Download Personal Details
                                </a>
                            </div>
                        </div>
                    </td>
                     <td>
                       <div>
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('pdfGet') }} " class="btn btn-primary">
                                    Download Summary
                                </a>
                            </div>
                        </div> 
                    </td>
                    <td>
                        <div>
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('pdfUpload') }} " class="btn btn-primary">
                                    Download Files
                                </a>
                            </div>
                        </div> 
                    </td>

                    </tr>

                    <tr>
                        <td>
                        <div>
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('pdfExperienceDownload') }}" class="btn btn-primary">        Download Experience Details
                                </a>
                            </div>
                        </div>
                    </td>
                    
                     <td>
                       <div >
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('pdfEducationDownload') }} " class="btn btn-primary">
                                    Download Eductaion Details
                                </a>
                            </div>
                        </div> 
                    </td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
