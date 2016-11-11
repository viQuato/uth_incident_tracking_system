<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>


    <title>UTH Incident Tracking System</title>

    <link href="css/dropdown.css" type="text/css" rel="stylesheet">

</head>
<body>
<script src="js/dropdown.js"></script>
<div class=\"container\">

    <div class=\"hero-unit\">

        <form action="labTechnicianModel.php" method="Post">
            <table class="tg" border="1" align="center" width="1200">
                <tr>
                    <th width="192" rowspan="3"><img src="1Zambia.jpg" width="150" height="150"/></th>
                    <th class="tg-yw4l" colspan="9" bgcolor="grey"><h3>THE UNIVERSITY TEACHING HOSPITAL LABORATORY</h3>
                        <p>&nbsp;</p></th>
                    <th width="195" rowspan="3"><img src="1Zambia.jpg" width="150" height="150"/></th>
                </tr>
                <tr>
                    <th class="tg-yw4l" colspan="9">
                        <h3>Non-Conforming Event (NCE) Report Form<h3>
                    </th>
                </tr>
                <tr>
                    <th class="tg-yw4l" colspan="8"><h3>Document ID:</h3></th>

                    <th width="390" class="tg-yw4l"><h3>NCE-FM-001-v3</h3></th>

                </tr>

            </table>

            <table border="1" cellspacing="0" cellpadding="5" align="center">
                <tr>
                    <td width="300" height="30" align="center"><h3><input type="radio" name="action" value="corrective">Corrective
                            Action
                            <br><input type="radio" name="action" value="preventive">Preventive Action</h3></td>
                    <td width="300" height="30" align="center" bgcolor="#D3D3D3"><h3>Reference No.</h3></td>
                    <td width="300" height="30"><h3 align="center"><?php $refID = 1;
                            echo "NCE" . $refID; ?></h3></td>
                </tr>
                </br>

            </table>
            </br>
            <table border="0" cellspacing=20" cellpadding="30" align="center">
                <tr>
                    <td>
                        <div class="dropdown">
                            <h4><input onclick="dropDown(1)" type="radio" name="category" class="dropbtn">Specimen
                                Management</h4>
                            <div id="specimen_management" class="dropdown-content">
                                <h5><input type="checkbox" name="category[]" value="Request form incompletely filled">Request
                                    form incompletely filled</h5>
                                <h5><input type="checkbox" name="category[]" value="Request form/sample not received">Request
                                    form/sample not received</h5>
                                <h5><input type="checkbox" name="category[]" value="Mismatched request form/sample">Mismatched
                                    request form/sample</h5>
                                <h5><input type="checkbox" name="category[]" value="Specimen Lost">Specimen Lost</h5>
                                <h5><input type="checkbox" name="category[]" value="Specimen Labeling">Specimen
                                    Labeling</h5>
                                <h5><input type="checkbox" name="category[]" value="Damaged Specimen">Damaged
                                    Specimen</h5>
                                <h5><input type="checkbox" name="category[]"
                                           value="Specimen Transport delayed">Specimen Transport delayed </h5>
                                <h5><input type="checkbox" name="category[]"
                                           value="Specimen packaged wrongly">Specimen packaged wrongly</h5>
                                <h5><input type="checkbox" name="category[]"
                                           value="Incorrect Processing">Incorrect Processing</h5>
                                <h5><input type="checkbox" name="category[]"
                                           value="Specimen delivered to wrong Unit">Specimen
                                    delivered to wrong Unit</h5>
                                <h5><input type="checkbox" name="category[]"><input
                                        type="text" placeholder="Other"
                                        id="specimenOther"></h5>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="dropdown">
                            <h4><input onclick="dropDown(2)" type="radio" name="category" class="dropbtn">Reporting</h4>
                            <div id="reporting" class="dropdown-content">
                                <h5><input type="checkbox" name="report[]" value="Incorrect report issued">Incorrect
                                    report issued</h5>
                                <h5><input type="checkbox" name="report[]" value="Incorrect results transcribed">Incorrect
                                    results transcribed
                                </h5>
                                <h5><input type="checkbox" name="report[]" value="Computer entry error">Computer
                                    entry error</h5>
                                <h5><input type="checkbox" name="report[]" value="Delay in reporting results">Delay
                                    in reporting results
                                </h5>
                                <h5><input type="checkbox" name="report[]"
                                           value="Delay in authorizing results">Delay in authorizing
                                    results</h5>
                                <h5><input type="checkbox" name="report[]"
                                           value="Critical report not released promptly">Critical report
                                    not released promptly
                                </h5>
                                <h5><input type="checkbox" name="report[]"
                                           value="Wrong report caught just before release">Wrong
                                    report caught just before release</h5>
                                <h5><input type="checkbox" name="report[]"><input type="text"
                                                                                  placeholder="Other"
                                                                                  name="reportingOther"
                                                                                  id="specimenOther">
                                </h5>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="dropdown">
                            <h4><input onclick="dropDown(3)" type="radio" name="category" class="dropbtn">QC/EQA</h4>
                            <div id="qc_eqa" class="dropdown-content">
                                <h5><input type="checkbox" name="QC/EQA[]" value="EQA result not sent/sent late">EQA
                                    result not sent/sent late</h5>
                                <h5><input type="checkbox" name="QC/EQA[]" value="EQA materials not delivered">EQA
                                    materials not delivered
                                </h5>
                                <h5><input type="checkbox" name="QC/EQA[]" value="EQA materials delivered late">EQA
                                    materials delivered late</h5>
                                <h5><input type="checkbox" name="QC/EQA[]" value="QC materials delivered late">QC
                                    materials delivered late
                                </h5>
                                <h5><input type="checkbox" name="QC/EQA[]"
                                           value="Test results verified without QC">Test results
                                    verified without QC</h5>
                                <h5><input type="checkbox" name="QC/EQA[]"><input type="text"
                                                                                  placeholder="Other"
                                                                                  name="qcOther"
                                                                                  id="specimenOther">
                                </h5>
                            </div>
                            </h4>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="dropdown">
                            <h4><input onclick="dropDown(4)" type="radio" name="category" class="dropbtn">Supplies</h4>
                            <div id="supplies" class="dropdown-content">
                                <h5><input type="checkbox" name="supplies[]" value="External problem">External problem</h5>
                                <h5><input type="checkbox" name="supplies[]" value="Improperly prepared reagent">Improperly
                                    prepared reagent</h5>
                                <h5><input type="checkbox" name="supplies[]" value="Reagent Expiry">Reagent Expiry
                                </h5>
                                <h5><input type="checkbox" name="supplies[]" value="Recalled lot">Recalled lot
                                </h5>
                                <h5><input type="checkbox" name="supplies[]"
                                           value="Change in lot number overlooked">Change in lot number
                                    overlooked
                                </h5>
                                <h5><input type="checkbox" name="supplies[]"><input type="text"
                                                                                    placeholder="Other"
                                                                                    name="suppliesOther"
                                                                                    id="specimenOther">
                                </h5>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="dropdown">
                            <h4><input onclick="dropDown(5)" type="radio" name="category" class="dropbtn">Complaints</h4>
                            <div id="complaints" class="dropdown-content">
                                <h5><input type="checkbox" name="complaints[]" value=" Complaint by clinician">
                                    Complaint by
                                    clinician
                                </h5>
                                <h5><input type="checkbox" name="complaints[]" value=" Complaint by patient"> Complaint
                                    by patient</h5>
                                <h5><input type="checkbox" name="complaints[]" value=" Complaint by staff member">
                                    Complaint by staff member
                                </h5>
                                <h5><input type="checkbox" name="complaints[]"
                                           value=" Complaint by patients relative"> Complaint by patient’s
                                    relative </h5>
                                <h5><input type="checkbox" name="complaints[]"><input type="text"
                                                                                      placeholder="Other"
                                                                                      name="qcOther"
                                                                                      id="complaintOther"></h5>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="dropdown">
                            <h4><input onclick="dropDown(6)" type="radio" name="category" class="dropbtn">Computer</h4>
                            <div id="computer" class="dropdown-content">
                                <h5><input type="checkbox" name="computer[]" value="LIS-related ">LIS-related <br>
                                    (Please fill
                                    in LIS Issues Form LIS-FM-001)
                                </h5>
                                <h5><input type="checkbox" name="computer[]" value="Software failure">Software failure
                                </h5>
                                <h5><input type="checkbox" name="computer[]" value="Hardware failure">Hardware failure
                                </h5>
                                <h5><input type="checkbox" name="computer[]"><input type="text"
                                                                                    placeholder="Other"
                                                                                    name="computerOther"
                                                                                    id="specimenOther"></h5>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4><input onclick="dropDown(7)" type="radio" name="category" class="dropbtn">Equipment</h4>
                        <div id="equipment" class="dropdown-content">
                            <h5><input type="checkbox" name="equipment[]" value="Computer hardware problem">Computer
                                hardware problem</h5>
                            <h5><input type="checkbox" name="equipment[]" value="Computer software problem">Computer
                                software problem
                            </h5>
                            <h5><input type="checkbox" name="equipment[]" value="Wrong calibration values">Wrong
                                calibration values</h5>
                            <h5><input type="checkbox" name="equipment[]" value="Wrong calibrator used">Wrong
                                calibrator used
                            </h5>
                            <h5><input type="checkbox" name="equipment[]"><input type="text"
                                                                                 placeholder="Other"
                                                                                 name="equipOther"
                                                                                 id="specimenOther">
                            </h5>
                        </div>
                    </td>
                    <td>
                        <h4><input onclick="dropDown(8)" type="radio" name="category" class="dropbtn">Safety</h4>
                        <div id="safety" class="dropdown-content">
                            <h5><input type="checkbox" name="safety[]" value="Biological/Chemical Spill">Biological/Chemical
                                Spill
                            </h5>
                            <h5><input type="checkbox" name="safety[]" value="Fire">Fire</h5>
                            <h5><input type="checkbox" name="safety[]" value="Waste Management">Waste Management
                            </h5>
                            <h5><input type="checkbox" name="safety[]" value="Incident/accident">Incident/accident
                            </h5>
                            <h5><input type="checkbox" name="safety[]"><input type="text"
                                                                              placeholder="Other"
                                                                              name="qcOther" id="safeOther">
                            </h5>
                        </div>
                    </td>
                    <td>
                        <h4><input onclick="dropDown(9)" type="radio" name="category" class="dropbtn">Others</h4>
                        <div id="others" class="dropdown-content">
                            <h5><input type="checkbox" name="others[]" value="Power interruption">Power interruption
                            </h5>
                            <h5><input type="checkbox" name="others[]" value="Water Interruption">Water Interruption
                            </h5>
                            <h5><input type="checkbox" name="others[]" value="Temperature out of range">Temperature
                                out of range
                            </h5>
                            <h5><input type="checkbox" name="others[]"><input type="text"
                                                                              placeholder="Other"
                                                                              name="qcOther"
                                                                              id="specimenOther"></h5>
                        </div>
                    </td>
                </tr>
            </table>

            <br>
            <table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
                <tr>
                    <th colspan="11" align="left" bgcolor="#D3D3D3"><h3>INFORMATION</h3></th>
                </tr>
                <tr>
                    <td colspan="6"><h3>Date of Incident : <input type="Date" name="dateOfIncident"
                                                                  id="dateOfIncidenct">
                        </h3></td>
                    <td colspan="5"><h3>Time of Incident : <input type="Time" name="incidentTime" id="incidentTime">
                        </h3></td>
                </tr>
                <tr>
                    <td colspan="6">
                        <h3>Laboratory Unit : <select name="labUnit" id="labUnit">
                                <option value="Bacteriology">Bacteriology</option>
                                <option value="Central Specimen Reception">Central Specimen Reception</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Cytology">Cytology</option>
                                <option value="Haemotology">Haematology</option>
                                <option value="Histology">Histology</option>
                                <option value="Mortuary">Mortuary</option>
                                <option value="Pediatrics">Pediatrics</option>
                                <option value="Parasitology">Parasitology</option>
                                <option value="Premier">Premier</option>
                                <option value="Sexually transmitted infections (STI)">Sexually transmitted infections
                                    (STI)
                                </option>
                                <option value="Tuberculosis (TB)">Tuberculosis (TB)</option>
                                <option value="virology">Virology</option>
                                <option value="General">General</option>
                            </select>
                        </h3>
                    </td>
                    <td colspan="5"><h3>Site of Incident : <input type="text" name="indentSite" id="indentSite"></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="7"><h3>Name(of equipment/supply/patient):<input type="text" name="nameOfPatient"
                                                                                 id="nameOfPatient">
                        </h3></td>
                    <td colspan="4"><h3>Lot#/ID #:<input type="text" name="lotId">
                        </h3></td>
                </tr>
                <tr>
                    <td colspan="11"><h3>Specimen :
                            <input type="radio" checked="0/1" name="Specimen" value="Blood">Blood
                            <input type="radio" name="Specimen" value="Urine">Urine
                            <input type="radio" name="Specimen" value="Stool">Stool
                            <input type="radio" name="Specimen" value="Sputum">Sputum
                            <input type="radio" name="Specimen" value="CSF">CSF
                            <input type="radio" name="Specimen" value="Swab">Swab
                            <input type="radio" name="Specimen" value="Bone Marrow">Bone Marrow
                            <input type="radio" name="Specimen" value="infoSpecimenOther">
                            <input type="text" name="infoSpecimen" placeholder="Other(Specify)" id="infoSpecimen">
                        </h3></td>
                </tr>
                <tr>
                    <td colspan="11"><h3>NCE Identified by (tick):
                            <input type="radio" checked="0/1" name="idButton" id="labstaff" value="Lab Staff">Lab staff
                            <input type="radio" name="idButton" id="clinicalstaff" value="Clinical Staff">Clinical staff
                            <input type="radio" name="idButton" id="patient" value="Patient">Patient
                            <input type="radio" name="idButton" id="identOthers" value="identOthers"><input
                                placeholder="Others Specify" type="text" name="idetifiedBy" id="idetifiedBy">
                        </h3></td>
                </tr>
                <tr>
                    <td colspan="5" width="500"><h3>Clinical area notified? <input type="text" name="clinicalAreaIde"
                                                                                   id="clinicalAreaIde">
                        </h3></td>
                    <td colspan="4" width="400"><h3>Person notified: <input type="text" name="personNotified"></h3></td>
                    <td colspan="2" width="300"><h3>Date: <input type="Date" name="dateNotified" id="dateNotified">
                        </h3></td>
                </tr>
                <tr>
                    <td colspan="5" width="500"><h3>Incident reported to/Responsible person:<input type="text"
                                                                                                   name="reportedTo"
                                                                                                   id="reportedTo">
                        </h3></td>
                    <td colspan="4" width="400"><h3>Name: <input type="text" name="reporter" id="reporter">
                        </h3></td>
                    <td colspan="2" width="300"><h3>Date: <input type="Date" name="dateReported" id="dateReported">
                        </h3></td>
                </tr>
                <tr>
                    <td colspan="5" width="500"><h3>Report Initiated by: <input type="text" name="reportInitiater"
                                                                                id="reportInitiater">
                        </h3></td>
                    <td colspan="4" width="400"><h3>Designation: <input type="text" name="disignation">
                        </h3></td>
                    <td colspan="2" width="300"><h3>Sign: <input type="text" name="signature" id="signature">
                        </h3></td>
                </tr>
            </table>
            <br>
            <table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
                <tr>
                    <th colspan="9" bgcolor="#D3D3D3" align="left"><h3>DESCRIPTION OF NCE and IMMEDIATE ACTION
                            taken</h3></th>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td colspan="9"><label for="description"></label>
                        <h3>
                            <textarea name="description" rows="4" cols="100" id="description"></textarea>
                        </h3></td>
                </tr>
            </table>
            <br>

            <table class="tg" align="center" height="50" width="100">
                <tr>

                    <th width="100" class="tg-yw4l"><label for="documentId"></label>

                        <h3><input type="submit" name="submit" id="submit" value="Submit"></h3>
                </tr>
            </table>
        </form>

    </div>
</div>
</body>
</html>