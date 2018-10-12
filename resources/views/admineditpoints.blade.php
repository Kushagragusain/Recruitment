@extends('layouts.app')

@section('content')

       <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Credit Points</div>

                <div class="panel-body">

   <form class="form-horizontal" method="POST" action="{{ route('saveEditAdmin') }}">
                        {{ csrf_field() }}
             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Activity</th>
        <th>New Credit Points</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>Externally Sponsored R&D Projects (As Sole Investigator)</td>
        <td><input id="Ext_Spons_RD_PI_point" type="integer" class="form-control" name="Ext_Spons_RD_PI_point" value="{{ old('Ext_Spons_RD_PI_point') }}" required></td>
        <td> </td>
      </tr>
      <tr>
        <td><font color="orange"> 2. </font></td>
        <td><font color="orange">Externally Sponsored R&D Projects (As PI or CO-PI)</font></td>  
       <td><input id="Ext_Spons_RD_COPI_point" type="integer" class="form-control" name="Ext_Spons_RD_COPI_point" value="{{ old('Ext_Spons_RD_COPI_point') }}" required></td>

      </tr>
      <tr>
        <td>3.</td>
        <td>Patent's Granted (As Sole Investigator)</td>
       <td><input id="patent_granted_PI_point" type="integer" class="form-control" name="patent_granted_PI_point" value="{{ old('patent_granted_PI_point') }}" required></td>
        <td></td>
      </tr>

      <tr>
        <td><font color="brown">4.</font></td>
        <td><font color="brown">Patent Granted (As PI or CO-PI)</font></td>
       <td><input id="patent_granted_COPI_point" type="integer" class="form-control" name="patent_granted_COPI_point" value="{{ old('patent_granted_COPI_point') }}" required></td> 
      </tr>
      
      <tr>
        <td>5.</td>
        <td>Consultancy Projects [Max 10 Credit Points]</td>
       <td><input id="Consult_Proj_PI_point" type="integer" class="form-control" name="Consult_Proj_PI_point" value="{{ old('Consult_Proj_PI_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>6.</td>
        <td>Ph.D. Completed As Sole Supervisor</td>
       <td><input id="phd_sole_super_point" type="integer" class="form-control" name="phd_sole_super_point" value="{{ old('phd_sole_super_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>7.</td>
        <td>Ph.D. Completed As First Supervisor</td>
       <td><input id="phd_First_super_point" type="integer" class="form-control" name="phd_First_super_point" value="{{ old('phd_First_super_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td><font color="blue">8.</font></td>
        <td><font color="blue">Ph.D. Completed As Co-Supervisor</font></td>
       <td><input id="phd_co_super_point" type="integer" class="form-control" name="phd_co_super_point" value="{{ old('phd_co_super_point') }}" required></td>
      </tr>

      <tr>
        <td><font color="orange">9.</font></td>
        <td><font color="orange">Journal Papers in SCI/Scopus (Paid Journal not allowed) 
[since last promotion] (As First Author/Main Supervisor )</font></td>
       <td><input id="Jour_main_author_point" type="integer" class="form-control" name="Jour_main_author_point" value="{{ old('Jour_main_author_point') }}" required></td>
      </tr>
      
      <tr>
        <td><font color="brown">10.</font></td>
        <td><font color="brown">Journal Papers in SCI/Scopus (Paid Journal not allowed) 
