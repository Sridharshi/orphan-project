<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>HELPING HANDS| Donate</title>



    <link rel="stylesheet" type="text/css" href="styles.css">

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- FONTAWESOME -->
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
    integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
    crossorigin="anonymous"
  />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">


    <style>
        .new{
            margin:10%;
            width: 90%;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: white;
        }

        #tab
        {
          float:right;
          
        }

        #tab tr td
        {
          padding-left:20px;

        }
        #tab tr td a
        {
          font-size:30px;
        }
        #heading
        {
          color:white;
          font-size:40px;
          width:30%;
          float:left;
        }
        .new h1
        {
          width:100%;
        }
        .table thead tr th,tbody tr td
        {
          padding-left:20px;
          padding-right:20px;
          padding-top:5px;
          padding-bottom: 5px;
          color:white;
        }
    </style>
</head>

<body>

		<!-- NAV BAR START -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <div class="container-fluid">
			    <a class="navbar-brand" href="C:\xampp\htdocs\helpinghands\index.html" id="heading">HELPING HANDS</a>
			   
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <table id="tab">
                <tr>
                  <td>
                  <li class="nav-item">
			          <a class="nav-link" href="C:\xampp\htdocs\helpinghands\index.html">Home</a>
			        </li>
                  </td>
                  <td>
                  <li class="nav-item">
			          <a class="nav-link" href="C:\xampp\htdocs\helpinghands\orphange.html">Orphange</a>
			        </li>
                  </td>
                  <td>
                  <li class="nav-item">
			          <a class="nav-link" href="#oldage">Old age homes</a>
			        </li>
                  </td>
                  <td>
                  <li class="nav-item">
			          <a class="nav-link" href="">About Us</a>
			        </li>
                  </td>
                </tr>
              </table>
			       
			        
			        
			       
			      </ul>
			    </div>
			  </div>
			</nav>
		<!-- NAV BAR ENDS -->
    
    <div class="new">
  <h1>LIST OF CHARITYNAME </h1>
<br>

    
<table class="table">
    <thead>
        <tr>
        <th>charityname</th>
        <th>transactionid</th>
        <th>phno</th>
        <th>address</th>
        <th>upiid</th>
        <th>about</th>
        <th>link</th>
        </tr>
    </thead>
    
    <tbody>
    <?php
$con=mysqli_connect('localhost','root','','donate');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM charity_details");

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['charityname'] . "</td>";
echo "<td>" . $row['transactionid'] . "</td>";
echo "<td>" . $row['phno'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['upiid'] . "</td>";
echo "<td>" . $row['about'] . "</td>";
echo "<td>" . $row['link'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</tbody>
</table>


</div>



<!-- --------------------------------------------FOOTER-------------------------------------------------------->
    <footer>
        <div class="pages"> 
           <!-- <a href="index.html"><img class="aimg" src="images/logo.png" width="250"></a> -->
            <p>Helping Hands cares for needy children by empowering their caregivers to do their best work, with compassion, grace, integrity and excellence. Our end goal is to support children worldwide and see every child reach the potential that God has for them.</p>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <div class="doc">
            <h3>Navigation</h3>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="donate.html">Donate</a>
        </div>
        <div class="social">
            <h3>Support</h3>
            <p>Help us shape a better future fot children all over the world</p>
            <div class="side_btn">
                <a href="donate.html">JOIN US TODAY</a>
            </div>
        </div>
        <hr>
        <p>Copyright &copy;2022 HELPING HANDS. All rights reserved.</p>
    </footer>
</body>
</html>