<?php
include 'creds.php';
include 'test.php';
// $conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$f_Name = $_POST['firstName'];
$M_Name = $_POST['middleName'];
$L_Name = $_POST['lastName'];
$Title = $_POST['title'];
$Gender = $_POST['gender'];
$f_hfirstName = $_POST['f_hfirstName'];
$f_hmiddleName = $_POST['f_hmiddleName'];
$f_hlastName = $_POST['f_hlastName'];
$CNIC = $_POST['cnic'];
$DOB = $_POST['dob'];
// $picture = $_POST['picUploader'];
$Email = $_POST['email'];
$Mobile = $_POST['mobno'];
$PTCL = $_POST['ptcl'];
$EmrgncyNo = $_POST['emrgncyNo'];
$Provice = $_POST['province'];
$Division = $_POST['division'];
$District = $_POST['district'];
$Tehsil = $_POST['tehsil'];
$streetad = $_POST['staddress'];
$deglevel = $_POST['degreelevel'];
$Majors = $_POST['majors'];
$Passing = $_POST['passing'];
$std_uni = $_POST['radios'];  

$pak_uni = $_POST['pakistanUni'];
$Country = $_POST['country'];
$City = $_POST['city'];
$abroad_uni = $_POST['university'];
$MaxNo = $_POST['maxno'];
$Obtain_no = $_POST['marksObtain'];
// $degUpload = $_POST['degreeUploader'];
$isProfQual = $_POST['proff_q'];
$teachingdeg = $_POST['teachingdegree'];
$otherdeg = $_POST['otherdegree'];
$passing_yr = $_POST['passingyear'];
$awarding_bdy = $_POST['awardingbody'];
$employment1 = $_POST['employmentradios'];

$Designation = $_POST['designation'];
$Description = $_POST['description'];
$CompanyName = $_POST['companyName'];
$CompanyAddress = $_POST['jobaddress'];
$JobProvince = $_POST['jobprovince'];
$JobDivision = $_POST['jobdivision'];
$JobDistrict = $_POST['jobdistrict'];
$JobTehsil = $_POST['jobtehsil'];

$TeachingJob = $_POST['teachingjob'];
$MarkingJob = $_POST['markingjob'];
$InvigilatingJob = $_POST['invigilatingjob'];
$GovJob = $_POST['govjob'];
$WorkingSince = $_POST['workingsince'];

$InvigExperienceLevel = $_POST['invig_level'];
$CompKnowledge = $_POST['comp_know'];
$NetAccess = $_POST['net_access'];
$home_comp = $_POST['home_comp'];
$jobTitle = $_POST['jobTitle'];

$picUploader="";
$degreeUploader="";

if(isset($_FILES["picUploader"])){
  $picUploader = $_FILES["picUploader"]["name"];
  $picUploader_tmp = $_FILES["picUploader"]["tmp_name"];
  $picUploader_size = $_FILES["picUploader"]["size"];

  uploadImages("../assets/uploads/Pictures/", $picUploader, $picUploader_tmp, $picUploader_size, $CNIC.".jpg");
}

if(isset($_FILES["degreeUploader"])){
  $degreeUploader = $_FILES["degreeUploader"]["name"];
  $degreeUploader_tmp = $_FILES["degreeUploader"]["tmp_name"];
  $degreeUploader_size = $_FILES["degreeUploader"]["size"];

  uploadImages("../assets/uploads/AcademicDocuments/", $degreeUploader, $degreeUploader_tmp, $degreeUploader_size, $CNIC.".jpg");
}

