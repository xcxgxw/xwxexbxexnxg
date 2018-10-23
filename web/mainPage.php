        <!DOCTYPE HTML>
        <html>
            
        <title>CCP</title>
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
        <link rel="stylesheet" type="text/css" href="design.css">
                <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
            
            </head>

            <body>
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <img class="logo" src="logo.png" alt="ccplogo" width="40" height="30">
        
        <a class="navbar-brand" href="mainPage.php">Company Collaboration Platform</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="mainPage.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            </ul>
            
            <form action ="loginPage.php">
                    <input type ="submit" class ="btn btn-secondary btn-sm my-2 my-sm-0" name = "logInBtn" value = "Login ">
            </form>  

        </div>
        </nav>    



        

            <div class="center-container">
                <img src="collab.jpg" class="img-fluid">
                <form action ="loginPage.php">
                        <input type ="submit" class ="btn btn-dark" name = "logInBtn" value = "Get Started ">
                </form> 
            </div>
        </div>
    
        </body>
    </html>