<table class="table table-striped table-bordered table-hover" >
  <thead>
    <style type="text/css">
        table {
    border-collapse: separate;
    border-spacing: 0 1em;
}
td
{
    padding:0 15px 0 15px;
    width: 30px;
}

    </style>
   <tr>
        <th>S.No.</th>
        <th>Form Feild</th>
        <th>Result</th>
    </tr>
  </thead>
 
       @foreach ($data as $c) 
         <tr>
            <td>1.</td>
            <td>Candidate's Name</td>
            <td>{{ $c->candidate_name  }}</td>
       </tr>
         <tr>
            <td>2.</td>
            <td>Date of Birth</td>
            <td>{{ $c->DOB  }}</td>
       </tr>
        <tr>
            <td>3.</td>
            <td>Gender</td>
            <td>{{ $c->gender  }}</td>
       </tr>
        <tr>
            <td>4.</td>
            <td>Father's Name</td>
            <td>{{ $c->father_name  }}</td>
       </tr>
        <tr>
            <td>5.</td>
            <td>Post Applied</td>
            <td>{{ $c->post_applied  }}</td>
       </tr>
        <tr>
            <td>6.</td>
            <td>Department</td>
            <td>{{ $c->department  }}</td>
       </tr>
        <tr>
            <td>7.</td>
            <td>Category</td>
            <td>{{ $c->category  }}</td>
       </tr>  
       <tr>
         <td>8.</td>
         <td>Marital Status</td>
         <td>{{ $c->marital_status}}</td>
       </tr>     
        <tr>
            <td>9.</td>
            <td>Permanent Address</td>
            <td>{{ $c->Permanent_address  }}</td>
       </tr>
             
  @endforeach   

  <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('pdfPersonalDownload') }}" class="btn btn-primary"> 
                                    Download Summary
                                </a>
                            </div>

</table>