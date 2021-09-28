<!DOCTYPE html>
<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
//$dw = date("N", $timestamp);
//&& $dw != 2 || $dw != 4
//if ((date('G')<=10 || date('G')>=23) && (date('N') !=3 || date('N') !=5))
//{
//    header ('Location: /closed');
//}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Psychology Attendance Social Psych</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link href="assets/css/lightbox.css" rel="stylesheet" />
	<script src="assets/js/lightbox.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<style>
    .btn-primary {
        display: none;
    }

    .choiceInput:checked~.submit-btn {
        display: block;
    }

    .form-control-second {
        display: none;
    }

    .choiceInput2:checked~.form-control-second {
        display: block;
    }
    .form-control-second {
        display: none;
    }

    .choiceInput2:checked~.form-control-second {
        display: block;
    }
</style>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Psychology Attendance<br/> Social Psych</h2>
                    </div>
                    <p>Enter your name and student id to record attendance for today. Falsifying information or entering information for other students
                        is considered student misconduct and grounds for dismissal or disciplinary action.
                    </p>
                    <form action="insertsocial.php" method="post">
                        <div class="form-group">
                            <label>First and Last Name</label>
                            <input type="text" name="name" class="form-control">
                            <label>Student ID</label>
                            <input type="text" name="id" class="form-control">
                            <label>Are you sitting in the same spot as shown <a href="seatingsocial.png" data-lightbox="social" data-title="Class Seating Chart">here?</a><br>


                                <input class="choiceInput" type="radio" name="answer" value="samespot"> Yes
                                <input class="choiceInput2" type="radio" name="answer" value="differentspot"> No<br><br>
                                <div class="form-control-second">
                                    <p> Please use the image and enter the corresponding row and column that you are currently in</p>
                                    <label>Row</label>
                                    <input type="text" name="seatrow" class="form-control">
                                    <label>Column</label>
                                    <input type="text" name="seatcolumn" class="form-control">
                                </div>
                                                                                                   
                                <input class="btn btn-primary form-control-second" id="go-button" type="submit" name="submit" value="Submit">

                                <input class="btn btn-primary submit-btn" id="go-button" type="submit" name="submit" value="Submit">
                            </label>
                        </div>
                        <!--<input type="submit" class="btn btn-primary submit-btn" name="submit" value="Submit">-->
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>