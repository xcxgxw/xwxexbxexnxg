<?php include "include/header.php"?>
<?php include "include/footer.php"?>
<?php include "include/navigation.php"?>



<body>

    <div id="wrapper">


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Company Collaboration Platform!
                            <small>Ivory</small>
                        </h1>
          
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <script>
            firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    // User is signed in.
                    //var current_user = firebase.auth().currentUser;
                    console.log(user.uid);
                    firebase.database().ref('/users/'+user.uid).once('value').then(function(snapshot){
                    permissionLevel = snapshot.val().permission;
                    if(permissionLevel != 1){
                        document.getElementById("postAnnouncement").style.display = "none";
                    }
            });     
                } else {
                    // User is not signed in.
                    console.log("Sign In Failed");
                }
            });
        </script>
</body>

