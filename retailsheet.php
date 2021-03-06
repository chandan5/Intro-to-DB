<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
  .edit {
    height:40px;
  }
</style>
    <title>Retail Balance Sheet</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <script src="css/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
     <?php
      session_start();
      if(!isset($_SESSION['views'])){
        echo "<script>alert('You must be logged in'); location.href = 'signin.php'</script>";
      }
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Cloth Lining Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Retailorder.php">Retail Order</a></li>
            <li><a href="millorder.php">Mill Order</a></li>
            <li><a href="millsheet.php">Mill Balance Sheet</a></li>
            <li class='active'><a href="retailsheet.php">Retail Balance Sheet</a></li>
            <li><a href="auditsheet.php">Audit Sheet</a></li>
            <li><a href="employee.php">Employees</a></li>
            <li><a href='scripts/logout.php'>Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        
        <div>
          <table class = 'table'>
          <thead>
            <tr>
              <td><b>Id</b></td>
              <td><b>Name</b></td>
              <td><b>Address</b></td>
              <td><b>Contact Name</b></td>
              <td><b>Contact Number</b></td>
              <td><b>Transaction</b></td>
              <td></td>
            </tr>
          </thead>
          <?php
            require_once("scripts/retailsheet.php"); 
          ?>
          </table>
          <div class='col-md-5'></div>
          <div class='col-md-2'><a href="add_retailer.php"><button class="btn btn-lg btn-primary btn-block">Add New Retailer</button></a></div>
          <div class='col-md-5'></div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
    

        <div class='col-md-4'></div>
        <div id='form' class='col-md-4' style='display:none;'>
          <form id='details' class="form-signin" role="form" action='scripts/editretailer.php' method='post'>
            <h3 id='head' class="form-signin-heading"></h3>
            <input class="form-control" name='shopname' placeholder='Retail Shop Name' required="" autofocus="" type='text'>
            <input class="form-control" name='address' placeholder='Address' required="" autofocus="" type='text'>
            <input class="form-control" name='contactname' placeholder='Primary Contact Name' required="" autofocus="" type='text'>
            <input class="form-control" name='number' placeholder='Phone Number' required="" autofocus="" type='text'>
            <input id='retailerid' name='retailerid' value='0' type='hidden'>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  
<script type="text/javascript">
var retailerid = 0;
function display(id){
  retailerid = id;
  document.getElementById('form').style.display = "";
  document.getElementById('retailerid').value = retailerid;
  document.getElementById('head').innerHTML = "New details for Retailer " + retailerid;
}

</script>

</body>
</html>