[since last promotion] (As Co-Author)</font></td>
       <td><input id="Jour_co_author_point" type="integer" class="form-control" name="Jour_co_author_point" value="{{ old('Jour_co_author_point') }}" required></td>
      </tr>

      <tr>
        <td>11.</td>
        <td>Conference Papers indexed in SCI/any Internationally Renowned Conference [Max 10 Credit Points] (As First Author/ Main Supervisor)
        </td>
       <td><input id="Confer__main_author_point" type="integer" class="form-control" name="Confer__main_author_point" value="{{ old('Confer__main_author_point') }}" required></td>
      </tr>

      <tr>
        <td><font color="blue">12.</font></td>
        <td><font color="blue">Conference Papers indexed in SCI/any Internationally Renowned Conference [Max 10 Credit Points] (As Co-Author)</font></td>
       <td><input id="conference_co_author_point" type="integer" class="form-control" name="conference_co_author_point" value="{{ old('conference_co_author_point') }}" required></td>
      </tr>

      <tr>
        <td>13.</td>
        <td>Head Of Dept. (HOD) (No. of SEM)</td>
       <td><input id="HOD_point" type="integer" class="form-control" name="HOD_point" value="{{ old('HOD_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>14.</td>
        <td>DEAN (No. of SEM)</td>
       <td><input id="DEAN_point" type="integer" class="form-control" name="DEAN_point" value="{{ old('DEAN_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>15.</td>
        <td>Cheif Warden (No. of SEM)</td>
       <td><input id="Cheif_Warden_point" type="integer" class="form-control" name="Cheif_Warden_point" value="{{ old('Cheif_Warden_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>16.</td>
        <td>Prof In-Charge (T&P) (No. of SEM)</td>
       <td><input id="Prof_TnP_point" type="integer" class="form-control" name="Prof_TnP_point" value="{{ old('Prof_TnP_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>17.</td>
        <td>Advisor (Estate) (No. of SEM)</td>
       <td><input id="Advisor_estate_point" type="integer" class="form-control" name="Advisor_estate_point" value="{{ old('Advisor_estate_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>18.</td>
        <td>CVO (No. of SEM)</td>
       <td><input id="CVO_point" type="integer" class="form-control" name="CVO_point" value="{{ old('CVO_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>18.</td>
        <td>PI (Exam) (No. of SEM)</td>
       <td><input id="PI_exam_point" type="integer" class="form-control" name="PI_exam_point" value="{{ old('PI_exam_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>19.</td>
        <td> TEQIP (Coordinator) (No. of SEM)</td>
       <td><input id="TEQUIP_coordinator_point" type="integer" class="form-control" name="TEQUIP_coordinator_point" value="{{ old('TEQUIP_coordinator_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>18.</td>
        <td>Warden (No. of SEM)</td>
       <td><input id="Warden_point" type="integer" class="form-control" name="Warden_point" value="{{ old('Warden_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>19.</td>
        <td>Asst. Warden (No. of SEM)</td>
       <td><input id="AsstWarden_point" type="integer" class="form-control" name="AsstWarden_point" value="{{ old('AsstWarden_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>20.</td>
        <td>Associate Dean (No. of SEM)</td>
       <td><input id="Associate_Dean_point" type="integer" class="form-control" name="Associate_Dean_point" value="{{ old('Associate_Dean_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>21.</td>
        <td>Chairman/Convener Institute academic committee (No. of SEM)</td>
       <td><input id="Chair_academic_comm_point" type="integer" class="form-control" name="Chair_academic_comm_point" value="{{ old('Chair_academic_comm_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>22.</td>
        <td>Faculty In Charge Computer Center (No. of SEM)</td>
       <td><input id="Comp_Centre_incharge_point" type="integer" class="form-control" name="Comp_Centre_incharge_point" value="{{ old('Comp_Centre_incharge_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>23.</td>
        <td>Faculty In Charge IT service (No. of SEM)</td>
       <td><input id="IT_services_incharge_point" type="integer" class="form-control" name="IT_services_incharge_point" value="{{ old('IT_services_incharge_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>24.</td>
        <td>Library Incharge (No. of SEM)</td>
       <td><input id="Library_incharge_point" type="integer" class="form-control" name="Library_incharge_point" value="{{ old('Library_incharge_point') }}" required></td>
        <td> </td>
      </tr>

       <tr>
        <td>25.</td>
        <td>Admission Incharge (No. of SEM)</td>
       <td><input id="Admission_incharge_point" type="integer" class="form-control" name="Admission_incharge_point" value="{{ old('Admission_incharge_point') }}" required></td>
        <td> </td>
      </tr>

       <tr>
        <td>26.</td>
        <td>Student Activity Incharge (No. of SEM)</td>
       <td><input id="Stud_Act_incharge_point" type="integer" class="form-control" name="Stud_Act_incharge_point" value="{{ old('Stud_Act_incharge_point') }}" required></td>
        <td> </td>
      </tr>

       <tr>
        <td>27.</td>
        <td>Other Incharge (No. of SEM)</td>
       <td><input id="Other_incharge_point" type="integer" class="form-control" name="Other_incharge_point" value="{{ old('Other_incharge_point') }}" required></td>
        <td> </td>
      </tr>

       <tr>
        <td>28.</td>
        <td>Chairman and Convener of different standing committee and special committee (Max 3 Credit Points since last promotion) (No. of SEM)</td>
       <td><input id="Chair_Con_Standing_Comm_point" type="integer" class="form-control" name="Chair_Con_Standing_Comm_point" value="{{ old('Chair_Con_Standing_Comm_point') }}" required></td>
        <td> </td>
      </tr>

       <tr>
        <td>29.</td>
        <td>Departmental activities identified by HOD like lab in charges,department level committee for a min period of 1 year (Max 3 Credit Points since last promotion) (No. of SEM/year)</td>
       <td><input id="Dept_Activity_HOD_point" type="integer" class="form-control" name="Dept_Activity_HOD_point" value="{{ old('Dept_Activity_HOD_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>30.</td>
        <td>Workshop/FDP/Short term courses of min 05 working days duration offered as Coordinator or Convener (Max 8 Credit Points since last promotion)</td>
       <td><input id="Workshop_Coordinator_point" type="integer" class="form-control" name="Workshop_Coordinator_point" value="{{ old('Workshop_Coordinator_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>31.</td>
        <td>For conducting national programs like GIAN etc. as Course Coordinator  
