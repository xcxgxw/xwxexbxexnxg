<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
    body{
        background:grey;
    }
    .container{
        max-width:800px;
        margin:auto;
        font-family:sans-serif;
    }
    .month{
        text-align:center;
        background:purple;
        font-size:2.5em;
        letter-spacing:1px;
        color:white;
        padding:25px;
        border:1px solid skyblue;
    }
    table, th,td{
        width:100%;
        table-layout:fixed;
        text-align:center;
        font-size:17px;
        border-collapse:collapse;
        border:1px solid skyblue;
    }
    tr,th,td{
        padding:15px;
    }
    th{
        background:red;
        color:white;
    }
    td{
        background:green;
    }
    td:hover{
        background:orange;
    }
    </style>
</head>
<body>
<div class="container">
 <div class="month">
 <strong> October </strong>
  <br>
  <strong>2018</strong>
  </div>
  <table>
  <tr>
    <th> SUN </th>
    <th> MON </th>
    <th> TUE </th>
    <th> WED </th>
    <th> THUR </th>
    <th> FRI</th>
    <th> SAT </th>
  </tr>

  <tr>
    <td></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
  </tr>

  <tr>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
    <td>13</td>
  </tr>

  <tr>
    <td>14</td>
    <td>15</td>
    <td>16</td>
    <td>17</td>
    <td>18</td>
    <td>19</td>
    <td>20</td>
  </tr>

  <tr>
    <td>21</td>
    <td>22</td>
    <td>23</td>
    <td>24</td>
    <td>25</td>
    <td>26</td>
    <td>27</td>
  </tr>

  <tr>
    <td>28</td>
    <td>29</td>
    <td>30</td>
    <td>31</td>   
    <td></td>
    <td></td>
    <td></td>
  </tr>
   
  </table>
</div>
    
</body>
</html>