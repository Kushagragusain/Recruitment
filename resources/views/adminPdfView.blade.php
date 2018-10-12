<table class="table table-striped table-bordered table-hover" cellspacing="30">
  <thead>
  
    <tr>
        <th>S.No.</th>
        <th>Candidate Name</th>
        <th>Total Credit Points</th>
    </tr>
  </thead>
 

     @foreach ($data as $c) 
    
       <tr>
            <td> {{ $loop->iteration}} </td>
            <td> {{ $c->name }} </td>
            <td> {{ $c->total_Credit_Points  }} </td>
       </tr>
         
  @endforeach   

  <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('adminpdfdownload') }}" class="btn btn-primary"> 
                                    Download Summary
                                </a>
                            </div>

</table>