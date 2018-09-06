<?php

require('fpdf.php');

class PDF_reader extends FPDF
{
	
	function __construct ($orientation ='P', $unit = 'pt', $format = 'Letter', $margin = 40)
	{
		$this->FPDF($orientation, $unit, $format);
		$this->SetTopMargin($margin);
		$this->SetLeftMargin($margin);
		$this->SetRightMargin($margin);
		
		$this->SetAutoPageBreak(true, $margin);
	}

	function Header()
	{
		$this->SetFont('Arial','BU',20);
		$this->Cell(500,30,'Neef Online Application Form', 0, 1, 'C');
	}
	function Footer()
	{
		$this->SetFont('Arial','B',10 );
		$this->SetXY(40, -40); 
		$this->Cell(0,20,'Powered By CodeStudio', 0, 1, 'C');
	}

	function Tables()
	{
		$this->SetFont('Arial', 'B', 12);
  		$this->SetTextColor(0);
        $this->SetFillColor(34,140,129);
        $this->SetLineWidth(1);
        $this->Cell(150, 25, 'Level', 'LTRB', 0, 'C', true);
        $this->Cell(150, 25, 'From', 'LTRB', 0, 'C', true);
        $this->Cell(150, 25, 'To', 'LTRB', 1, 'C', true);

        $this->SetFont('Arial', '');
        $this->SetFillColor(238);
        $this->SetLineWidth(0.2);
        

	}

	function smTables()
	{
		$this->SetFont('Arial', 'B', 12);
  		$this->SetTextColor(0);
        $this->SetFillColor(34,140,129);
        $this->SetLineWidth(1);
        $this->Cell(150, 25, 'Subject Of Interest', 'LTRB', 1, 'C', true);
        

        $this->SetFont('Arial', '');
        $this->SetFillColor(238);
        $this->SetLineWidth(0.2);
	}
}

// $sdf = "Talha Javaid";
// $asd = "Male";

$fname = $_POST['cnic'];

$pdf = new PDF_reader();

$pdf->AddPage();

$pdf->ln();

$pdf->SetFont('Arial', 'BU', 20);
$pdf->Cell(500, 15, 'Personal Information', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 12);
$pdf->setY(100);
$pdf->Cell(200, 25, 'Name:');
$pdf->SetFont('Arial', '');

