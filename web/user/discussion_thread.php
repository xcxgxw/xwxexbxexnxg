<!DOCTYPE HTML>
        <html>
        
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
  
function disp(){  

  var message_list = $(".message-list");
  var userDataRef = firebase.database().ref("forum").orderByKey();
  userDataRef.once("value").then(function(snapshot) {
  snapshot.forEach(function(childSnapshot) {
    // var key = childSnapshot.key;
    // var childData = childSnapshot.val();              
    var message = childSnapshot.val().message;
    var time = childSnapshot.val().postedTime;
    var listItem = document.createElement("li");
    listItem.textContent = message;
    message_list.append(listItem);
    console.log(message_list);
    });
  });
}

function iconn(int_par){
  
  var iconn_list = $(".teams__list");
  var userDataRef = firebase.database().ref("departmentHierarchy").child(int_par).orderByKey();
  userDataRef.once("value").then(function(snapshot) {
  snapshot.forEach(function(childSnapshot) {
    var key = childSnapshot.key;

    var listItem = document.createElement("li");
    listItem.setAttribute('class','teams_item');
    var item = document.createElement("button");
    item.setAttribute('class','teams__button');
    item.setAttribute('id', key);
    item.setAttribute('onclick','getTextValue(this.id)');
    item.textContent = key;
    listItem.appendChild(item);
    
    iconn_list.append(listItem);   
    
    });
  });

}

function getTextValue(objButton){

  var text = objButton;
  dispTopic(text);

}

function dispTopic(button_key){

  $(".team-menu__info").empty();
  var userDataRef = firebase.database().ref("departmentList").child(button_key).orderByKey();
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
var userDataRef = firebase.database().ref("departmentList").child(button_key).child("topicList").orderByKey();
  userDataRef.once("value").then(function(snapshot) {
  snapshot.forEach(function(childSnapshot) {
    var topic = childSnapshot.key;
    listItem = document.createElement("li");
    listItem.setAttribute('class','channels__item');
    var item = document.createElement("button");
    item.setAttribute('class','channels__button');
    item.setAttribute('id', topic);
    item.setAttribute('onclick','getDepartmentValue(this.id)');
    item.textContent = topic;
    listItem.appendChild(item);
    topic_list.append(listItem);  
    });
  });

}
     
</script>   
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel ="stylesheet" href = "threadDesign.css" type = "text/css">

<body background ="https://i.imgur.com/QVFUaZP.jpg?1" onload = "iconn(3)">
<div class="slack">
  <nav class="teams">
    <ul class="teams__list">
      <!-- <li class="teams__item">
        <button class="teams__button" onclick="loadHR()">
          HR
        </button>
      </li> -->
    </ul>
  </nav>
<div class="sidebar">
  <button class="team-menu">
    <div class="team-menu__info">
      <!-- <h1 class="team-menu__name"></h1> -->
    </div>
    <span class="team-menu__alarm ion-ios-bell-outline"></span>
  </button>

  <div class="channels">
    <h2 class="channels__heading">
      <span>Topics <span class="channels__number" id ="ch_no."></span>
      </span>
      <button class="ion-ios-plus-outline channels__add"></button>
    </h2>
      <ul class="channels__list">
      </ul>

      <div class="channels">       
              <button onclick="onload()" class="team-menu" ><h1 class="team-menu__name">Start A New Topic</h1>
                </button>              
              <form action="calendar.php">
            <button class="team-menu"><h1 class="team-menu__name">Company Event Calendar</h1>
                </button>
                </form>
      </div>
    </div>


    
  </div>
  <div class='app-layout'>
  <div class='header box'><p id="title"></p></div>
    <div class='messages box'>
      <!-- <ul class='message-list'>
        <li><p id="thread1"></p> </li>
        <li><p id="thread2"></p></li>
        <li><p id="thread3"></p></li>
        <li><p id="thread4"></p></li>
        <li><p id="thread5"></p></li>
        <li><p id="thread6"></p></li>
        <li><p id="thread7"></p></li>
        <li><p id="thread8"></p></li>
        <li><p id="thread9"></p></li>
        <li><p id="thread10"></p></li>
      </ul> -->
<div id="thread">
</div>
      <ul class='message-list'>
      </ul>
    </div>
    <div class='input box'>
      <input type='text' id="inputMessage" placeholder='Write a comment...' style="width:90%;">
      <button type="submit" id="submit" value="submit" style="background:white;height:44px;">Submit</button>
      <script>
      function writeUserData() {
        // var userId = firebase.auth().currentUser.uid;
        var currentTime = new Date().toLocaleString();
        var message = document.getElementById("inputMessage").value;
  
        firebase.database().ref().child('forum').push({
          message: message,
          postedTime: currentTime,
        });
      }
      
      $("#submit").click(function(){
        $(".message-list").empty();
        writeUserData();
        disp();
});

      // $(".teams__button").click(function(){
      //         var text = $(".teams_button").textContent;
      //         console.log("123");
      // });
      </script>
    </div>
</div>
</div>
<script>
  var database = firebase.database();
  database.ref().child('departmentList').child('PAN').child('topicList').child('topic_A').child('thread').on('value', function(snapshot){
  if(snapshot.exists()){
  var content = '';
  snapshot.forEach(function(data){
                    var val = data.val();
                    console.log(val.message);
                    content += '<p>' + val.message + '</p>';
                });
                $('#thread').html(content);
            }
        });
</script>
    </body>
     
    </html>