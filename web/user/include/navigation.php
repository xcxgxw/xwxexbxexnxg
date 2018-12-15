       <!-- Navigation -->
        <script src="https://www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-database.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-auth.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyARKMgF5Ik_20WkcChSNYrKh_Sxt17CG00",
            authDomain: "webengrg.firebaseapp.com",
            databaseURL: "https://webengrg.firebaseio.com",
            projectId: "webengrg",
            storageBucket: "webengrg.appspot.com",
            messagingSenderId: "708972282948"
        };
        firebase.initializeApp(config);
        </script>
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Company Collaboration Platform</a>
            </div>

            <script>
                window.onload = function() {
                    firebase.auth().onAuthStateChanged(function(user) {
                    if (user) {
                        var userId = user.uid;
                        console.log(userId);

                        firebase.database().ref('/users/' + userId).once('value').then(function(snapshot) {
                            var name = (snapshot.val() && snapshot.val().name) || 'Anonymous';
                            console.log(name);
                            $("#getUserName").text(name);
                        });
                    } else {
                        // User is not signed in.
                        alert("Sign In Failed");
                    }
                });
                }
            </script>

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li><a href="index.php">HOME</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i id="getUserName" class="fa fa-user"></i><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <!-- <a href="../loginPage.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a> -->
                            <!-- <button class="fa fa-fw fa-power-off" onclick="logout();">Log Out</button> -->
                            <button class="btn btn-danger" onclick="logout();">Log Out</button>
                        </li>
                    </ul>
                </li>
            </ul>

            <script>
                function logout(){
                    firebase.auth().signOut();
                    window.location = "../loginPage.html";
                }
            </script>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Announcement <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="view_announcement.php">View All Announcements</a>
                            </li>
                            <li>
                                <a id="postAnnouncement" href="post_announcement.php">Post Announcement</a>
                            </li>
                        </ul>
                    </li>
         
                    <li>
                        <a href="discussion_thread.php"><i class="fa fa-fw fa-edit"></i> Discussion</a>
                    </li>
                    <li>
                        <a href="eventcalendar/index.php"><i class="fa fa-fw fa-edit"></i> Event Calender</a>
                    </li>
 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>