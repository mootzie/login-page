<?php
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['pword'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pword = validate($_POST['pword']);

    if (empty($uname)) {
        header("Location: index.php?error=user name is required");
        exit();
    } elseif (empty($pword)) {
        header("Location: index.php?error=password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pword'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $(function() {
        var dateFormat = "mm/dd/yy",
            from = $("#from")
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3
            })
            .on("change", function() {
                to.datepicker("option", "minDate", getDate(this));
            }),
            to = $("#to").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3
            })
            .on("change", function() {
                from.datepicker("option", "maxDate", getDate(this));
            });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });
    </script>
    <script>
    $(function() {
        $("#datepicker").datepicker();
    });
    </script>
    <title>Document</title>
</head>

<body>
    <!-- bg-primary -->
    <nav class="navbar navbar-expand-sm navbar-light " style="background-color: rgb(255, 154, 1);">
        <div class="container-fluid" style="background-color: rgb(255, 154, 1);">
            <a class="navbar-brand" href="index.php"><img src="./koam-logo.png" alt="" width="200px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <a href=""></a>
                </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarID">
                <div class="navbar-nav">
                    <a style="" class="nav-link nav-right" aria-current="page" href="index.php">Home</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="btn">
        <a class="btn__link" href="index.php">
            <div class="btn__sq"></div>
        </a>
    </div>
    <div class="container table-responsive py-5">
        <table class="table table-bordered table-hover table-shadow">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Password</th>
                    <th scope="col">Category</th>
                    <th scope="col">Orginization</th>
                    <th scope="col">status</th>
                    <th scope="col">Status 2</th>
                    <th scope="col">Start</th>
                    <th scope="col">End</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">7869</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>

                </tr>
                <tr>
                    <th scope="row">2123</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">32490</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-3 control-label" for="selectbasic"><strong>Change Status To: </strong></label>
            <div class="col-md-9">
                <select id="selectbasic" name="selectbasic" class="input">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                    <option value="3">Option three</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-3 control-label" for="textinput"><strong>Status: </strong></label>
            <div class="col-md-3">
                <input id="textinput" name="textinput" type="text" placeholder="" class="input">
            </div>
        </div>
        <!--END DATE-->
        <!-- <div class="form-group">
            <label class="col-md-3 control-label" for="textinput"><strong>Start Date: </strong></label>  
            <div class="col-md-3">
              <input id="datepicker" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            </div>     
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label" for="textinput"><strong>End Date: </strong></label>  
        <div class="col-md-3">
          <input id="datepicker1" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
        </div>     
  </div> -->




        <div class="form-group">
            <label class="" for="from"><strong>Start Date: </strong></label>
            <div>
                <input class="input" type="text" id="from" name="from">
            </div>
        </div>
        <div class="form-group">
            <label class="" for="to"><strong>End Date: </strong></label>
            <div>
                <input class="input" type="text" id="to" name="from">
            </div>
        </div>

        <!--END DATE-->

        <div class="row text-center justify-content-center">
            <div class="col-md-3 text-center">
                <button type="submit" class="btn btn-primary btn-block mb-4 btn-shadow">Submit</button>
            </div>
        </div>
</body>

</html>