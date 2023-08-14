<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Form Submit to Send Email</title>
<link rel="stylesheet" type="text/css" href="stylecontact.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
</head>
<body>
<!--navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarCenteredExample"
          aria-controls="navbarCenteredExample"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarCenteredExample">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html" style="font-weight: bold; color: white;">منيرة شرقي/ Mounira CHERGUI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="kotobi.html" style="color: white; margin-right: 40px;">كُتبي/ MY BOOKS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="makalati.html" style="color: white; margin-right: 40px;">مقالاتي/ MY ARTICLES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="moltakaiat.html" style="color: white; margin-right: 40px;">الملتقيات/ CONFERENCES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.php" style="color: white; margin-right: 40px;">تواصل معنا/CONTACT US</a>
            </li>
            <!-- Navbar dropdown -->
            <!--<li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>-->
              
              <!-- Dropdown menu -->
              <!--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#">Action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled"
                >Disabled</a
              >
            </li>-->
          </ul>
        </div>
      </div>
    </nav>


<main>
<?php
if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
	$userPhone = $_POST["userPhone"];
	$userMessage = $_POST["userMessage"];
	$toEmail = "chergui.mounira@gmail.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n Phone: ". $userPhone  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>

<div class="form-container">
  <form name="contactFormEmail" method="post">
    <div class="input-row">
      <label>Name <em>*</em></label> 
      <input type="text" name="userName" required id="userName"> 
    </div>
    <div class="input-row">
      <label>Email <em>*</em></label> 
      <input type="email" name="userEmail" required id="userEmail"> 
    </div>
    <div class="input-row">
      <label>Phone <em>*</em></label> 
      <input type="text" name="userPhone" required id="userPhone">
    </div>
    <div class="input-row">
      <label>Message <em>*</em></label> 
     <textarea name="userMessage" required id="userMessage"></textarea>
    </div>
    <div class="input-row">
      <input type="submit" name="send" value="Submit">
      <?php if (! empty($message)) {?>
      <div class='success'>
        <strong><?php echo $message; ?>	</strong>
      </div>
      <?php } ?>
    </div>
  </form>
</div>
</main>

<br><br><br>

<!--footer-->
<footer class="bg-info text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/profile.php?id=100018105247214&mibextid=ZbWKwL"
        target="_blank"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

          <!-- youtube -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="https://www.youtube.com/@mounirachergui8375/videos"
        target="_blank"
        role="button"
        ><i class="fab fa-youtube"></i
      ></a>
      
      </section>
      
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    الموقع الرسمي الخاص للدكتورة <span style="color: rgb(152, 16, 16); font-weight: bold;">منيرة شرقي</span>
  </div>
  <!-- Copyright -->
</footer>    


</body>
</html>


