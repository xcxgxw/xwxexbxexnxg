<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="calendar.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">

<div class="calendar-base">

  <div class="year">2018</div>
  <!-- year -->

  <div class="triangle-left"></div>
  <!--triangle -->
  <div class="triangle-right"></div>
  <!--  triangle -->

  <div class="months">
    <span class="month-hover">Jan</span>
    <span class="month-hover">Feb</span> 
    <span class="month-hover">Mar</span> 
    <strong class="month-color">Apr</strong>
    <span class="month-hover">May</span>
    <span class="month-hover">Jun</span>
    <span class="month-hover">July</span> 
    <span class="month-hover">Aug</span> 
    <span class="month-hover">Sep</span> 
    <span class="month-hover">Oct</span> 
    <span class="month-hover">Nov</span> 
    <span class="month-hover">Dec</span>
  </div><!-- months -->
  <hr class="month-line" />

  <div class="days">SUN MON TUE WED THU FRI SAT</div>
  <!-- days -->

  <div class="num-dates">

    <div class="first-week"><span class="grey">25 26 27 28 29 30 31</span></div>
    <!-- first week -->
    <div class="second-week">01 02 03 04 05 06 07</div>
    <!-- week -->
    <div class="third-week">08 09 10 11 12 13 14</div>
    <!-- week -->
    <div class="fourth-week">15 16 17 18 19 20 21</div>
    <!-- week -->
    <div class="fifth-week">22 23 24 25 <strong class="white">26</strong>  27 28 </div>
    <!-- week -->
    <div class="sixth-week">29 30        <span class="grey">01 02 03 04 05</span></div>
    <!-- week -->
  </div>
  <!-- num-dates -->
  <div class="event-indicator"></div>
  <!-- event-indicator -->
  <div class="active-day"></div>
  <!-- active-day -->
  <div class="event-indicator two"></div>
  <!-- event-indicator -->

</div>
<!-- calendar-base -->
<div class="calendar-left">

  <div class="hamburger">
    <div class="burger-line"></div>
    <!-- burger-line -->
    <div class="burger-line"></div>
    <!-- burger-line -->
    <div class="burger-line"></div>
    <!-- burger-line -->
  </div>
  <!-- hamburger -->


  <div class="num-date">26</div>
  <!--num-date -->
  <div class="day">THURSDAY</div>
  <!--day -->
  <div class="current-events">Current Events
    <br/>
    <ul>
      <li>Day 09 Daily CSS Image</li>
    </ul>
    <span class="posts">See post events</span></div>
  <!--current-events -->

  <div class="create-event">Create an Event</div>
  <!-- create-event -->
  <hr class="event-line" />
  <div class="add-event"><span class="add">+</span></div>
  <!-- add-event -->

</div>
<!-- calendar-left -->

</div>
<!-- container -->
    
</body>
</html>