@extends('layouts.app')

@section('content')
<div class="container">
     {{ csrf_field() }}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in as Admin!
                  
                       <table class="col-md-offset-2">

                       <tr>
                        <td>
                        <div >
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('adminPdfGet') }}" class="btn btn-primary"> 
                                    Download Summary
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                       <div >
                            <div class="col-md-6 col-md-offset-4" >
                                <a href="{{ route('admineditshow') }} " class="btn btn-primary">
                                    Edit Credit Points
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
