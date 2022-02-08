<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inicial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>

    <!-- Full Calendar -->

    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <script src="js/fullcalendar.min.js"></script>

    <title>Calendario Web</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-7"></div><div id="CalendarioWeb"></div>
        <div class="col"></div>
    </div>

</div>    

<script>
$(document).ready(function(){
    $('#CalendarioWeb').fullcalendar();

});



</script>

</body>
</html>