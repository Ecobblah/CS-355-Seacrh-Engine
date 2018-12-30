<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";
  $conn = mysqli_connect($servername, $username, $password,$dbname);
  if(!$conn){
    die(mysqli_connect_error);
  }
  if(isset($_POST['userLink'])){
    $link = $_POST['userLink'];
    $sql="INSERT INTO webData (link,amountClicked,parseTime)
    VALUES('$link',0,null)";
    if(mysqli_query($conn,$sql)){
      echo "<div class='container'><div class='alert alert-success text-center' role='alert'>Success!</div></div>";
    }
    else{
      echo mysqli_error();
    }

  }
  $sql="SELECT*FROM webData";
  $results=mysqli_query($conn,$sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>admin</title>
  </head>
      <body>
        <div class="container">
          <form class="form-inline mt-4 mb-4"  method="POST" >
              <input id="userInputLink" type="text" class="form-control form-control-lg mt-4" name="userLink">
              <input id="submit"type="submit" class="btn btn-success btn-lg mt-4 ml-4" name="submit" value="Add">
          </form>
        </div>
        <div class="container">
          <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Link</th>
            <th scope="col"># of Clicks</th>
            <th scope="col">Parse Time(s)</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if(mysqli_num_rows($results)>0){
              while($row=mysqli_fetch_assoc($results)){
                echo '<tr>';
                echo '<th scope=row>'.$row['id'].'</th>';
                echo '<td>'.$row['link'].'</td>';
                echo '<td>'.$row['amountClicked'].'</td>';
                echo '<td>'.$row['parseTime'].'</td>';
                echo '</tr>';
              }
            }
          ?>
        </tbody>
      </table>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
