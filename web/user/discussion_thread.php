<!DOCTYPE HTML>
        <html>
    
<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-auth.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<style>
  .container {
    border: 2px solid #dedede;
    background-color: rgb(131, 130, 133);
    border-radius: 5px;
    padding: 1px;
    margin: 10px ;
  }
  
  .container::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .time-right {
    float: right;
    color: rgb(192, 189, 189);
    font-style: italic;
    font-size: 15px;
  }
  
  .name-left {
    float: left;
    color: rgb(10, 10, 10);
    font-size: 15px;
  }
  </style>
<!-- <script>

var database = firebase.database();

function writeUserData(userId, name, email, imageUrl) {
  firebase.database().ref().child('user').set({
    username: name,
    email: email,
    profile_picture : imageUrl
  });
}
writeUserData("Ghee Wei","gw@gmail.com","123");
</script> -->

<script>

var userName;
var permissionLevel;

function loaddd(){

        firebase.auth().onAuthStateChanged(function(user) {
                if (user) {

                  firebase.database().ref('/users/'+user.uid).once('value').then(function(snapshot){
                    permissionLevel = snapshot.val().permission;
                  }); 
                    var userDataRef = firebase.database().ref("users").child(user.uid).orderByKey();
                    userDataRef.once("value").then(function(snapshot) {
                      
                       var permission = snapshot.val().permission;
                       userName = snapshot.val().name;

                        var iconn_list = $(".teams__list");
                        listt = document.createElement("li");
                        listt.setAttribute('class','teams_item');
                        homeButton = document.createElement("button");
                        homeButton.setAttribute('class','teams__button');
                        homeButton.setAttribute('onclick','backHomePage()');
                        ii = document.createElement("i");
                        ii.setAttribute('class','fa fa-home');
                        homeButton.append(ii);
                        listt.append(homeButton);
                        iconn_list.append(listt);

                        var userDataRef = firebase.database().ref("departmentHierarchy").child(permission).orderByKey();
                        userDataRef.once("value").then(function(snapshot) {
                          var div = $("#welcome");
                header1 = document.createElement("h1");
                header1.setAttribute('class','team-menu__info');
                header1.setAttribute('style','color:white');
                header1.textContent = 'Welcome';
                header2 = document.createElement("h1");
                header2.setAttribute('class','team-menu__info');
                header2.setAttribute('style','font-size:20px ; color:white;');
                header2.textContent =userName;
                div.append(header1);
                div.append(header2);
                        snapshot.forEach(function(childSnapshot) {
                          var key = childSnapshot.key;

                          var listItem = document.createElement("li");
                          listItem.setAttribute('class','teams_item');
                          var item = document.createElement("button");
                          item.setAttribute('class','teams__button');
                          item.setAttribute('id', key);
                          item.setAttribute('onclick','dispTopic(this.id)');
                          item.textContent = key;
                          listItem.appendChild(item);
                          iconn_list.append(listItem);   

                          
                          
                          });
                        });
                      });
                  }
                });

                
                
                
      
}

