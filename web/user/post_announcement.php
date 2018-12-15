<?php include "include/header.php"?>
<?php include "include/footer.php"?>
<?php include "include/navigation.php"?>

<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-auth.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
   var userId;
   var userName;
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

  window.onload = function(){
     firebase.auth().onAuthStateChanged(function(user){
        if(user){
           userId = user.uid;
           console.log(userId);
        }
     });
  }
</script>

<div id="wrapper">



    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                        <h1 class="page-header">
      Announcement
      <small>CCP</small>
      </h1>

      <?php
         if(isset($_POST['create_post'])){
             echo $_POST['title'];
         }
         ?>
      <!-- <form action="post_announcement.php" method="post" enctype="multipart/form-data"> -->
         <div class ="form-group">
            <label for="title">Anncouncement Title</Label>
            <input type="text" class="form-control" id="title">
         </div>

         <div class ="form-group">
            <label for="post_content">Post Content</Label>
            <textarea class="form-control" id="post_content" cols="30" rows="10"></textarea>
         </div>
         
         <div class="form-group">
            <input class="btn btn-primary" type="submit" id="submit" value="Publish Announcement">

         </div>
      <!-- </form> -->
      
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

        </div>
   <script>
  function announcement() {
    // var userId = firebase.auth().currentUser.uid;
    var currentTime = new Date().toLocaleString();
    var title = document.getElementById("title").value;
    var content = document.getElementById("post_content").value;

   firebase.database().ref('/users/'+userId).once('value').then(function(snapshot){
      userName = snapshot.val().name;
      console.log(userName);
   });

    firebase.database().ref().child("announcement").push({
      title: title,
      userName: userName,
      content: content,
      postedTime: currentTime
    });
    document.getElementById("title").value="";
    document.getElementById("post_content").value="";
  }
  $("#submit").click(function(){
        announcement();
        alert("Announcement published successfully!")
});

  </script>