<!DOCTYPE HTML>
        <html>
     <link rel ="stylesheet" href = "threadDesign.css" type = "text/css">

      <style>ul.channels_lists{list-style-type: none;}</style>




            <body>
        <div class="slack">
  <nav class="teams">
    <ul class="teams__list">
      <li class="teams__item">
        <button class="teams__button teams__button--active">
          HR
        </button>
      </li>
      <li class="teams__item">
        <button class="teams__button">
          MG
        </button>
      </li>
      <li class="teams__item">
        <button class="teams__button">
          PS
        </button>
      </li>
    </ul>
  </nav>
  <div class="sidebar">
    <button class="team-menu">
      <div class="team-menu__info">
        <h1 class="team-menu__name">Human Resource Department</h1>
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
        <span>Lists <span class="channels__number">(5)</span>
        </span>
        <button class="ion-ios-plus-outline channels__add"></button>
      </h2>
      <ul class="channels__list">
        <li class="channels__item">
          <button onclick="comment1()" class="channels__button"><span>Expensive Canteen Food</span></button>
        </li>
        <li class="channels__item">
          <button onclick="comment2()" class="channels__button"><span>Low Salary</span></button>
        </li>
        <li class="channels__item">
          <button class="channels__button"><span>Company Annual Trip</span></button>
        </li>
        <li class="channels__item">
          <button class="channels__button"><span>Bonding Camp</span></button>
        </li>
        <li class="channels__item">
          <button class="channels__button"><span>Annual Dinner</span></button>
        </li>
        <li><form action="calendar.php">
      <button class="team-menu__name" style ="padding-left: 15px ;padding-top: 10px">
            Company Event Calendar
          </button>
          </form> 
          </li> 
      </ul>
      
    </div>


    
  </div>
  <div class='app-layout'>
  <div class='header box' ><p id="title"></p></div>
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
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <div class='input box'>
      <input type='text' placeholder='Write a comment...'>
    </div>
</div>
</div>

    <script>
        function comment1(){
            document.getElementById("title").innerHTML = "Expensive Canteen Food";
            document.getElementById("thread1").innerHTML ="burgerhong: Yesterday I ate kuay png, it costed my RM 16.90, damn expensive sia";
            document.getElementById("thread2").innerHTML ="senglol: Ya lo, walao how eat wor like this";
            document.getElementById("thread3").innerHTML ="burgerhong: Let's report it to boss ok?";
            document.getElementById("thread4").innerHTML ="senglol: Okok on";
            }

        function comment2(){
            document.getElementById("title").innerHTML = "Low Salary";
            document.getElementById("thread1").innerHTML ="A: Recently i notice after SST, my income is not enough for my outcome";
            document.getElementById("thread2").innerHTML ="B: ya lor";
            document.getElementById("thread3").innerHTML ="C: I think we need to propose this to our boss Mr Beh";
            document.getElementById("thread4").innerHTML ="";
        }
     </script>
        
    </body>

    </html>