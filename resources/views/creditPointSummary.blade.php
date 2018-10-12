<table class="table table-striped table-bordered table-hover" cellspacing="10">
  <thead>
  
    <tr>
        <th>S.No.</th>
        <th>Activity</th>
        <th>Credit Points</th>
    </tr>
  </thead>
 

     @foreach ($data as $c) 
    
       <tr>
            <td>1.</td>
            <td>Externally Sponsored R&D Projects (As Sole Investigator)</td>
            <td>{{ $c->credit_Ext_Spons_RD_PI  }}</td>
       </tr>
         <tr>
            <td>2.</td>
            <td>Externally Sponsored R&D Projects (As PI or CO-PI)</td>
            <td>{{ $c->credit_Ext_Spons_RD_COPI  }}</td>
       </tr>
        <tr>
            <td>3.</td>
            <td>Patent's Granted (As Sole Investigator)</td>
            <td>{{ $c->credit_patent_granted_PI  }}</td>
       </tr>
        <tr>
            <td>4.</td>
            <td>Patent Granted (As PI or CO-PI)</td>
            <td>{{ $c->credit_patent_granted_COPI  }}</td>
       </tr>
        <tr>
            <td>5.</td>
            <td>Consultancy Projects </td>
            <td>{{ $c->credit_Consult_Proj_PI  }}</td>
       </tr>
        <tr>
            <td>6.</td>
            <td>Ph.D. Completed As Sole Supervisor</td>
            <td>{{ $c->credit_phd_sole_super  }}</td>
       </tr>
        <tr>
            <td>7.</td>
            <td>Ph.D. Completed As First Supervisor</td>
            <td>{{ $c->credit_phd_First_super  }}</td>
       </tr>
        <tr>
            <td>8.</td>
            <td>Ph.D. Completed As Co-Supervisor</td>
            <td>{{ $c->credit_phd_co_super  }}</td>
       </tr>
        <tr>
            <td>9.</td>
            <td>Journal Papers in SCI/Scopus (As First Author/Main Supervisor ))</td>
            <td>{{ $c->credit_Jour_main_author  }}</td>
       </tr>
        <tr>
            <td>10.</td>
            <td>Journal Papers in SCI/Scopus (As Co-Author)</td>
            <td>{{ $c->credit_Jour_co_author  }}</td>
       </tr>
        <tr>
            <td>11.</td>
            <td>Conference Papers indexed in SCI(As First Author/Main Supervisor)</td>
            <td>{{ $c->credit_Confer__main_author  }}</td>
       </tr>
        <tr>
            <td>12.</td>
            <td>Conference Papers indexed in SCI(As Co-Author)</td>
            <td>{{ $c->credit_conference_co_author  }}</td>
       </tr>
        <tr>
            <td>13.</td>
            <td>Head Of Dept. (HOD) </td>
            <td>{{ $c->credit_HOD  }}</td>
       </tr>
        <tr>
            <td>14.</td>
            <td>DEAN</td>
            <td>{{ $c->credit_DEAN  }}</td>
       </tr>
        <tr>
            <td>15.</td>
            <td>Cheif Warden </td>
            <td>{{ $c->credit_Cheif_Warden  }}</td>
       </tr>
        <tr>
            <td>16.</td>
            <td>Prof In-Charge (T&P)</td>
            <td>{{ $c->credit_Prof_TnP  }}</td>
       </tr>
        <tr>
            <td>17.</td>
            <td>Advisor (Estate)</td>
            <td>{{ $c->credit_Advisor_estate  }}</td>
       </tr>
        <tr>
            <td>18.</td>
            <td>CVO</td>
            <td>{{ $c->credit_CVO  }}</td>
       </tr>
        <tr>
            <td>19.</td>
            <td>PI (Exam) </td>
            <td>{{ $c->credit_PI_exam  }}</td>
       </tr>
        <tr>
            <td>20.</td>
            <td>TEQIP (Coordinator)</td>
            <td>{{ $c->credit_TEQUIP_coordinator  }}</td>
       </tr>
        <tr>
            <td>21.</td>
            <td>Warden</td>
            <td>{{ $c->credit_Warden  }}</td>
       </tr>
        <tr>
            <td>22.</td>
            <td>Asst Warden</td>
            <td>{{ $c->credit_AsstWarden  }}</td>
       </tr>
        <tr>
            <td>23.</td>
            <td>Associate Dean</td>
            <td>{{ $c->credit_Associate_Dean  }}</td>
       </tr>
        <tr>
            <td>24.</td>
            <td>Chairman/Convener Institute academic committee</td>
            <td>{{ $c->credit_Chair_academic_comm  }}</td>
       </tr>
        <tr>
            <td>25.</td>
            <td>Faculty In Charge Computer Center</td>
            <td>{{ $c->credit_Comp_Centre_incharge  }}</td>
       </tr>
        <tr>
            <td>26.</td>
            <td>Faculty In Charge IT service</td>
            <td>{{ $c->credit_IT_services_incharge  }}</td>
       </tr>
        <tr>
            <td>27.</td>
            <td>Library Incharge </td>
            <td>{{ $c->credit_Library_incharge  }}</td>
       </tr>
        <tr>
            <td>28.</td>
            <td>Admission Incharge</td>
            <td>{{ $c->credit_Admission_incharge  }}</td>
       </tr>
        <tr>
            <td>29.</td>
            <td>Student Activity Incharge </td>
            <td>{{ $c->credit_Stud_Act_incharge  }}</td>
       </tr>
        <tr>
            <td>30.</td>
            <td>Other Incharge</td>
            <td>{{ $c->credit_Other_incharge  }}</td>
       </tr>
        <tr>
            <td>31.</td>
            <td>Chairman and Convener of different standing committee</td>
            <td>{{ $c->credit_Chair_Con_Standing_Comm  }}</td>
       </tr>
        <tr>
            <td>32.</td>
            <td>Departmental activities identified by HOD </td>
            <td>{{ $c->credit_Dept_Activity_HOD  }}</td>
       </tr>
        <tr>
            <td>33.</td>
            <td>orkshop/FDP/Short term courses of min 05 working days duration </td>
            <td>{{ $c->credit_Workshop_Coordinator  }}</td>
       </tr> 
        <tr>
            <td>34.</td>
            <td>For conducting national programs like GIAN etc.(2 Weeks)</td>
            <td>{{ $c->credit_Nat_Prog_Two_Weeks  }}</td>
       </tr> 
        <tr>
            <td>35.</td>
            <td>For conducting national programs like GIAN etc.(1 Week)</td>
            <td>{{ $c->credit_Nat_Prog_One_Weeks  }}</td>
       </tr> 
        <tr>
            <td>36.</td>
            <td>National/International Conference organized as Chairman/Secretary</td>
            <td>{{ $c->credit_Nat_Conf_Organized  }}</td>
       </tr> 
        <tr>
            <td>37.</td>
            <td>Length of service</td>
            <td>{{ $c->credit_Length_service  }}</td>
       </tr>
       <tr>
            <td>38.</td>
            <td>Establishment of New Lab(s) </td>
            <td>{{ $c->credit_Est_Lab  }}</td>
       </tr>
       <tr>
            <td>39.</td>
            <td>Theory Teaching of over and above 6 credit hrs course</td>
            <td>{{ $c->credit_Theory_Teaching  }}</td>
       </tr>
       <tr>
            <td>40.</td>
            <td>Post Graduation Dissertation Guided</td>
            <td>{{ $c->credit_PG_Dist_Guided  }}</td>
       </tr>
       <tr>

            <td>41.</td>
            <td>Under Graduate Projects Guided</td>
            <td>{{ $c->credit_UG_Projects  }}</td>
       </tr>
       <tr>
            <td>42.</td>
            <td>Books Published on relevant subjects from reputed international publishers</td>
            <td>{{ $c->credit_Book_Pub_Inter  }}</td>
       </tr>
       <tr>
            <td>43.</td>
            <td>Book Published on relevant subjects from reputed national publishers</td>
            <td>{{ $c->credit_Book_Pub_Nat  }}</td>
       </tr> 

        <tr>
            <td>44.</td>
            <td>ignificant Outreach Institute out Activities </td>
            <td>{{ $c->credit_Outreach_Inst_activity  }}</td>
       </tr> 
        <tr>
            <td>45.</td>
            <td>Fellow IEEE, FNA, FNAE, FNASc</td>
            <td>{{ $c->credit_Fellow_IEEE  }}</td>
       </tr> 
        <tr>
            <td>46.</td>
            <td>Placement % (Above 85%)</td>
            <td>{{ $c->credit_Plac_Per_Eight  }}</td>
       </tr> 
       <tr>
          <td>47.</td>
            <td>Placement % ( Between 75%-84% )</td>
            <td>{{ $c->credit_Plac_per_Seventy  }}</td>
       </tr>         
  @endforeach   

  <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('pdfdownload') }}" class="btn btn-primary"> 
                                    Download Summary
                                </a>
                            </div>

</table>