$f_Name = $_POST['firstName'];
$M_Name = $_POST['middleName'];
$L_Name = $_POST['lastName'];
$pdf->Cell(150, 25, $f_Name." ".$M_Name." ".$M_Name, 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(200, 25, 'Father/Husband Name:');
$pdf->SetFont('Arial', '');
$f_hfirstName = $_POST['f_hfirstName'];
$f_hmiddleName = $_POST['f_hmiddleName'];
$f_hlastName = $_POST['f_hlastName'];
$pdf->Cell(100, 25, $f_hfirstName." ".$f_hmiddleName." ".$f_hlastName, 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 25, 'Title:');
$pdf->SetFont('Arial', '');
$pdf->Cell(150, 25, $_POST['title'], 0, 0);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 25, 'Gender:	');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 25, $_POST['gender'], 0, 0);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 25, 'Date Of Birth:');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 25, $_POST['dob'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 25, 'CNIC:');
$pdf->SetFont('Arial', '');
$pdf->Cell(150, 25, $_POST['cnic'], 0, 0);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 25, 'Mobile:');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 25, $_POST['mobno'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 25, 'LandLine No:');
$pdf->SetFont('Arial', '');
$pdf->Cell(110, 25, $_POST['ptcl'], 0, 0);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 25, 'Emergency No:');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 25, $_POST['emrgncyNo'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 25, 'Email:');
$pdf->SetFont('Arial', '');
$pdf->Cell(150, 25, $_POST['email'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100	, 30, 'Street Address:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 30, $_POST['staddress'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 25, 'Province:');
$pdf->SetFont('Arial', '');
$pdf->Cell(150, 25, $_POST['province'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 25, 'Division:');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 25, $_POST['division'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 25, 'District:');
$pdf->SetFont('Arial', '');
$pdf->Cell(150, 25, $_POST['district'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 25, 'Tehsil:');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 25, $_POST['tehsil'], 0, 1);

$pdf->ln();

$pdf->SetFont('Arial', 'BU', 20);
$pdf->Cell(500, 30, 'Qualification Information', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'Qualification Level:');
$pdf->SetFont('Arial', '');
$pdf->Cell(90, 40, $_POST['degreelevel'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 20, 'Passing Year:');
$pdf->SetFont('Arial', '');
$pdf->Cell(90, 20, $_POST['passing'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'Specialization:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 40, $_POST['majors'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'Total Marks:');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['maxno'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'Obtained Marks:');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['marksObtain'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'Pakistan Universities:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 40, $_POST['pakistanUni'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'Abroad Universities:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 40, $_POST['university'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 20, 'Abroad Country:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 20, $_POST['country'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 20, 'Abroad City:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 20, $_POST['city'], 0, 1);




$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'Teaching Degree:');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['teachingdegree'], 0, 0);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'Other Degree:');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['otherdegree'], 0, 1);


$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 20, 'Awarding Body:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 20, $_POST['awardingbody'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 20, 'Year Of Passing:');
$pdf->SetFont('Arial', '');
$pdf->Cell(90, 20, $_POST['passingyear'], 0, 1);

$pdf->ln(50);




$pdf->SetFont('Arial', 'BU', 20);
$pdf->Cell(500, 30, 'Employment Information', 0, 1, 'C');

$pdf->ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 20, 'Designation:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 20, $_POST['designation'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 20, 'Description:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 20, $_POST['description'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 20, 'Company Name:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 20, $_POST['companyName'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 20, 'Company Address:');
$pdf->SetFont('Arial', '');
$pdf->MultiCell(0, 20, $_POST['jobaddress'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 20, 'Province:');
$pdf->SetFont('Arial', '');
$pdf->Cell(90, 20, $_POST['jobprovince'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'Division:');
$pdf->SetFont('Arial', '');
$pdf->Cell(90, 40, $_POST['jobdivision'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'District:');
$pdf->SetFont('Arial', '');
$pdf->Cell(90, 40, $_POST['jobdistrict'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(150, 40, 'Tehsil:');
$pdf->SetFont('Arial', '');
$pdf->Cell(90, 40, $_POST['jobtehsil'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(250, 40, 'Is job Directly related to Teaching ?');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['teachingjob'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(250, 40, 'Is job Directly related to Marking ?');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['markingjob'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(250, 40, 'Is job Directly related to Invigilating ?');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['invigilatingjob'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(250, 40, 'Is it Government Job ?');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['govjob'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(250, 40, 'Working Since ?');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['workingsince'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(250, 40, 'Do you have Basic Computer Knowledge ?');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['comp_know'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(250, 40, 'Do you have Internet Access at Home ?');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['net_access'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(250, 40, 'Do you have Computer at Home ?');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['home_comp'], 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(250, 40, 'Post Applied for ?');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 40, $_POST['jobTitle'], 0, 1);



    // Invigilating Experience

$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(250, 30, 'Invigilating Experience:', 0, 1, 'C');
$pdf->Tables();


    $invigExperience = $_POST['invig_tableData'];
    $invigExperienceArr = explode("\n", $invigExperience);
    for ($i=1; $i < sizeof($invigExperienceArr); $i++) {
      $iexpArr = explode("|", $invigExperienceArr[$i]);
      $iexpLevel = $iexpArr[0];
      $iexpFrom = $iexpArr[1];
      $iexpTo = $iexpArr[2];

        $pdf->Cell(150, 25, $iexpLevel, 'LTRB', 0, 'C', true);
        $pdf->Cell(150, 25, $iexpTo, 'LTRB', 0, 'C', true);
        $pdf->Cell(150, 25, $iexpFrom, 'LTRB', 1, 'C', true);


    }
$pdf->ln();

// Teaching Experiance
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(250, 30, 'Teaching Experience:', 0, 1, 'C');
$pdf->Tables();


    // Save Teaching Experience

		// $pdf->SetFont('Arial', 'B', 12);
  // 		$pdf->SetTextColor(0);
  //       $pdf->SetFillColor(34,140,129);
  //       $pdf->SetLineWidth(1);
  //       $pdf->Cell(200, 25, 'Level', 'LTR', 0, 'C', true);
  //       $pdf->Cell(200, 25, 'From', 'LTR', 0, 'C', true);
  //       $pdf->Cell(200, 25, 'To', 'LTR', 1, 'C', true);

  //       $pdf->SetFont('Arial', '');
  //       $pdf->SetFillColor(238);
  //       $pdf->SetLineWidth(0.2);
  //       $fill = false;
    $teachingExperience = $_POST['tableData'];
    // echo "$teachingExperience";
    $teachingExperienceArr = explode("\n", $teachingExperience);
    // echo "<br>".sizeof($teachingExperienceArr);
    for ($i=1; $i < sizeof($teachingExperienceArr); $i++) {
      $texpArr = explode("|", $teachingExperienceArr[$i]);
      // echo "<br>texp array: ".$teachingExperienceArr[$i];
      // echo "texp array 1: ".sizeof($texpArr);
      $texpLevel = $texpArr[0];
      $texpFrom = $texpArr[1];
      $texpTo = $texpArr[2];

      // Tables($texpLevel, $texpFrom, $texpTo);
        
        $pdf->Cell(150, 25, $texpLevel, 'LTRB', 0, 'C', true);
        $pdf->Cell(150, 25, $texpTo, 'LTRB', 0, 'C', true);
        $pdf->Cell(150, 25, $texpFrom, 'LTRB', 1, 'C', true);

    }
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(250, 30, 'Teaching Subject Of Interest:', 0, 1, 'C');
$pdf->smTables();

    $te_Subject = $_POST['tsi'];
    $te_SubjectArr = explode("\n", $te_Subject);
    for ($i=1; $i < sizeof($te_SubjectArr); $i++) {
      $texpSubject = $te_SubjectArr[1];

      $pdf->MultiCell(150, 25, $texpSubject, 'LTRB', 1, 'C', true);
    }

$pdf->ln();

// Marking Experiance
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(250, 30, 'Marking Experience:', 0, 1, 'C');
$pdf->Tables();


$markingExperience = $_POST['markingtableData'];
$markingExperienceArr = explode("\n", $markingExperience);
for ($i=1; $i < sizeof($markingExperienceArr); $i++) {
      $mexpArr = explode("|", $markingExperienceArr[$i]);
      $mexpLevel = $mexpArr[0];
      $mexpFrom = $mexpArr[1];
      $mexpTo = $mexpArr[2];

		$pdf->Cell(150, 25, $mexpLevel, 'LTRB', 0, 'C', true);
        $pdf->Cell(150, 25, $mexpTo, 'LTRB', 0, 'C', true);
        $pdf->Cell(150, 25, $mexpFrom, 'LTRB', 1, 'C', true);      

    }
$pdf->ln();

$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(250, 30, 'Marking Subject Of Interest:', 0, 1, 'C');
$pdf->smTables();

$marking_Subject = $_POST['msi'];
    $marking_SubjectArr = explode("\n", $marking_Subject);
    for ($i=1; $i < sizeof($marking_SubjectArr); $i++) {
      $mSub = $marking_SubjectArr[1];

      $pdf->MultiCell(150, 25, $mSub, 'LTRB', 1, 'C', true);

    }

$pdf->Output('../assets/uploads/Forms/'.$_POST['cnic'].'.pdf', 'F');

?>





