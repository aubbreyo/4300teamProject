<!DOCTYPE html>
<html lang="en">
    <head>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- meta tag -->
        <meta charset="utf-8">

        <!-- style sheets -->
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- tab details -->
        <link rel="icon" type="image/png" href="img/cinema.png">
        <title> Netflix Suggestions </title>

    </head>
    <body>


      <ul class = "header">
        <li><a href = "#movies"> Movies </a></li>
        <li><a href = "#tvshows"> TV Shows </a></li>
        <li style = "float: right"><a href = "#profile"> Profile </a></li>
      </ul>

      <ul class = "genres">
        <button onclick='load("action")' type = "button"> Action/Adventure </button>
        <button onclick='load("animation")' type = "button"> Animation </button>
        <button onclick='load("comedy")' type = "button"> Comedy </button>
        <button onclick='load("crime")' type = "button"> Crime/Mystery </button>
        <button onclick='load("documentary")' type = "button"> Documentary </button>
        <button onclick='load("drama")' type = "button"> Drama </button>
        <button onclick='load("horror")' type = "button"> Horror </button>
        <button onclick='load("romance")' type = "button"> Romance </button>
        <button onclick='load("scifi")' type = "button"> Sci-Fi </button>
        <button onclick='load("thriller")' type = "button"> Thriller </button>
      </ul>

      <script>
        function load(genre){
          alert("Selected: " + genre);
          $.post("getMovies.php", function(data){
            $('#resultRow').remove();
	           $.each(JSON.parse(data), function(i, obj){
               $('#tableResults').append("<t id='resultRow'r><td>" + obj.title + "</td><td>" + obj.votes + "</td></tr>");
             });
           });



        }
      </script>

      <div class = "list">
        <h1> Recommendations </h1>
        <table id="tableResults">
            <tr id='headers'>
              <th style = "width: 200px"> Title </th>
              <th style = "width: 50px;"> Votes </th>
            </tr>

            <tr id="resultRow">
              <td> Stranger Things </td>
              <td> 13 </td>
            </tr>
        </table>
      </div>




    </body>
</html>