function dispTopic(depart){
  $(".app-layout").css("visibility", "hidden");
  $(".topictitle").empty();
  $(".team-menu__info").empty();
  $(".message-list").empty();
   $(".channels__heading").empty();
   $("#deleteTopic").empty();
  var userDataRef = firebase.database().ref("departmentList").child(depart).orderByKey();
  userDataRef.once("value").then(function(snapshot) {
  // snapshot.forEach(function(childSnapshot) {
    var departName = snapshot.val().name;
    var div = $(".team-menu__info");
   header = document.createElement("h1");
   header.setAttribute('class','team-menu__name');
   header.textContent = departName;
   div.append(header);
     
    // });
  });
  
  var topic_list = $(".channels__list");
  $(".channels__list").empty();
var userDataRef = firebase.database().ref("departmentList").child(depart).child("topicList").orderByKey();
  userDataRef.on("value",function(snapshot) {
    $(".channels__list").empty();
  snapshot.forEach(function(childSnapshot) {
    var topic = childSnapshot.key;
    listItem = document.createElement("li");
    listItem.setAttribute('class','channels__item');
    var item = document.createElement("button");
    item.setAttribute('class','channels__button');
    item.setAttribute('id', topic);
    item.setAttribute('onclick','dispThread(this.id,"'+depart.toString()+'")');
    item.textContent = topic;
    listItem.appendChild(item);
    topic_list.append(listItem);
    });
  });

    if(permissionLevel == 1){
      var div = $(".channels__heading");
      span = document.createElement("span");
      span.textContent = "Topics";
      button = document.createElement("button");
      button.setAttribute('class','channels__add');
      button.setAttribute('onclick','addTopic("'+depart+'")');
      button.textContent = "+";
      div.append(span);
      div.append(button);
    }
    else{
      var div = $(".channels__heading");
      span = document.createElement("span");
      span.textContent = "Topics";
      div.append(span);
    }

}
     
  function dispThread(id,depart){
    $("#deleteTopic").empty();
     $(".app-layout").css("visibility", "visible");

    $(".topictitle").empty();
    var div = $(".topictitle");
   para = document.createElement("p");
   para.textContent = id;
   div.append(para);

    $("#message_box").empty();
    var message_list = $("#message_box");
    var userDataRef = firebase.database().ref("departmentList").child(depart).child("topicList").child(id).child("thread");
    userDataRef.on("value",function(snapshot) {
      $("#message_box").empty();
  snapshot.forEach(function(childSnapshot) {
    // var key = childSnapshot.key;
    // var childData = childSnapshot.val();              
    var message = childSnapshot.val().message;
    var time = childSnapshot.val().postedTime;
    var name = childSnapshot.val().user;
    console.log(message);
    var div = $("#message_box");
    container = document.createElement("div");
    container.setAttribute('class','container');
    name_span = document.createElement("span");
    name_span.setAttribute('class','name-left');
    name_span.textContent = name;
    container.append(name_span);
    time_span = document.createElement("span");
    time_span.setAttribute('class','time-right');
    time_span.textContent = time;
    container.append(time_span);
    br = document.createElement("br");
    container.append(br);
    message1 = document.createElement("p");
    message1.textContent = message;
    container.append(message1);
    div.append(container);

    

    });
  });
  if(permissionLevel == 1){
      var div = $("#deleteTopic");
      button = document.createElement("button");
      button.setAttribute('class','team-menu');
      button.setAttribute('onclick','deleteTopic("'+depart+'","'+id+'")');
      item =document.createElement("p");
      item.setAttribute('class','team-menu__name');
      item.textContent = "Delete Topic";
      button.append(item);
      div.append(button);
      
    }
    $("#submit").attr('onclick','writeUserData("'+depart+'","'+id+'")');
  }

</script>   
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel ="stylesheet" href = "threadDesign.css" type = "text/css">

<body background ="https://i.imgur.com/QVFUaZP.jpg?1" onload = "loaddd()">
<div class="slack">
  <nav class="teams">
    <ul class="teams__list">
    </ul>
  </nav>
<div class="sidebar">
  <button class="team-menu">
    <div class="team-menu__info" id="welcome">
    </div>
    <span class="team-menu__alarm ion-ios-bell-outline"></span>
  </button>

  <div class="channels">
    <h2 class="channels__heading">
    </h2>
      <ul class="channels__list">
      </ul>
      
      <div class="channels" id = "deleteTopic"></div>

        
            
          
              <!-- <div class="channels">                
              <form action="eventcalendar/user_calendar.php">
            <button class="team-menu"><h1 class="team-menu__name">Company Event Calendar</h1>
                </button>
                </form> -->
      <!-- </div> -->
    </div>

  </div>
  
  <div class='app-layout' style = "visibility:hidden;">
  <div class='header box'><span class ="topictitle"></span></div>
    <div class='messages box' id="message_box">
    </div>
    
    <div class='input box'>
      <input type='text' id="inputMessage" placeholder='Write a comment...' style="width:90%;">
      <button type="submit" id="submit" value="submit" style="background:white;height:44px;">Submit</button>
 
    </div>
  </div>

</div>
<script>
  function writeUserData(depart,topic) {
    // var userId = firebase.auth().currentUser.uid;
    var currentTime = new Date().toLocaleString();
    var message = document.getElementById("inputMessage").value;

    firebase.database().ref().child('departmentList').child(depart).child("topicList").child(topic).child("thread").push({
      message: message,
      postedTime: currentTime,
      user: userName,
    });
  }
  

  function addTopic(depart) {
  var title = prompt("Please enter your topic tite:", "topic_title");
  if (title != null || title != "") {
    firebase.database().ref().child('departmentList').child(depart).child("topicList").child(title).set({
      topicName: title,
    });
  }
  dispThread(title,depart);
}

  function deleteTopic(depart,topic){
    firebase.database().ref().child('departmentList').child(depart).child("topicList").child(topic).remove();
    $(".app-layout").css("visibility", "hidden");
  }

  function backHomePage(){
    window.location.href = "http://localhost/xwxexbxexnxg/web/user/index.php";
  }

  </script>

</div>
    </body>
     
    </html>