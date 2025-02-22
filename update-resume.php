<?php
include './db/connection.php';
session_start();

$base_dir = __DIR__ . '/Base';
$static_url = './assets';
ob_start();
include "$base_dir/header.php";
$navlink_content = ob_get_clean();
$page = 'aboutus';
ob_start();

if (!isset($_SESSION["username"])) {
    header("Location: http://localhost/jobsadmire-website-2/login.php");
    exit;
}

$username = $_SESSION['username'];
$query = "select * from cv_data where username = '$username'";
$query_run = mysqli_query($con, $query);
$row = mysqli_fetch_array($query_run);

if ($username == $row[3]) {
    if (isset($_SESSION["username"])) {
?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="summernote-bs5.css" rel="stylesheet">
<link rel="stylesheet" href="./cvmaker-assets/css/style-starter.css">
<div class="mt-32 container-fluid">
    <div class="col-md-12 resume-head">
        <div class="container">
            <p class="pt-5 h3 text-center">Update Data</p>
            <hr>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-10 mx-auto">
                <h3 class="">Personal Details</h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" name="jobTitle" class="form-control" value="<?php echo $row['job_title']; ?>" placeholder="Enter your job title" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="img-wrapper">
                                    <div id="imageContainer">
                                        <img id="selectedImage" name="myImage" src="./cvmaker-assets/images/<?php echo $row['user_img']; ?>">
                                    </div>
                                    <ul>
                                        <li class="pt-4">
                                            <a href="#" class="p-1" id="selectText">Upload New Image</a>
                                        </li>
                                        <input type="file" name="txtfile" class="btn btn-link text-info p-1" id="imageInput" style="display: none;">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="user" placeholder="Enter your full name" class="form-control" value="<?php echo $row['username']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="user_email" placeholder="Enter your email" class="form-control" value="<?php echo $row['email']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" name="user_num" class="form-control" placeholder="Enter your number" value="<?php echo $row['phone']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="user_add" placeholder="Enter your address" class="form-control" value="<?php echo $row['address']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>Professional Summary</h3>
                                <label for="exampleInputName">Include summary of your skills and experience in 3-5
                                    sentences.</label>
                                <textarea name="user_summary" rows="5" class="form-control summernote"> <?php echo $row['user_summary']; ?> </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>Employment History</h3>
                                <label for="exampleInputName">Include 3-5 work responsibility for each experience.
                                    List your most recent experience on top.</label>
                                <ul id="accordion">
                                    <li>
                                        <label for="first"><?php echo $row['empJob_title']; ?><i class="fas fa-arrow-circle-down"></i></label>
                                        <input type="checkbox" name="accordion" id="first">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Job Title</label>
                                                                <input type="text" value="<?php echo $row['empJob_title']; ?>" name="EmpJobTitle" class="form-control" placeholder="Enter your job title" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Employer</label>
                                                                <input type="text" value="<?php echo $row['employer']; ?>" name="employer" class="form-control" placeholder="Enter your Company name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="start date">Start Date</label>
                                                            <input type="date" value="<?php echo $row['emp_start_Date']; ?>" class="form-control" name="EmpstrtDate" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="start date">End Date</label>
                                                            <input type="date" value="<?php echo $row['emp_end_Date']; ?>" class="form-control" name="EmpEndDate" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">City</label>
                                                                <input type="text" name="EmpCity" value="<?php echo $row['emp_city']; ?>" class="form-control" placeholder="Enter your City name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputName">Description</label>
                                                                <textarea name="EmpDescrip" rows="5" class="form-control summernote"><?php echo $row['emp_description']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>Education</h3>
                                <label for="exampleInputName">List your most recent education on top. You should not
                                    include high-school.</label>
                                <ul id="accordion">
                                    <li>
                                        <label for="second"><?php echo $row['deg_name']; ?><i class="fas fa-arrow-circle-down"></i></label>
                                        <input type="checkbox" name="accordion" id="second">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>School</label>
                                                                <input type="text" value="<?php echo $row['school_name']; ?>" name="SchoName" class="form-control" placeholder="Enter your school name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Degree</label>
                                                                <input type="text" value="<?php echo $row['deg_name']; ?>" name="DegName" class="form-control" placeholder="Enter your degree" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="start date">Start Date</label>
                                                            <input type="date" value="<?php echo $row['edu_start_date']; ?>" class="form-control" name="EdustrtDate" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="start date">End Date</label>
                                                            <input type="date" value="<?php echo $row['edu_end_date']; ?>" class="form-control" name="EduEndDate" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">City</label>
                                                                <input type="text" value="<?php echo $row['edu_city']; ?>" name="Educity" class="form-control"
                                                                    placeholder="Please enter the name of the city where you received your degree" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputName">Description</label>
                                                                <textarea name="Edusummary" rows="5" class="form-control summernote"><?php echo $row['edu_summary']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>Skills</h3>
                                <label for="exampleInputName">Only list relevant skills. E.g. communication,
                                    computer, leadership, organizational or problem-solving skills.</label>
                                <ul id="accordion">
                                    <li>
                                        <label for="third"><?php echo $row['skill_job_title']; ?><i class="fas fa-arrow-circle-down"></i></label>
                                        <input type="checkbox" name="accordion" id="third">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Skill</label>
                                                                <input type="text" value="<?php echo $row['skill_job_title']; ?>" name="SkijobTitle" class="form-control" placeholder="add your skill">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="skill-level">Level:</label>
                                                                <div class="form-group">
                                                                    <select class="form-control" id="exampleSelect" name="skillbutton" required>
                                                                        <option><?php echo $row['skill_emp']; ?>
                                                                        </option>
                                                                        <option>Novice</option>
                                                                        <option>Beginner</option>
                                                                        <option>Skillful</option>
                                                                        <option>Experienced</option>
                                                                        <option>Expert</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Software</label>
                                                                <input type="text" value="<?php echo $row['software_name']; ?>" name="softwareName" class="form-control"
                                                                    placeholder="Enter your expertise software name:">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="skill-level">Level:</label>
                                                                <div class="form-group">
                                                                    <select class="form-control" id="exampleSelect" name="addSoftLev" required>
                                                                        <option>
                                                                            <?php echo $row['software_level']; ?>
                                                                        </option>
                                                                        <option>Novice</option>
                                                                        <option>Beginner</option>
                                                                        <option>Skillful</option>
                                                                        <option>Experienced</option>
                                                                        <option>Expert</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>Language</h3>
                                <label for="exampleInputName">List your most relevant language on top.</label>
                                <ul id="accordion">
                                    <li>
                                        <label for="forth">Urdu<i class="fas fa-arrow-circle-down"></i></label>
                                        <input type="checkbox" name="accordion" id="forth">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Language</label>
                                                                <input type="text" value="<?php echo $row['urdu']; ?>" name="urdu" class="form-control" value="Urdu" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Level</label>
                                                                <div class="form-group">
                                                                    <select class="form-control" id="exampleSelect" name="urduLevel" required>
                                                                        <option><?php echo $row['urdu_level']; ?>
                                                                        </option>
                                                                        <option>Professional</option>
                                                                        <option>Native</option>
                                                                        <option>Good</option>
                                                                        <option>Conversional</option>
                                                                        <option>Limited</option>
                                                                        <option>Elementry</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <ul id="accordion">
                                    <li>
                                        <label for="forEng">English<i class="fas fa-arrow-circle-down"></i></label>
                                        <input type="checkbox" name="accordion" id="forEng">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Language</label>
                                                                <input type="text" value="<?php echo $row['english']; ?>" name="english" class="form-control" value="English">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Level</label>
                                                                <div class="form-group">
                                                                    <select class="form-control" name="englishLevel" id="exampleSelect" required>
                                                                        <option>
                                                                            <?php echo $row['english_level']; ?>
                                                                        </option>
                                                                        <option>Professional</option>
                                                                        <option>Native</option>
                                                                        <option>Good</option>
                                                                        <option>Conversional</option>
                                                                        <option>Limited</option>
                                                                        <option>Elementry</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>References</h3>
                                <label for="exampleInputName">Your references could be professors, co-workers,
                                    recent employers or friends.</label>
                                <ul id="accordion">
                                    <li>
                                        <label for="fifth"><?php echo $row['ref_name']; ?><i class="fas fa-arrow-circle-down"></i></label>
                                        <input type="checkbox" name="accordion" id="fifth">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Name</label>
                                                                <input type="text" value="<?php echo $row['ref_name']; ?>" name="refName" class="form-control" placeholder="Enter your reference name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Company</label>
                                                                <input type="text" value="<?php echo $row['ref_comp_name']; ?>" name="refCompName" class="form-control" placeholder="Enter Company name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Phone</label>
                                                                <input type="text" value="<?php echo $row['ref_phone']; ?>" name="refPhone" class="form-control" placeholder="Enter phone number" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Email</label>
                                                                <input type="email" value="<?php echo $row['ref_email']; ?>" name="refEmail" class="form-control" placeholder="Enter Email here" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>Other</h3>
                                <label>List your most recent education on top. You should not include
                                    high-school.</label>

                                <ul id="accordion">
                                    <li>
                                        <label for="sixth"><?php echo $row['other_name']; ?><i class="fas fa-arrow-circle-down"></i></label>
                                        <input type="checkbox" name="accordion" id="sixth">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Name</label>
                                                                <input type="text" value="<?php echo $row['other_name']; ?>" name="other_name" class="form-control" placeholder="Enter name here" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">City</label>
                                                                <input type="text" value="<?php echo $row['other_city']; ?>" name="other_city" class="form-control" placeholder="Enter city name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="start date">Start Date</label>
                                                            <input type="date" value="<?php echo $row['other_strt_date']; ?>" class="form-control" name="OthStrtDate" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="start date">End Date</label>
                                                            <input type="date" value="<?php echo $row['other_end_date']; ?>" class="form-control" name="OthEndDate" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <Button name="update" class="btn btn-danger float-right btn-lg">Update</Button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['update'])) {
    $jobTitle = $_POST['jobTitle'];
    $name = $_POST['user'];
    $user_email = $_POST['user_email'];
    $userNum = $_POST['user_num'];
    $userAdd = $_POST['user_add'];
    $userSumm = $_POST['user_summary'];
    $EmpJobTitle = $_POST['EmpJobTitle'];
    $emp = $_POST['employer'];
    $empStartDate = $_POST['EmpstrtDate'];
    $empEndDate = $_POST['EmpEndDate'];
    $empCity = $_POST['EmpCity'];
    $empDscrpt = $_POST['EmpDescrip'];
    $empSchName = $_POST['SchoName'];
    $empDegName = $_POST['DegName'];
    $EduStartDate = $_POST['EdustrtDate'];
    $EduEndtDate = $_POST['EduEndDate'];
    $EduCity = $_POST['Educity'];
    $EduSummary = $_POST['Edusummary'];
    $skill_title = $_POST['SkijobTitle'];
    $emp_skill = $_POST['skillbutton'];
    $softName = $_POST['softwareName'];
    $softLevel = $_POST['addSoftLev'];
    $urdu = $_POST['urdu'];
    $urdu_lev = $_POST['urduLevel'];
    $eng = $_POST['english'];
    $eng_level = $_POST['englishLevel'];
    $ref_name = $_POST['refName'];
    $refComp = $_POST['refCompName'];
    $ref_phone = $_POST['refPhone'];
    $ref_email = $_POST['refEmail'];
    $oth_name = $_POST['other_name'];
    $oth_city = $_POST['other_city'];
    $oth_strt_date = $_POST['OthStrtDate'];
    $oth_end_date = $_POST['OthEndDate'];

    if (!empty($_FILES['txtfile']['name'])) {
        $filename = $_FILES['txtfile']['name'];
        $oldLocation = $_FILES['txtfile']['tmp_name'];
        $newlocation = 'assets/images/' . $filename;
        move_uploaded_file($oldLocation, $newlocation);
    } else {
        $filename = $row['user_img'];
        $oldLocation = $_FILES['txtfile']['tmp_name'];
        $newlocation = 'assets/images/' . $filename;
        move_uploaded_file($oldLocation, $newlocation);
    }

    $upd_reg = "UPDATE register set username='$name', email='$user_email' where username = '$username'";
    $update_reg_query = mysqli_query($con, $upd_reg);

    if ($update_reg_query) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    $update = "UPDATE cv_data set job_title='$jobTitle',user_img='$filename', username='$name',email='$user_email',phone='$userNum',address='$userAdd',user_summary='$userSumm',empJob_title='$EmpJobTitle',employer='$emp',emp_start_Date='$empStartDate',emp_end_Date='$empEndDate',emp_city='$empCity',emp_description='$empDscrpt',school_name='$empSchName',deg_name='$empDegName',edu_start_date='$EduStartDate',edu_end_date='$EduEndtDate',edu_city='$EduCity',edu_summary='$EduSummary',skill_job_title='$skill_title',skill_emp='$emp_skill',software_name='$softName',software_level='$softLevel',urdu='$urdu',urdu_level='$urdu_lev',english='$eng',english_level='$eng_level',ref_name='$ref_name',ref_comp_name='$refComp',ref_phone='$ref_phone',ref_email='$ref_email',other_name='$oth_name',other_city='$oth_city',other_strt_date='$oth_strt_date',other_end_date='$oth_end_date'
                    where username = '$username'";
    $update_query = mysqli_query($con, $update);

    if ($update_query) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    if ($update_query > 0) {
        echo "
                         <script>window.location.href = 'templates.php?success=1';</script>
                         ";
        $query = mysqli_query($con, "select * from register where email='$user_email'");
        $session_Data = mysqli_fetch_array($query);
        $_SESSION['username'] = $session_Data[1];
        exit();
    } else {
        echo "
                        <div style='margin-top:5px;' class='alert alert-danger' role='alert'>
                        <b>Failed!</b> Update failed...
                        </div>
                         ";
    }
}

include "$base_dir/base.php";
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="summernote-bs5.js"></script>
<script>
    $(document).ready(function() {
        var t = $('.summernote').summernote({
            height: 100,
            focus: true
        })
    });
</script>
<script>
    const selectText = document.getElementById('selectText');
    const imageInput = document.getElementById('imageInput');
    const selectedImage = document.getElementById('selectedImage');

    selectText.addEventListener('click', () => {
        imageInput.click();
    });

    imageInput.addEventListener('change', () => {
        const selectedFile = imageInput.files[0];
        const imageURL = URL.createObjectURL(selectedFile);
        selectedImage.src = imageURL;
    });
</script>
<script>
    jQuery(function($) {
        $('input[type="checkbox"]').on('change', function() {
            let state = $(this).is(':checked');
            $('input[type="checkbox"]').prop('checked', false);
            $(this).prop('checked', state);
        });
    });

    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<script src="assets/js/bootstrap.min.js"></script>
</script>

<?php
    } else {
        header("location:auth/login.php");
    }

} else {
    header('location:resume.php');
}
?>
