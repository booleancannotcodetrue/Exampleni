<?php
//Enrollment Type
$level = $_POST['levell'];
$course = $_POST['course'];
$semester = $_POST['semester'];
$year = $_POST['year'];
//Personal Data
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$indegenous = $_POST['indigenous'];
$dialect = $_POST['dialect'];
$citizenship = $_POST['citizenship'];
$ethnicity = $_POST['ethnicity'];
$religion = $_POST['religion'];
$civil = $_POST['status'];
$birthdate = $_POST['birthdate'];
$birthplace = $_POST['birthplace'];
$region = $_POST['region'];
$province = $_POST['province'];
$municipal = $_POST['municipal'];
$municipal_address = $_POST['municipal_address'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$entry = $_POST['entry'];
$document = $_POST['document'];
$result = $_POST['exam'];
//Educational Background
$elem_school = $_POST['elem-school'];
$elem_year = $_POST['elemyear'];
$elem_region = $_POST['elem_region'];
$elem_province = $_POST['elem_province'];
$elem_municipal = $_POST['elem_municipal'];
$elem_municipal_address = $_POST['elem_municipal_address'];
$jun_school = $_POST['jun-school'];
$jun_year = $_POST['jun-year'];
$jun_region = $_POST['jun-region'];
$jun_province = $_POST['jun-province'];
$jun_municipal = $_POST['jun-municipal'];
$jun_municipal_address = $_POST['jun_municipal_address'];
$sen_school = $_POST['sen-school'];
$strand = $_POST['strand'];
$lrn = $_POST['lrn'];
$sen_year = $_POST['sen-year'];
$sen_region = $_POST['sen-region'];
$sen_province = $_POST['sen-province'];
$sen_municipal = $_POST['sen-municipal'];
$sen_municipal_address = $_POST['sen_municipal_address'];
//Parents & Guardian
$fathername = $_POST['fathername'];
$fcontact = $_POST['fcontact'];
$f_region = $_POST['f_region'];
$f_province = $_POST['f_province'];
$f_municipal = $_POST['f_municipal'];
$f_municipal_address  = $_POST['f_municipal_address'];
$mothername = $_POST['mothername'];
$mcontact = $_POST['mcontact'];
$m_region = $_POST['m_region'];
$m_province = $_POST['m_province'];
$m_municipal = $_POST['m_municipal'];
$m_municipal_address  = $_POST['m_municipal_address'];
$guardianname = $_POST['guardianname'];
$gcontact = $_POST['gcontact'];
$g_region = $_POST['g_region'];
$g_province = $_POST['g_province'];
$g_municipal = $_POST['g_municipal'];
$g_municipal_address  = $_POST['g_municipal_address'];
//Medical Record
$m_age = $_POST['m-age'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$blood = $_POST['blood'];
$inborn = $_POST['inborn'];
$diagnose = $_POST['diagnose'];
$prev1 = $_POST['prev1'];
$prev1_date = $_POST['prev1-date'];
$prev2 = $_POST['prev2'];
$prev2_date = $_POST['prev2-date'];
if(!empty($lname)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "enroll";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error()){
        echo "shit";
        die();
    }
    else{
        $INSERT_ENROLLMENT = "INSERT INTO enrollment_type (educational_level, course, semester, school_year) VALUES (?, ?, ?, ?)";
        $INSERT_PERSONAL = "INSERT INTO personal (last_name, first_name, middle_name, gender, indigenous, dialect, citizenship, ethnicity, religion, civil_status, birthdate, birthplace, region_address, province_address, municipal_address, street_address, email, contact, entry_type, document, exam) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $INSERT_EDUCATIONAL_BACKGROUND = "INSERT INTO educational_background (elementary_school, elementary_year, elementary_region, elementary_province, elementary_municipal, elementary_municipal_address, junior_school, junior_year, junior_region, junior_province, junior_municipal, junior_municipal_address, senior_school, senior_year, strand, lrn, senior_region, senior_province, senior_municipal, senior_municipal_address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $INSERT_PARENT_GUARDIAN = "INSERT INTO parent_guardian (father_name, father_contact, father_region, father_province, father_municipal, father_municipal_address, mother_name, mother_contact, mother_region, mother_province, mother_municipal, mother_municipal_address, guardian_name, guardian_contact, guardian_region, guardian_province, guardian_municipal, guardian_municipal_address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $INSERT_MEDICAL = "INSERT INTO medical_record (age, current_weight, current_height, blood_type, disease, diagnosed, hospitalalization1, date1, hospitalization2, date2) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt1 = $conn->prepare($INSERT_ENROLLMENT);
        $stmt1->bind_param("ssii", $level, $course, $semester, $year);
        $stmt2 = $conn->prepare($INSERT_PERSONAL);
        $stmt2->bind_param("ssssssssssissssssissi", $lname, $fname, $mname, $gender, $indegenous, $dialect,$citizenship, $ethnicity, $religion, $civil, $birthdate, $birthplace, $region, $province, $municipal, $municipal_address, $email, $contact, $entry, $document, $result);
        $stmt3 = $conn->prepare($INSERT_EDUCATIONAL_BACKGROUND);
        $stmt3->bind_param("sisssssisssssissssss", $elem_school, $elem_year, $elem_region, $elem_province, $elem_municipal, $elem_municipal_address, $jun_school, $jun_year, $jun_region, $jun_province, $jun_municipal, $jun_municipal_address, $sen_school, $sen_year, $strand, $lrn, $sen_region, $sen_province, $sen_municipal, $sen_municipal_address);
        $stmt4 = $conn->prepare($INSERT_PARENT_GUARDIAN);
        $stmt->bind_param("sisssssisssssissss", $fathername, $fcontact, $f_region, $f_province, $f_municipal, $f_municipal_address, $mothername, $mcontact, $m_region, $m_province, $m_municipal, $m_municipal_address, $guardianname, $gcontact, $g_region, $g_province, $g_municipal, $g_municipal_address);
        $stmt5 = $conn->prepare($INSERT_MEDICAL);
        $stmt5->bind_param("iiissssisi", $m_age, $weight, $height, $blood, $inborn, $diagnose, $prev1, $prev1_date, $prev2, $prev2_date);

        $stmt1->execute();
        $stmt2->execute();
        $stmt3->execute();
        $stmt4->execute();
        $stmt5->execute();
        echo "nice";
    }
    $conn->close();
}
?>