<!DOCTYPE html>

<html>
    <head>
        
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> 
        <title>Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body data-spy='scroll' data-target='.navbar' data-offset="50">
        
            <nav class="navbar stick-top bg-skyblue" id="navv">
                <div class="web-title"> <a class="navbar-brand" href="#">The Lich King </a></div>
                <div class="navbar-links">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#Portfolio" class="navbar-links">Portfolio</a></li>
                    <li class="nav-item"><a href="#About" class="navbar-links">About</a></li>
                    <li class="nav-item"><a href="#Contact" class="navbar-links">Contact</a></li>
                </ul>
                </div>
            </nav>
            <div class="main">
            <div class="container-fluid">
            <div class="text-container">
                <p>Arthas Menethil</p>
                <p>Crown Prince of Lordaeron</p>
                <p>The Lich King</p>
            </div>
            <a><img src="Images/ArthasDK-Header.jpg" class="Arthas"></a>
        </div>
        </div>
            <section id="Portfolio">
                <div class="container-fluid">
        <div class="portfolio">
            <div class="portfolio-title">
                <p>Portfolio</p>
                <div class="portfolioimages">
                  <?php
                   $db = mysqli_connect("localhost","root","","portfolio");
                   ?>
                   <table class="portfolio-table">
                    <tr> 
                      <?php
                       $query=mysqli_query($db, "select * from projects limit 3");
                       while($row=mysqli_fetch_assoc($query)){
                         echo "<td class=\"portfolio-item\">";
                         echo "<a href=\"project.php#p".$row['id']."\">";
                         echo "<img src=\"".$row['image']."\"></img>";
                         echo "</a></td>";
                       }
                       ?>
                     </tr>
                     <tr>
                      <?php
                       $query=mysqli_query($db, "select * from projects limit 3 offset 3");
                       while($row=mysqli_fetch_assoc($query)){
                         echo "<td class=\"portfolio-item\">";
                         echo "<a href=\"project.php#p".$row['id']."\">";
                         echo "<img src=\"".$row['image']."\"></img>";
                         echo "</a></td>";
                       }
                       ?>
                      </tr>
                </div>
            </div>
        </div>
                </div>
                </table>
        </section>
            <section id="About">
               <div class="container-fluid">
        <div class="about-container">
            <a><img src="Images/864e435c-d7d6-44cc-bf99-dc6d18621fe7.jpg" class="about-img"></a>
         
                <div class="Aboutt"><p>About</p></div>
                <div class="about-text">
                <div class="row">
                 <div class="column">
                <p style="font-family: cursive">Arthas Menethil, Crown Prince of Lordaeron and Knight of the Silver Hand, was the son of King Terenas Menethil II and heir to the kingdom's throne. He was trained as a paladin by Uther the Lightbringer and became inducted into the Knights of the Silver Hand. Arthas also had a romantic relationship with the sorceress Jaina Proudmoore. Committed to the protection of his people, Arthas was determined to stop the plague of undeath from infecting Lordaeron. </p></div>
                <div class="column">
                <p style="font-family: cursive">Ruling as the dominant personality of the Lich King for years, Arthas was defeated in combat by adventurers of the Alliance and the Horde. Cradled by the spirit of his father, King Terenas, Arthas Menethil died, leaving the mantle of the Lich King to be taken by a noble soul who would forever more keep the Scourge at bay. </p>
                     </div></div></div>
            </div> 
                </div>
                </section>
            <section id="Contact">
<div class="container-fluid">
        <div class="Contact">
        
            <a><img src="Images/right%20side.jpg" class="last-image"></a>
            <form role="form" method="post">
            <font size="+5" color="bisque"> Contact Me</font>
              <br><br><font size="+2">
                <input type="text" name="name" placeholder="Your Name" id="name">
               <br><br>
                <input type="number" name="ph_number" placeholder="Your Phone Number" id="ph_number">
               <br><br>
              <input type="email" name="email" placeholder="Your Email" id="email">
               <br><br>
               
               <br>
               <textarea name="message" background-color="black" placeholder="Enter Text here..." id="message"></textarea>
               <br><br>
               <input type="submit" value="Submit" style="float: center" name="submit">
               </font> 
            </form>
            <?php
              if(isset($_POST['submit'])){
              	include_once'function.php';
              	$obj=new Contact();
              	$res=$obj->contact($_POST);
              	if($res==true){
              		echo "<script>alert('Thank you for submitting the query.')</script>";
              	} else {
              		echo "<script>alert('Something went wrong. Please try again.')</script>";
              	}

              }
              ?>
            
            <div class="border">
                <a href="https://www.instagram.com/lichkingmenethil/"><img src="Images/IG.jpg" class="IG"></a>
                <a href="https://www.facebook.com/Arthas-Menethil-The-Lich-King-110878619000442/"><img src="Images/facebook.png" class="FB"></a>
                    <a href="https://twitter.com/arthasmemethil?lang=en"><img src="Images/twitter.jpg" class="Tweet"></a>
                <div class="border-text1">
                    <p>My Location <br> Icecrown, Northrend.</p>
                </div>
                <div class="border-text2">
                    <p>My Phone Number <br> 204-LICH-KING</p>
                </div>
            </div>
        </div>
                </div>
                </section>
                
       </div>
    </body>
</html>