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
        margin-top: 12%;
    }
    .foogle-img{
      width: 60%;
      height: auto;
    }

  </style>
</head>
    <body>
        <div class="container-fluid bg-white">
            <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link" href="http://intandwebtech-com.stackstaging.com/">Jonathan</a>
                    <a class="nav-item nav-link" href="http://venus.cs.qc.edu/~sile9170/cs355/">Leon</a>
                    <a class="nav-item nav-link" href="http://ecobblahcs355-com.stackstaging.com/CS355/">Emmanuel</a>
                    <a class="nav-item nav-link" href="info.php">Admin</a>
                  </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-12">
                    <div class="foogle text-center">
                        <div >
                            <img class ="foogle-img" src="foogle.png" alt="Foolge">
                        </div>
                        <form form action="secondpage.php" method="POST" >
                            <input id="userInput" type="text" class="form-control form-control-lg shadow p-3 mb-2 bg-white rounded" name="userWord">
                            <input id="submit"type="submit" class="btn btn-outline-primary btn-lg mt-2" name="submit" value="Search">
                        </form>
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
        </div>

        <!--RESULTS!-->
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-8 text-center">
                    <div id="output">

                    </div>
                </div>
                <div class="col">
                </div>
              </div>
        </div>
        <div id="output">

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript">
        /* Code not needed for this page
            var arrayFromPhp = <?php echo json_encode($arrayResults); ?>;

            $("#output").html("");
            arrayFromPhp.forEach(function(element) {
                $("#output").append(element+"<br>");
            });
            */



        </script>

    </body>
</html>