[max 4 credit points (for 2 weeks duration program) since last promotion]</td>
       <td><input id="Nat_Prog_Two_Weeks_point" type="integer" class="form-control" name="Nat_Prog_Two_Weeks_point" value="{{ old('Nat_Prog_Two_Weeks_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>32.</td>
        <td>For conducting national programs like GIAN etc. as Course Coordinator  
[max 4 credit points (for 1 weeks duration program) since last promotion]</td>
       <td><input id="Nat_Prog_One_Weeks_point" type="integer" class="form-control" name="Nat_Prog_One_Weeks_point" value="{{ old('Nat_Prog_One_Weeks_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>33.</td>
        <td>National/International Conference organized as Chairman/Secretary  
(Max 6 Credit Points since last promotion)</td>
       <td><input id="Nat_Conf_Organized_point" type="integer" class="form-control" name="Nat_Conf_Organized_point" value="{{ old('Nat_Conf_Organized_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>34.</td>
        <td>Length of service over and above the relevant minimum teaching experience required for a given cadre 
(Max 10 Credit Points since last promotion) </td>
       <td><input id="Length_service_point" type="integer" class="form-control" name="Length_service_point" value="{{ old('Length_service_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>35.</td>
        <td>Establishment of New Lab(s) 
(4 Credit points since last promotion) </td>
       <td><input id="Est_Lab_point" type="integer" class="form-control" name="Est_Lab_point" value="{{ old('Est_Lab_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>36.</td>
        <td>Theory Teaching of over and above 6 credit hrs course 
(Max 6 Credit Points since last promotion) (CREDITS)</td>
       <td><input id="Theory_Teaching_point" type="integer" class="form-control" name="Theory_Teaching_point" value="{{ old('Theory_Teaching_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>37.</td>
        <td>Post Graduation Dissertation Guided 
(Max 10 Credit Points since last promotion)</td>
       <td><input id="PG_Dist_Guided_point" type="integer" class="form-control" name="PG_Dist_Guided_point" value="{{ old('PG_Dist_Guided_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>38.</td>
        <td>Under Graduate Projects 
(Max 4 Credit Points since last promotion)</td>
       <td><input id="UG_Projects_point" type="integer" class="form-control" name="UG_Projects_point" value="{{ old('UG_Projects_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>39.</td>
        <td>Text or Reference Books Published on relevant subjects from reputed international publishers 
(Max 18 Credit Points since last promotion)</td>
       <td><input id="Book_Pub_Inter_point" type="integer" class="form-control" name="Book_Pub_Inter_point" value="{{ old('Book_Pub_Inter_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>40.</td>
        <td>Text or Reference Book Published on relevant subjects from reputed national publishers or book chapters in the books published by reputed international publishers 
(Max 6 Credit Points since last promotion)</td>
       <td><input id="Book_Pub_Nat_point" type="integer" class="form-control" name="Book_Pub_Nat_point" value="{{ old('Book_Pub_Nat_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>41.</td>
        <td>Significant Outreach Institute out Activities 
(Max 4 Credit Points since last promotion) </td>
       <td><input id="Outreach_Inst_activity_point" type="integer" class="form-control" name="Outreach_Inst_activity_point" value="{{ old('Outreach_Inst_activity_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>42.</td>
        <td>Fellow IEEE, FNA, FNAE, FNASc   
[Max 10 Credit Points]</td>
       <td><input id="Fellow_IEEE_point" type="integer" class="form-control" name="Fellow_IEEE_point" value="{{ old('Fellow_IEEE_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>43.</td>
        <td>Placement % (Only for the placement cell officers or Faculty  incharge of Placement) 
(since last promotion)  
[Placement % above 85%, max 20 points since last promotion]</td>
       <td><input id="Plac_Per_Eight_point" type="integer" class="form-control" name="Plac_Per_Eight_point" value="{{ old('Plac_Per_Eight_point') }}" required></td>
        <td> </td>
      </tr>

      <tr>
        <td>44.</td>
        <td>Placement % (Only for the placement cell officers or Faculty  incharge of Placement) 
(since last promotion)  
[Placement % from 75%-84%%, max 10 points since last promotion]</td>
       <td><input id="Plac_per_Seventy_point" type="integer" class="form-control" name="Plac_per_Seventy_point" value="{{ old('Plac_per_Seventy_point') }}" required></td>
        <td> </td>
      </tr>
      
    </tbody>
  </table>
  <div class="form-group">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary">
                                           Edit
                                       </button>
                                  </div>
                             </div>
  </form>
</div></div></div></div></div>

                             



@endsection


