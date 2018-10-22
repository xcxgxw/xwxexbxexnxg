<!DOCTYPE>
<html lang="en">
<head>
<title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="design.css">
  <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
</head>
<body style="background-image: url('collab.jpg')">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img class="logo" src="logo.png" alt="ccplogo" width="40" height="30">
        <a class="navbar-brand" href="#">Company Collaborative Platform</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="mainPage.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            </ul>         
            
        </div>
    </nav>
    
    <form action="discussion_thread.php" method='get'>

        <legend style="text-align: center; margin-top: 170px">User Account Login</legend>

        <div class="form-row">
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group col-md-4"></div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-4"></div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4"></div>
            <button type="submit" class="btn btn-primary col-md-4" href="discussion_thread.php">Login</button>
            <div class="form-group col-md-4"></div>
        </div>  

    </form>

</body>
</html>