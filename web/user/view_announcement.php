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

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Announcement</h1>
      <table class="table table-borded tale-hover">
          <thead>
              <tr>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Content</th>
                  <th>Date</th>
              </tr>
          </thead>
          <tbody id = "announcement">
          <tr>
              <td>Malone No Party</td>
              <td>31 october 2018</td>
              <td>Play dota or sleep</td>
              <td>Play dota or sleep</td>
          </tr>
      </tbody>
      </table>
    </div>
    <!-- /#page-wrapper -->
</div>
  
<script>
    // firebase.database().ref('/anoun/' + userId).once('value').then(function(snapshot) {
    //     var title = (snapshot.val() && snapshot.val().title) || 'title';
    //     var age = (snapshot.val() && snapshot.val().age) || '0';
    //     var address = (snapshot.val() && snapshot.val().home_address) || '0';
    //     var department = (snapshot.val() && snapshot.val().department) || 'Anonymous';
    //     var permission = (snapshot.val() && snapshot.val().permission) || 'Anonymous';
    //     var role = (snapshot.val() && snapshot.val().role) || 'Anonymous';
                    
    //     console.log(name);
    //     console.log(age);
    //     console.log(address);
    //     console.log(department);
    //     console.log(permission);
    //     console.log(role);
    // });


    var database = firebase.database();
    database.ref().child('announcement').on('value', function(snapshot){
    if(snapshot.exists()){
    var content = '';
    snapshot.forEach(function(data){
                        var val = data.val();
                        console.log(val.title);
                        console.log(val.name);
                        console.log(val.content);
                        console.log(val.postedTime);
                        content += '<tr><td>' + val.title + '</td><td>' + val.name + '</td><td>' + val.content + '</td><td>' + val.postedTime + '</td></tr>';
                    });
                    $('#announcement').html(content);
                }
            });
</script>