function uploadImages($target_dir, $file, $file_tmp, $file_size, $newFileName)
{
  $target_file = $target_dir . basename($file);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($file_tmp);
    if($check !== false) {
          // echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  // Check if file already exists
  // if (file_exists($target_file)) {
  //     echo "Sorry, file already exists.";
  //     $uploadOk = 0;
  // }
  // Check file size
  if ($file_size > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
  // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($file_tmp, $target_dir . $newFileName)) {
          // echo "The file ". basename( $file). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

// echo "<br> f_Name: " . $f_Name;
// echo "<br> M_Name: " . $M_Name;
// echo "<br> L_Name: " . $L_Name;
// echo "<br> Title: " . $Title;
// echo "<br> Gender: " . $Gender;
// echo "<br> f_hfirstName: " . $f_hfirstName;
// echo "<br> f_hmiddleName: " . $f_hmiddleName;
// echo "<br> f_hlastName: " . $f_hlastName;
// echo "<br> CNIC: " . $CNIC;
// echo "<br> DOB: " . $DOB;
// echo "<br> Email: " . $Email;
// echo "<br> Mobile: " . $Mobile;
// echo "<br> PTCL: " . $PTCL;
// echo "<br> EmrgncyNo: " . $EmrgncyNo;
// echo "<br> Provice: " . $Provice;
// echo "<br> Division: " . $Division;
// echo "<br> District: " . $District;
// echo "<br> Tehsil: " . $Tehsil;
// echo "<br> streetad: " . $streetad;
// echo "<br> deglevel: " . $deglevel;
// echo "<br> Majors: " . $Majors;
// echo "<br> Passing: " . $Passing;
// echo "<br> std_uni: " . $std_uni;
// echo "<br> pak_uni: " . $pak_uni;
// echo "<br> Country: " . $Country;
// echo "<br> City: " . $City;
// echo "<br> abroad_uni: " . $abroad_uni;
// echo "<br> MaxNo: " . $MaxNo;
// echo "<br> Obtain_no: " . $Obtain_no;
// echo "<br> teachingdeg: " . $teachingdeg;
// echo "<br> otherdeg: " . $otherdeg;
// echo "<br> passing_yr: " . $passing_yr;
// echo "<br> awarding_bdy: " . $awarding_bdy;
// echo "<br> employment1: " . $employment1;
// echo "<br> Designation: " . $Designation;
// echo "<br> Description: " . $Description;
// echo "<br> CompanyName: " . $CompanyName;
// echo "<br> CompanyAddress: " . $CompanyAddress;
// echo "<br> JobProvince: " . $JobProvince;
// echo "<br> JobDivision: " . $JobDivision;
// echo "<br> JobDistrict: " . $JobDistrict;
// echo "<br> JobTehsil: " . $JobTehsil;
// echo "<br> TeachingJob: " . $TeachingJob;
// echo "<br> MarkingJob: " . $MarkingJob;
// echo "<br> InvigilatingJob: " . $InvigilatingJob;
// echo "<br> GovJob: " . $GovJob;
// echo "<br> WorkingSince: " . $WorkingSince;
// echo "<br> InvigExperienceLevel: " . $InvigExperienceLevel;
// echo "<br> CompKnowledge: " . $CompKnowledge;
// echo "<br> NetAccess: " . $NetAccess;
// exit();

$picture = "../assets/uploads/Pictures/" . $picUploader;
$degree = "../assets/uploads/AcademicDocuments/" . $degreeUploader;

// Change the line below to your timezone!
date_default_timezone_set(date_default_timezone_get());
$date = date('m/d/Y h:i:s a', time());

$status=false;
// $Passing=2016;
// $passing_yr=2017;
// $WorkingSince=2015;
$IsPDF=0;
 $sql="INSERT INTO `tbl_applicant`(`FirstName`, `MiddleName`, `LastName`, `Title`, `Gender`, `FH_FirstName`, `FH_MiddleName`, `FH_LastName`, `CNIC`, `DOB`, `Email`, `Mobile`, `Landline`, `EmergencyMobile`, `Province`, `Division`, `District`, `Tehsil`, `Address`, `Academic_DegreeLevel`, `Academic_Majors`, `Academic_YP`, `Academic_PakOrAbroad`, `PakistanUni`, `AbroadCountry`, `AbroadCity`, `AbroadUni`, `Academic_TM`, `Academic_OM`, `ProfQual_Title`, `ProfQual_DegOther`, `ProfQual_YP`, `ProfQual_Inst`, `IsCurrentlyWorking`, `Designation`, `JobDesc`, `CompanyName`, `JobProvince`, `JobDivision`, `JobDistrict`, `JobTehsil`, `CompanyAddress`, `RelatedTeaching`, `RelatedMarking`, `RelatedInvig`, `IsGovt`, `WorkingSince`, `InvigExp_Level`, `ComputerKnowledge`, `InternetAccess`, `CompAtHome`, `PostAppliedFor`, `EnteredAt`, `IsPDF`, `Picture`, `DegreeUpload`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; 

// echo "\n$sql";

$stmt = $conn->prepare($sql);

if($stmt === false) { 
  trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR); 
}

$stmt->bind_param('ssssssssssssssssssssssssssssssssssssssssssssssssssssssss', $f_Name ,$M_Name ,$L_Name ,$Title ,$Gender ,$f_hfirstName ,$f_hmiddleName ,$f_hlastName ,$CNIC ,$DOB ,$Email ,$Mobile ,$PTCL ,$EmrgncyNo ,$Provice ,$Division ,$District ,$Tehsil ,$streetad ,$deglevel ,$Majors ,$Passing ,$std_uni   ,$pak_uni ,$Country ,$City ,$abroad_uni ,$MaxNo ,$Obtain_no,$teachingdeg ,$otherdeg ,$passing_yr ,$awarding_bdy ,$employment1 ,$Designation ,$Description ,$CompanyName ,$JobProvince ,$JobDivision ,$JobDistrict ,$JobTehsil ,$CompanyAddress ,$TeachingJob ,$MarkingJob ,$InvigilatingJob ,$GovJob ,$WorkingSince ,$InvigExperienceLevel ,$CompKnowledge ,$NetAccess, $home_comp, $jobTitle, $date ,$IsPDF, $picture, $degree);

if($stmt->execute()){
  $status=true;
}
else{
  echo $stmt->error;
  $status=false;
}

$stmt->close();

$status1=false;
$status2=false;
$status3=false;
$status4=false;
$status5=false;

$sql = "SELECT max(AppID) as mAppID FROM tbl_Applicant";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["mAppID"]. "<br>";

    // Save Teaching Experience
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

      $sql="INSERT INTO `tbl_teachingexperience` (`AppID`, `ExpID`, `LevelTaught`, `From`, `To`) VALUES (?,?,?,?,?)";

      $stmt = $conn->prepare($sql);

      if($stmt === false) { 
        trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR); 
      }

      $stmt->bind_param('sssss', $row["mAppID"], $i, $texpLevel, $texpFrom, $texpTo);

      if($stmt->execute()){
        $status1=true;
      }
      else{
        echo "<br>tableData errr: ".$stmt->error;
        $status1=false;
      }

      $stmt->close();

    }

    //Save Marking Experience
    $markingExperience = $_POST['markingtableData'];
    $markingExperienceArr = explode("\n", $markingExperience);
    for ($i=1; $i < sizeof($markingExperienceArr); $i++) {
      $mexpArr = explode("|", $markingExperienceArr[$i]);
      $mexpLevel = $mexpArr[0];
      $mexpFrom = $mexpArr[1];
      $mexpTo = $mexpArr[2];

      $sql="INSERT INTO `tbl_markingexperience`(`AppID`, `ExpID`, `LevelMarked`, `From`, `To`) VALUES (?,?,?,?,?)";

      $stmt = $conn->prepare($sql);

      if($stmt === false) { 
        trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR); 
      }

      $stmt->bind_param('sssss', $row["mAppID"], $i, $texpLevel, $texpFrom, $texpTo);

      if($stmt->execute()){
        $status2=true;
      }
      else{
        echo "<br>markingtableData errr: ".$stmt->error;
        $status2=false;
      }

      $stmt->close();

    }

    //Save Invigilating Experience
    $invigExperience = $_POST['invig_tableData'];
    $invigExperienceArr = explode("\n", $invigExperience);
    for ($i=1; $i < sizeof($invigExperienceArr); $i++) {
      $iexpArr = explode("|", $invigExperienceArr[$i]);
      $iexpLevel = $iexpArr[0];
      $iexpFrom = $iexpArr[1];
      $iexpTo = $iexpArr[2];

      $sql="INSERT INTO `tbl_invigexperience`(`AppID`, `ExpID`, `LevelMarked`, `From`, `To`) VALUES (?,?,?,?,?)";

      $stmt = $conn->prepare($sql);

      if($stmt === false) { 
        trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR); 
      }

      $stmt->bind_param('sssss', $row["mAppID"], $i, $texpLevel, $texpFrom, $texpTo);

      if($stmt->execute()){
        $status5=true;
      }
      else{
        echo "<br>invig_tableData errr: ".$stmt->error;
        $status5=false;
      }

      $stmt->close();

    }

    //Save Teaching Subject Interest
    $te_Subject = $_POST['tsi'];
    $te_SubjectArr = explode("\n", $te_Subject);
    for ($i=1; $i < sizeof($te_SubjectArr); $i++) {
      $texpSubject = $te_SubjectArr[1];

      $sql="INSERT INTO `tbl_te_subjects`(`AppID`, `SID`, `Subject`) VALUES (?,?,?)";

      $stmt = $conn->prepare($sql);

      if($stmt === false) { 
        trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR); 
      }

      $stmt->bind_param('sss', $row["mAppID"], $i, $texpSubject);

      if($stmt->execute()){
        $status3=true;
      }
      else{
        echo "<br>tsi errr: ".$stmt->error;
        $status3=false;
      }

      $stmt->close();

    }

    //Save Marking Subject Interest
    $marking_Subject = $_POST['msi'];
    $marking_SubjectArr = explode("\n", $marking_Subject);
    for ($i=1; $i < sizeof($marking_SubjectArr); $i++) {
      $mSub = $marking_SubjectArr[1];

      $sql="INSERT INTO `tbl_marking_subjects`(`AppID`, `SID`, `Subject`) VALUES (?,?,?)";

      $stmt = $conn->prepare($sql);

      if($stmt === false) { 
        trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR);
      }

      $stmt->bind_param('sss', $row["mAppID"], $i, $mSub);

      if($stmt->execute()){
        $status4=true;
      }
      else{
        echo "<br>msi errr: ".$stmt->error;
        $status4=false;
      }

      $stmt->close();

    }
  }
} else {
  echo "0 results";
}

if($status && $status1 && $status2 && $status3 && $status4){
  require_once 'test.php';
  echo '<br>success';
  $_SESSION['saveStatus']="success";
  header("Location: ../index.php");
}
if(!$status || !$status1 || !$status2 || !$status3 || !$status4){
  echo '<br>failed';
  $_SESSION['saveStatus']="failure";
  header("Location: ../index.php");
}



?>