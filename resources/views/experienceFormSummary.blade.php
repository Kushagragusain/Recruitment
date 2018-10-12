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
            <td>Academic Position</td>
            <td>{{ $c->academic_position }}</td>
       </tr>
         <tr>
            <td>2.</td>
            <td>Academic Institution Name</td>
            <td>{{ $c->academic_institution_name  }}</td>
       </tr>
        <tr><td>3.</td>
            <td>Academic Experience(Years)</td>
            <td>{{ $c->academic_years_exp  }}</td>
       </tr>
        <tr><td>4.</td>
            <td>Academic Experience(Months)</td>
            <td>{{ $c->academic_months_exp  }}</td>
       </tr>
        <tr><td>5.</td>
            <td>Industrial Position</td>
            <td>{{ $c->industrial_position  }}</td>
       </tr>
        <tr><td>6.</td>
            <td>Industrial Institution Name</td>
            <td>{{ $c->industrial_institution_name  }}</td>
       </tr>
       <tr>
         <td>7.</td>
         <td>Industrial Experience(Months)</td>
         <td>{{ $c->industrial_months_exp }}</td>
       </tr>
        <tr><td>8.</td>
            <td>Industrial Experience(Years)</td>
            <td>{{ $c->industrial_years_exp  }}</td>
       </tr>
       
        <tr><td>9.</td>
            <td>Research Position</td>
            <td>{{ $c->research_position  }}</td>
       </tr>
        <tr><td>10.</td>
            <td>Research Institution Name </td>
            <td>{{ $c->research_institution_name  }}</td>
       </tr>
        <tr><td>11.</td>
            <td>Research Experience(Years) </td>
            <td>{{ $c->research_years_exp  }}</td>
       </tr>
        <tr><td>12.</td>
            <td>Research Experience(Months)</td>
            <td>{{ $c->research_months_exp  }}</td>
       </tr>
            
  @endforeach   

  <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('pdfExperienceDownload') }}" class="btn btn-primary"> 
                                    Download Summary
                                </a>
                            </div>

</table>