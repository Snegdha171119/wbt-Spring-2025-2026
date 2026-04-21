<?php require_once "contact_process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Snegdha's Portfolio - Contact</title>
<link rel="stylesheet" href="../css/style.css">
</head>
   <body>
   <header>
   <h1>Contact Me</h1>
   <nav>
  <ul>
   <li><a href="../index.html">Home</a></li>
       <li><a href="education.html">Education</a></li>
     <li><a href="experience.html">Experience</a></li>
    <li><a href="project.html">Project</a></li>
     </ul>
    </nav>
      </header>
     <main>
   <section class="contact-form">
         <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
         <fieldset>
            <legend>Contact Form</legend>
          <div>
           <label for="firstname">First Name:</label>
           <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" value="<?= $firstname ?>">
             <span class="error"><?= $firstnameErr ?></span>
             </div>
             <div>
            <label for="lastname">Last Name:</label>
          <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" value="<?= $lastname ?>">
          <span class="error"><?= $lastnameErr ?></span>
          </div>
           <div>
       <span>Gender:</span>
          <input type="radio" id="male" name="gender" value="male" <?= ($gender == "male") ? "checked" : "" ?>>
           <label for="male">Male</label>
 
                        <input type="radio" id="female" name="gender" value="female" <?= ($gender == "female") ? "checked" : "" ?>>
      <label for="female">Female</label>
 
        <span class="error"><?= $genderErr ?></span>
                  </div>
<div>
<label for="email">Email:</label>
     <input type="text" id="email" name="email" placeholder="Enter your email" value="<?= $email ?>">
     <span class="error"><?= $emailErr ?></span>
      </div>
          <div>
     <label for="company">Company:</label>
    <input type="text" id="company" name="company" placeholder="Enter your company name" value="<?= $company ?>">
     <span class="error"><?= $companyErr ?></span>
      </div>
      <div>
      <span>Reason of Contact:</span>
      <input type="radio" id="project" name="reason_of_contact" value="project" <?= ($reason_of_contact == "project") ? "checked" : "" ?>>
      <label for="project">Project</label>
 
             <input type="radio" id="thesis" name="reason_of_contact" value="thesis" <?= ($reason_of_contact == "thesis") ? "checked" : "" ?>>
             <label for="thesis">Thesis</label>
 
        <input type="radio" id="job" name="reason_of_contact" value="job" <?= ($reason_of_contact == "job") ? "checked" : "" ?>>
        <label for="job">Job</label>
 
        <span class="error"><?= $reasonErr ?></span>
      </div>
         <div>
                        <span>Topics:</span>
                        <input type="checkbox" id="web" name="topics" value="web development" required>
                        <label for="web">Web Development</label>
                        <input type="checkbox" id="mobile" name="topics" value="mobile development">
                        <label for="mobile">Mobile Development</label>
                        <input type="checkbox" id="ai" name="topics" value="ai/ml development">
                        <label for="ai">AI/ML Development</label>
                    </div>
<div>
        <label for="consultation_date">Consultation Date:</label>
        <input type="date" id="consultation_date" name="consultation_date" value="<?= $consultation_date ?>">
         <span class="error"><?= $consultationDateErr ?></span>
         </div>
<div>
     <input type="submit" value="Register">
     <input type="reset" value="Reset">
</div>
</fieldset>
</form>
 
            <?php if (

                $_SERVER["REQUEST_METHOD"] == "POST" &&

                !$firstnameErr && !$lastnameErr && !$genderErr && !$emailErr &&

                !$companyErr && !$reasonErr && !$topicsErr && !$consultationDateErr

            ): ?>
          <h3>Submitted values</h3>
          <table class="result-table">
             <tr><td>First Name</td><td><?= $firstname ?></td></tr>
             <tr><td>Last Name</td><td><?= $lastname ?></td></tr>
              <tr><td>Gender</td><td><?= $gender ?></td></tr>
            <tr><td>Email</td><td><?= $email ?></td></tr>
          <tr><td>Company</td><td><?= $company ?></td></tr>
            <tr><td>Reason of Contact</td><td><?= $reason_of_contact ?></td></tr>
           <tr><td>Topics</td><td><?= implode(", ", $topics) ?></td></tr>
           <tr><td>Consultation Date</td><td><?= $consultation_date ?></td></tr>
            </table>
<?php endif; ?>
 
        </section>
</main>
<footer>
<a href="../index.html">Back to Home</a>
</footer>
</body>
</html>
 