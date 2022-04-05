<!DOCTYPE html>

<html>
    <head>
        
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> 
        <title>Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body data-spy='scroll' data-target='#navv' data-offset='50'>
        <div class="main">
            <nav class="navbar" id="navv">
                <div class="web-title"> The Lich King</div>
                <div class="navbar-links">
                <ul>
                    <li><a href="index.php#Portfolio" class="navbar-links">Portfolio</a></li>
                    <li><a href="index.php#About" class="navbar-links">About</a></li>
                    <li><a href="index.php#Contact" class="navbar-links">Contact</a></li>
                </ul>
                </div>
            </nav>

<!DOCTYPE html>
<html>
<head>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {

  box-sizing: border-box;
}
@-ms-viewport{
    width: device-width;
}

ul{
    list-style: none;
}
.main{
    width: 100%;
    height: 95vh;
    background-image: url(../Images/Lich%20king.gif);
    background-size: cover;
    object-fit: cover;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    margin-top: 30px;
}
.navbar {
    display: flex;
    overflow: hidden;
    align-items: center;
    height: 60px;
    background-color: skyblue;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2);
    justify-content: space-between;
    padding: 0px 5%;
    position: fixed;
    width:100%;
    top: 0;
    z-index: 2;
}

.navbar-links ul {
    display: flex;
    margin: 0;
    padding: 0;
}
.navbar-links li {
    list-style: none;
}
.navbar-links li a {
    text-decoration: none;
    color:bisque;
    padding: 1rem;
    display: block;
}

.navbar-links li:hover {
    background-color: mediumpurple;
    opacity: inherit;
}
.nav a{
    float: right;
    display: block;
    color: bisque;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
a:hover{
    background-color: mediumpurple;
    opacity: inherit;
}
nav ul li a{                    /*Inheritence*/
    padding: 1rem;
    text-decoration: none;
    font-family: fantasy;
    color: blanchedalmond;
    font-size: 20px;
    font-weight: 700;
}
.web-title{
    font-family:cursive;
    color: #000000;
    margin: .5 rem; 
    font-size: 20px;
}

@media (max-width: 400,98px){
    .navbar {
        flex-direction: column;
        align-items: flex-start;
        height: 100%;
    }
    
    .navbar-links ul{
        width: 100%;
        height: auto;
        flex-direction: column;
    }
    
    .navbar-links li{
        text-align: center;
    }
    
    .navbar-links li a{
        padding: .5rem 1rem;   
    }
    .navbar-links.active{
        display: inline;
    }
}
@media (max-width: 575,98px){
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .navbar-links ul{
        width: 100%;
        height: auto;
        flex-direction: column;
    }
    
    .navbar-links li{
        text-align: center;
    }
    
    .navbar-links li a{
        padding: .5rem 1rem;   
    }
    .navbar-links.active{
        display: inline;
    }
}
@media (max-width: 767,98px){
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .navbar-links ul{
        width: 100%;
        height: auto;
        flex-direction: column;
    }
    
    .navbar-links li{
        text-align: center;
    }
    
    .navbar-links li a{
        padding: .5rem 1rem;   
    }
    .navbar-links.active{
        display: inline;
    }
}
@media (max-width: 991,98px){
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .navbar-links ul{
        width: 100%;
        height: auto;
        flex-direction: column;
    }
    
    .navbar-links li{
        text-align: center;
    }
    
    .navbar-links li a{
        padding: .5rem 1rem;   
    }
    .navbar-links.active{
        display: inline;
    }
}

.column {
  float: left;
  width: 100%;
  padding: 10px;
  height: auto; 
}
    
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column2{
        float: right;
        width: 25%;
        padding: 10px;
        height: 900px;
        
    }

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
      background:cover;
      height: auto;
      float: left;
  }
}
    @media screen and (max-width: 900px) {
  .column {
    width: 80%;
      height: auto;
  }
        .column2{
            width: 20%;
            height: auto;
            float: left;
        }
}
@media screen and (max-width: 600px) {
  .column2 {
    display: none;
      padding: 0;
      width: 0;
  }
}
    
</style>
</head>
<body>

<div class="row">
  <div class="column" style="background-color:DarkSlateBlue; padding-top: 20px;">
  	
    <h2>Column 1</h2>
    <?php
	$db = mysqli_connect("localhost","root","","portfolio");
	$query= mysqli_query($db,"select * from projects");
?>
<table id="portfolio-table">
    <?php
        $row_count = 1;
        while($row = mysqli_fetch_assoc($query)){
        	echo"<tr class\"content-text\">";
        	echo"<td class\"portfolio-left-content\">";
        	echo"<h2 id=\"p".$row['id']."\">".$row['project_name']."</h2>";
        	echo "<img class=\"projects-image\" src=\"".$row['image']."\"></img><br><br>";
        	echo $row['details'];
        	echo "</td>";

        	if($row_count == 1){
        		$query2 = mysqli_query($db,"select * from projects");
        		echo "<td rowspan\"1000\" class=\"portfolio-content\">";
        		while($row = mysqli_fetch_assoc($query2)){
        			echo "<a href=\"#p".$row['id']."\">".$row['project_name']."</a><br>";
        		}
        		echo "</td";
        		echo "</tr>";
        	} else {
        		echo "</tr>";
        	}
        	++$row_count;
        }


?>
  </div>
  <div class="column2" style="background-color:violet; padding-top: 25px;">
    <h2>Column 2</h2>
    <p>    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
  </div>
</div>

</body>
</html>



