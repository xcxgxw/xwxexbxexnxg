<!DOCTYPE HTML>
        <html>


     <script>
     
     
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
     
     <link rel ="stylesheet" href = "threadDesign.css" type = "text/css">

            <body>
        <div class="slack">
  <nav class="teams">
    <ul class="teams__list">
      <li class="teams__item">
<<<<<<< HEAD
        <button class="teams__button ">
=======
        <button class="teams__button teams__button--active" onclick="loadHR()">
>>>>>>> cfeac5c927b026185031fcb0344fc2a3c4a881db
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
          <span class="team-menu__username">burgerhong</span>
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
          <button class="channels__button"><span id ="span" >Company Annual Trip</span></button>
        </li>
        <li class="channels__item" id="li2">
          <button class="channels__button"><span  id ="span">Bonding Camp</span></button>
        </li>
        <li class="channels__item" id="li3">
          <button class="channels__button"><span id ="span" >Annual Dinner</span></button>
        </li>
<<<<<<< HEAD
        <li>
        <button class="team-menu" ><h1 class="team-menu__name">Start A New Topic</h1>
          </button>
          </li>
          <li>
        <form action="calendar.php">
      <button class="team-menu"><h1 class="team-menu__name">Company Event Calendar</h1>
          </button>
          </form>
          </li> 
      </ul>
      
=======
      </ul>






      <form action="calendar.php">
      <button class="team-menu__name" style ="padding-left: 15px ;padding-top: 10px">
            Calendar
          </button>
          </form>
>>>>>>> cfeac5c927b026185031fcb0344fc2a3c4a881db
    </div>


    
  </div>
  <div class='app-layout'>
  <div class='header box'>TITLE</div>
    <div class='messages box'>
      <ul class='message-list'>
<<<<<<< HEAD
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
=======
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
>>>>>>> cfeac5c927b026185031fcb0344fc2a3c4a881db
      </ul>
    </div>
    <div class='input box'>
      <input type='text' placeholder='Write a comment...'>
    </div>
</div>
</div>
        
    </body>
     
    </html>