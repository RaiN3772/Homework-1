<?php
$course_name = "PHP Course";
$student_name = "Amir Alatrash";
$student_no = 21910190;
date_default_timezone_set('Asia/Jerusalem'); # Set the default timezone to Jerusalem
$current_date = date('m/d/Y'); # Month / Day / Year
$current_time = date('h:i:sa'); # Hour : Minutes : Seconds AM/PM

# Grading
$grade1 = 80;
$grade2 = 96.5;
$grade3 = 74.3;
$average = ($grade1 + $grade2 + $grade3) / 3;


?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  
	  <!-- Custom Style -->
      <link rel="stylesheet" href="style.css">
      <title>Homework #1 - Solo</title>
   </head>
   <body>
   
      <nav class="navbar bg-ahliya">
         <a class="navbar-brand text-white"><img src="https://eclass.paluniv.edu.ps/pluginfile.php/1/core_admin/logocompact/300x300/1624053753/logo-removebg-preview.png" width="30" height="30" class="d-inline-block align-top mr-3" alt=""><?=$course_name?></a>
		 <div class="navbar-text text-date">Current Date: <span class="text-light"><?=$current_date?></span>, Current Time: <span class="text-light"><?=$current_time?></span></div>
      </nav>
	  
	  <div class="container">
	  
	  <div class="widget mt-5">
   <div class="widget-heading">
      <h5>Student Information</h5>
   </div>
   <div class="widget-content">
      <div class="table-responsive">
         <table class="table">
            <tbody>
               <tr>
                  <th>
                     <div class="th-content">Student No</div>
                  </th>
                  <td>
                     <div class="td-content"><?=$student_no?></div>
                  </td>
                  <th>
                     <div class="th-content">Student Name</div>
                  </th>
                  <td>
                     <div class="td-content"><?=$student_name?></div>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>

<div class="widget mt-5">
   <div class="widget-heading">
      <h5>Grade Information</h5>
   </div>
   <div class="widget-content">
      <div class="table-responsive">
         <table class="table table-bordered">
            <tbody>
               <tr>
                  <th>
                     <div class="th-content">C++</div>
                  </th>
                  <td>
                     <div class="td-content"><?=$grade1?></div>
                  </td>
                  <th>
                     <div class="th-content">Web Design</div>
                  </th>
                  <td>
                     <div class="td-content"><?=$grade2?></div>
                  </td>
				  <th>
                     <div class="th-content">Software Engineering</div>
                  </th>
                  <td>
                     <div class="td-content"><?=$grade3?></div>
                  </td>
				  <th>
                     <div class="th-content">Average</div>
                  </th>
                  <td>
                     <div class="td-content"><?=$average?></div>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
   <div class="widget-footer">
			<?php if($average >= 60) : ?>
			<span class="result passed">Passed</span>
			<?php else : ?>
			<span class="result failed">Failed</span>
			<?php endif; ?>
		 </div>
</div>

</div>
   </body>
</html>