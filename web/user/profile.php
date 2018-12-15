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
        <table class="table">
            <tbody id="userProfile">

            </tbody>
        </table>

    </div>
    <!-- /#page-wrapper -->

    <script>
        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                // User is signed in.
                //var current_user = firebase.auth().currentUser;
                console.log(user.uid);
                firebase.database().ref('/users/'+user.uid).once('value').then(function(snapshot){
                user_name = snapshot.val().name;
                user_age = snapshot.val().age;
                user_gender = snapshot.val().gender;
                user_hometown = snapshot.val().hometown;
                user_department = snapshot.val().department;
                user_permission = snapshot.val().permission;
                user_role = snapshot.val().role;
                
                var content = "";
                content += '<tr><td><b>Name</b></td><td>' + user_name + '</td></tr><tr><td><b>Age</b></td><td>' + user_age + '</td></tr><tr><td><b>Gender<b></td><td>' + user_gender + '</td></tr><tr><td><b>Hometown<b></td><td>' + user_hometown + '</td></tr><tr><td><b>Department</b></td><td>' + user_department + '</td></tr><tr><td><b>Permission</b></td><td>' + user_permission + '</td></tr><tr><td><b>Role</b></td><td>' + user_role + '</td></tr>';
                $('#userProfile').html(content);
        });     
            } else {
                // User is not signed in.
                console.log("Sign In Failed");
            }
        });

    </script>
</body>