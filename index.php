<!DOCTYPE html>
<html lang="en">
<head>
    <title>ArtWork System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- remember add in the jquery part to keep the navbar consistently throughout all pages in the site  -->
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

</head>
<body style="height:1500px; background-color: black">
<div id="divNavBar" >


</div>



<script>
    $(document).ready(function(){
        $('#divNavBar').load("headerNav.html");
    });
</script>



<!--<nav id="navBar" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div> -->
        <ul class="nav navbar-nav">
            <li class="nav-item" ><a href="index.php">Home</a></li>
            <li class="nav-item" ><a href="artlisting.php">Art Listing</a></li>
            <li class="nav-item" ><a href="track&trace.php">Track & Trace</a></li>
            <li class="nav-item" ><a href="admin.php">Admin</a></li>
        </ul>
    </div>
</nav> -->

<div class="container" style="margin-top:50px">
    <h1><i><u>Artwork System</u></i></h1>
    <div class="row">
        <div class="col-md-4">
            <p>Hi I am Cara and I have had a passion for art, for around 8 years now. It's not my full time source of income just a little hobby of mine
                that I am really passionate about and what to share with others, so I thought I would through this website
            </p>

        </div>
        <div class="col-md-4">
            <p>My main focus for my art is nature and the environment I love to create pieces related to nature and all that is around us.
                I really enjoy doing seasonal pieces which usually involve me finding a nice spot each season of the year and capturing the view in front of me through my art.
            </p>
        </div>
    </div>
</div>



</body>
</html>