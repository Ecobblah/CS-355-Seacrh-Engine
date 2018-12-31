<?php
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
    $arrayResults = [];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['userWord']) && $_POST['userWord']!=''){

      //user input
      $searchedWord = '%'.$_POST['userWord'].'%';
      $firstLetter  = 'www.'.$searchedWord[1];
      //sql
      $sql = "SELECT * FROM webData WHERE CONCAT_WS('', wrd1,
                    wrd2,
                    wrd3,
                    wrd4,
                    wrd5,
                    wrd6,
                    wrd7,
                    wrd8,
                    wrd9,
                    wrd10,
                    wrd11,
                    wrd12,
                    wrd13,
                    wrd14,
                    wrd15,
                    wrd16,
                    wrd17,
                    wrd18,
                    wrd19,
                    wrd20,
                    wrd21,
                    wrd22,
                    wrd23,
                    wrd24,
                    wrd25,
                    wrd26,
                    wrd27,
                    wrd28,
                    wrd29,
                    wrd30,
                    wrd31,
                    wrd32,
                    wrd33,
                    wrd34,
                    wrd35,
                    wrd36,
                    wrd37,
                    wrd38,
                    wrd39,
                    wrd40,
                    wrd41,
                    wrd42,
                    wrd43,
                    wrd44,
                    wrd45,
                    wrd46,
                    wrd47,
                    wrd48,
                    wrd49,
                    wrd50,
                    wrd51,
                    wrd52,
                    wrd53,
                    wrd54,
                    wrd55,
                    wrd56,
                    wrd57,
                    wrd58,
                    wrd59,
                    wrd60,
                    wrd61,
                    wrd62,
                    wrd63,
                    wrd64,
                    wrd65,
                    wrd66,
                    wrd67,
                    wrd68,
                    wrd69,
                    wrd70,
                    wrd71,
                    wrd72,
                    wrd73,
                    wrd74,
                    wrd75,
                    wrd76,
                    wrd77,
                    wrd78,
                    wrd79,
                    wrd80,
                    wrd81,
                    wrd82,
                    wrd83,
                    wrd84,
                    wrd85,
                    wrd86,
                    wrd87,
                    wrd88,
                    wrd89,
                    wrd90,
                    wrd91,
                    wrd92,
                    wrd93,
                    wrd94,
                    wrd95,
                    wrd96,
                    wrd97,
                    wrd98,
                    wrd99,
                    wrd100
    ) LIKE '$searchedWord'
    ORDER BY CASE WHEN link >= '$firstLetter' THEN 1 ELSE 0 END DESC,
    link ASC ";

      $result = mysqli_query($conn, $sql);

      //if Error output
      if($result === FALSE) {
        echo mysqli_error($conn);
        }

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $i = mysqli_num_rows($result);
          while($row = mysqli_fetch_assoc($result)) {
            //For testing on php side
            //echo "link: " . $row["link"]."<br>";
            $arrayResults[]=$row["link"];
          }
      } else {
        //Found no results
        //do nothing
      }
      //close DB
      mysqli_close($conn);
    }

 ?>


<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Foogle</title>
  <style>

    .foogle{
        margin-top: 2%;
    }
    .foogle-img{
        /*height:40px;
        width:`90px;
        */
        width: 120%;
        height: auto;
    }
    .container{
	       max-width: 900px;
    }
    .results{
        font-size: 24px;
    }

  </style>
</head>
    <body>

        <div class="container">
            <form method="post" >
            <div class="row border-bottom pb-4">
                <div class="col foogle">
                    <a href="..\"><img class ="foogle-img" src="foogle.png" alt="Foolge"></a>
                </div>
                <div class="col-8 foogle">
                    <input id="userInput" type="text" class="form-control form-control-lg shadow p-3 mb-2 bg-white rounded" name="userWord">
                </div>
                <div class="col foogle xs text-center">
                    <input id="submit"type="submit" class="btn btn-primary btn-lg" name="submit" value="Search">
                </div>
            </div>
            </form>
        </div>


        <div class="container results">
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-7 text-left">
                    <div id="output">

                    </div>
                </div>
                <div class="col-4">
                </div>
              </div>
        </div>
        <!--RESULTS!-->
        <div class="container" id="output">

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript">
            var arrayFromPhp = <?php echo json_encode($arrayResults); ?>;

            $("#output").html("");
            if(arrayFromPhp.length!=0){
                arrayFromPhp.forEach(function(element) {
                    $("#output").append("<a class='link' href="+"http://"+element+">"+element+"</a>"+"<br /><br />");
                });
            }
            else{
                $("#output").append("<span style=color:red;>ZERO results :(</span>");
            }
          /*  $(".link").click(function(){
              //alert($(this).html());
              var l = $(this).html();

            });
            */

        </script>

    </body>
</html>
