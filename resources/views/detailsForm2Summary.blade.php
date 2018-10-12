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
            <td>PhD Stream</td>
            <td>{{ $c->phd_stream }}</td>
       </tr>
         <tr><td>2.</td>
            <td>PhD Marks</td>
            <td>{{ $c->phd_marks  }}</td>
       </tr>
        <tr><td>3.</td>
            <td>PhD Passing Year</td>
            <td>{{ $c->phd_passing_year  }}</td>
       </tr>
        <tr><td>4.</td>
            <td>PhD University</td>
            <td>{{ $c->phd_university  }}</td>
       </tr>
        <tr><td>5.</td>
            <td>Post Graduate Stream</td>
            <td>{{ $c->pg_stream  }}</td>
       </tr>
        <tr><td>6.</td>
            <td>Post Graduate Marks</td>
            <td>{{ $c->pg_marks  }}</td>
       </tr>
       <tr>
         <td>7.</td>
         <td>Post Graduate University</td>
         <td>{{ $c->pg_university }}</td>
       </tr>
        <tr><td>8.</td>
            <td>Post Graduate Passing Year</td>
            <td>{{ $c->pg_passing_year  }}</td>
       </tr>
        <tr><td>9.</td>
            <td>Under Graduate Stream</td>
            <td>{{ $c->ug_stream  }}</td>
       </tr>
        <tr><td>10.</td>
            <td>Under Graduate Marks</td>
            <td>{{ $c->ug_marks  }}</td>
       </tr>
        <tr><td>11.</td>
            <td>Under Graduate Passing Year</td>
            <td>{{ $c->ug_passing_year  }}</td>
       </tr>
        <tr><td>12.</td>
            <td>Under Graduate University </td>
            <td>{{ $c->ug_university  }}</td>
       </tr>
        <tr><td>13.</td>
            <td>Inter Stream</td>
            <td>{{ $c->inter_stream  }}</td>
       </tr>
        
        <tr><td>14.</td>
            <td>Inter Passing Year</td>
            <td>{{ $c->inter_passing_year  }}</td>
       </tr>
       <tr>
         <td>15.</td>
         <td>Inter Marks</td>
         <td>{{ $c->inter_marks }}</td>
       </tr>
       <tr><td>16.</td>
            <td>Inter University</td>
            <td>{{ $c->inter_university  }}</td>
       </tr>
        <tr><td>17.</td>
            <td>High School Stream</td>
            <td>{{ $c->high_school_stream  }}</td>
       </tr>
        <tr><td>18.</td>
            <td>High School Marks </td>
            <td>{{ $c->high_school_marks  }}</td>
       </tr>
       <tr>
         <td>19.</td>
         <td>High School University</td>
         <td>{{ $c->high_school_university }}</td>
       </tr>
        <tr><td>20.</td>
            <td>High School Passing Year</td>
            <td>{{ $c->high_school_passing_year  }}</td>
       </tr>
        <tr><td>21.</td>
            <td>PhD Title</td>
            <td>{{ $c->phd_title  }}</td>
       </tr>
       <tr><td>22.</td>
            <td>PhD Field Specifications</td>
            <td>{{ $c->phd_field_spec  }}</td>
       </tr>          
  @endforeach   

  <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('pdfEducationDownload') }}" class="btn btn-primary"> 
                                    Download Summary
                                </a>
                            </div>

</table>