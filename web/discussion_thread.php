<!DOCTYPE HTML>
        <html>
            
        <title>CCP</title>
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" type="text/css" href="design.css">
                <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
            </head>

            <body>

           <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Company Collaboration Platform</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            </ul>
            </nav>
    
        <legend>Discussion Threads</legend>
        <style>
table, th, td {
    border: 1px solid black;
}
</style>
        <table>
  <tr>
    <th>Topic List</th>
  </tr>
  <tr>
    <td>
    <button onclick="showthreadsftb()">Fuck The Boss</td></button>
  </tr>
  <tr>
    <td>
    <button onclick="showthreadspdm()">Play Dota Mou?</td></button>
  </tr>
</table>

<p id="demo"></p>

<script>
function showthreadsftb() {
  document.getElementById("demo").innerHTML = "Fuck you boss o0o";
}


function showthreadspdm() {
  document.getElementById("demo").innerHTML = "Long time no play dota liao ar";
}
</script>
    </body>

    </html>