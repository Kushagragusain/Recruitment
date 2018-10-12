<table class="table table-striped table-bordered table-hover" cellspacing="10">
  <thead>
  <style type="text/css">
        table {
    border-collapse: separate;
    border-spacing: 0 1em;
}
td
{
    padding:0 15px 0 15px;
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
            <td>Candidate's Image</td>
            <td><img height="150px"src="{{asset('http://localhost:8888/Rec4/storage/app/').$c->candidate_image}}"></td>
       </tr>
         <tr>
            <td>2.</td>
            <td>Candidate's Signature</td>
            <td><img height="100px" src="{{asset('http://localhost:8888/Rec4/storage/app/').$c->candidate_sign }}" ></td>
       </tr>
       <tr>
            
  @endforeach   

  <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('pdfUpload') }}" class="btn btn-primary"> 
                                    Download Summary
                                </a>
                            </div>

</table>