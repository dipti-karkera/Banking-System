
<?php

$user = 'root';
$password = ''; 
$database = 'bank'; 
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
if(!isset($_SESSION)) {
        session_start();
    }
    $cid = mysqli_real_escape_string($mysqli, $_POST["ano"]);

    $sql =  "SELECT * FROM customer_details WHERE account_no='".$cid."'";
    $result = $mysqli->query($sql);
$mysqli->close(); 
?>
<style>
body  {
  background-image: url("bank3.jpg");
  background-color: #cccccc;
  background-size: 1550px 850px;
  background-repeat: no-repeat;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}table {
			 background-color: #AEC6CF;
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            
        }
  
        h1 {
            text-align: center;
            color: #A7C7E7;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
            padding: 100px;
            text-align:center;
        

        }
        th, td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  		td {
            font-weight: lighter;
        }
		.button1 {
		background-color:#AEC6CF;
 		color: black;
    margin-top:50px;
 		padding: 15px 32px;
 		text-align: center;
 		font-size: 26px;
		 } 
}
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body>
<!-- <div class="topnav" >
 <h1 style="color:white;"> Banking System  </h1> 
</div>
 
 <div>
 <div>
 	<table width="1037" height="162">
   <tr>
     <th width="230" height="77" scope="col"></th>
     <th width="623" colspan="3" scope="col">
	 <div > -->
   <!-- <header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-12 text-black-50 m-0">Dipti Karkera</p>
                <div class="font-rale font-size-14">
                    <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                    <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
                </div>
            </div> -->
   <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" href="#">The Sparks Foundation</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto font-rubik">
                    <li class="nav-item active">
                      <a class="nav-link" href="view_customers.php">View Customers</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="customer.php">Transfer Money</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Coming Soon</a>
                      </li> -->
                  </ul>
                  <!-- <form action="#" class="font-size-14 font-rale">
                      <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                      </a>
                  </form> -->
                </div>
              </nav>				
<!-- <div class="topnav" >
 <h1 style="color:white;"> EASY TRANSFER  </h1> 
</div> -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" href="#">Banking System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                      <a class="nav-link" href="view_customers.php">View Customers</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="transfer.php">Transfer Money</a>
                    </li> -->
<p>&nbsp;</p>
<p></p>
<p>&nbsp;</p>


<table style="width:1000px" class="table tabe-hover table-bordered" id="list">
      <?php  
                while($rows=$result->fetch_assoc())
				
                {
				$ano=$rows['account_no'];
             ?>
         <tr>
         <th width="298" height="24" class="text-center">Name</th>
		 <td width="408"><?php echo $rows['name'];?></td>
          </tr>
		  
		 <tr>
         <th width="298" class="text-center">Email</th>
		 <td><?php echo $rows['email'];?></td>
		 </tr>
		 
		 <tr>
         <th width="298" class="text-center">Account Number</th>
		 <td><?php echo $rows['account_no'];?></td>
		 </tr>
		 
		 <tr>
         <th width="298" class="text-center">Current Balance</th>
		 <td><?php echo $rows['current_bal'];?></td>
		 </tr>
		 
         <tr>     
         <th width="298" class="text-center">Address</th>	
         <td><?php echo $rows['address'];?></td>
         </tr>
		
            <?php
                }
             ?>
     
   
</table>


 
                    <div class="flex-item">
                      <h1>  <a class="button1 button"href="transfer.php?ano=<?php echo $ano ?>"> Transfer Money</a> </h1>
                    </div>
        