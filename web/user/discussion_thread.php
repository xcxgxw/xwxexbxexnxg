<!DOCTYPE HTML>
        <html>
        
<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-database.js"></script>
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

<script>

var database = firebase.database();

function writeUserData(userId, name, email, imageUrl) {
  firebase.database().ref().set({
    username: name,
    email: email,
    profile_picture : imageUrl
  });
}
writeUserData("o0o","Ghee Wei","gw@gmail.com","123");
</script>

<script>
  function comment1(){
    document.getElementById("title").innerHTML = "Expensive Canteen Food";
  }

  function comment2(){
    document.getElementById("title").innerHTML = "Low Salary";
  }
           
  function addtopic(){
    var topic = prompt("Please enter your topic title");
    if (topic != null) {
      document.getElementById("span3").innerHTML = topic
      document.getElementById("title").innerHTML = topic
      document.getElementById("thread1").innerHTML ="";
      document.getElementById("thread2").innerHTML ="";
      document.getElementById("thread3").innerHTML ="";
      document.getElementById("thread4").innerHTML ="";
    }
    document.getElementById("li1").style.visibility = "visible";
    document.getElementById("ch_no.").innerHTML ="(3)";
  }
     
  function loadHR(){
    document.getElementById("dept_name").innerHTML = "Human Resource Department"; 
    document.getElementById("ch_no.").innerHTML ="(5)";
    document.getElementById("li1").style.visibility = "visible";
    document.getElementById("li2").style.visibility = "visible";
    document.getElementById("li3").style.visibility = "visible";

    var sp1 = document.createElement("span");
    // give it an id attribute called 'newSpan'
    sp1.id = "span1";
    // create some content for the new element.
    var sp1_content = document.createTextNode("Expensive Canteen Food");
    // apply that content to the new element
    sp1.appendChild(sp1_content);
    // build a reference to the existing node to be replaced
    var sp2 = document.getElementById("span1");
    var parentDiv = sp2.parentNode;
    // replace existing node sp2 with the new span element sp1
    parentDiv.replaceChild(sp1, sp2);

    var sp3 = document.createElement("span");
    sp3.id = "span2";
    var sp3_content = document.createTextNode("Low Salary");
    sp3.appendChild(sp3_content);
    var sp4 = document.getElementById("span2");
    var parentDiv = sp4.parentNode;
    parentDiv.replaceChild(sp3, sp4);
  }
     
     function loadMG(){

       document.getElementById("dept_name").innerHTML = "Management";
       document.getElementById("ch_no.").innerHTML ="(2)";
      
        var sp1 = document.createElement("span");
        sp1.id = "span1";
        var sp1_content = document.createTextNode("Leadership");
        sp1.appendChild(sp1_content);
        var sp2 = document.getElementById("span1");
        var parentDiv = sp2.parentNode;
        parentDiv.replaceChild(sp1, sp2);

        var sp3 = document.createElement("span");
        sp3.id = "span2";
        var sp3_content = document.createTextNode("Managing People");
        sp3.appendChild(sp3_content);
        var sp4 = document.getElementById("span2");
        var parentDiv = sp4.parentNode;
        parentDiv.replaceChild(sp3, sp4);

      document.getElementById("li1").style.visibility = "hidden";
      document.getElementById("li2").style.visibility = "hidden";
      document.getElementById("li3").style.visibility = "hidden";
      
    }

</script>   
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel ="stylesheet" href = "threadDesign.css" type = "text/css">

<body background ="https://i.imgur.com/QVFUaZP.jpg?1">
<div class="slack">
  <nav class="teams">
    <ul class="teams__list">
      <li class="teams__item">
        <button class="teams__button" onclick="loadHR()">
          HR
        </button>
      </li>
      <li class="teams__item">
        <button class="teams__button" onclick="loadMG()">
          MG
        </button>
      </li>
    </ul>
  </nav>
<div class="sidebar">
  <button class="team-menu">
    <div class="team-menu__info">
      <h1 class="team-menu__name "id ="dept_name" >Human Resource Department</h1>
      <div class="team-menu__status">
        <span class="team-menu__username">Ivory</span>
      </div>
    </div>
    <span class="team-menu__alarm ion-ios-bell-outline"></span>
  </button>
  <div class="threads">
    <span class="ion-chatbubble-working threads__icon"></span> All Threads
  </div>

  <div class="channels">
    <h2 class="channels__heading">
      <span>Topics <span class="channels__number" id ="ch_no."></span>
      </span>
      <button class="ion-ios-plus-outline channels__add"></button>
    </h2>
      <ul class="channels__list" id="HR_topic">
        <li class="channels__item">
          <button onclick="comment1()" class="channels__button"><span id= "span1">Expensive Canteen Food</span></button>
        </li>
        <li class="channels__item">
          <button onclick="comment2()" class="channels__button"><span id = "span2">Low Salary</span></button>
        </li>
        <li class="channels__item" id="li1">
          <button class="channels__button"><span id ="span3" >Company Annual Trip</span></button>
        </li>
        <li class="channels__item" id="li2">
          <button class="channels__button"><span  id ="span">Bonding Camp</span></button>
        </li>
        <li class="channels__item" id="li3">
          <button class="channels__button"><span id ="span" >Annual Dinner</span></button>
        </li>
        <li>
        <button onclick="addtopic()" class="team-menu" ><h1 class="team-menu__name">Start A New Topic</h1>
          </button>
          </li>
          <li>
        <form action="calendar.php">
      <button class="team-menu"><h1 class="team-menu__name">Company Event Calendar</h1>
          </button>
          </form>
          </li> 
      </ul>
    </div>


    
  </div>
  <div class='app-layout'>
  <div class='header box'><p id="title"></p></div>
    <div class='messages box'>
      <ul class='message-list'>
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
      </ul>
    </div>
    <div class='input box'>
      <input type='text' id="inputMessage" placeholder='Write a comment...' style="width:90%;">
      <button type="submit" id="submit" value="submit" style="background:white;height:44px;">Submit</button>
      <script>
      function writeUserData() {
      var currentTime = new Date();
      var message = document.getElementById("inputMessage").value;
      var database = firebase.database();
      firebase.database().ref().set({
          message: message,
          data: currentTime
        });
      }
      document.getElementById("submit").addEventListener("click",writeUserData);
      </script>
    </div>
</div>
</div>
        
    </body>
     
    </html>