<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="/aesthetic.css">
        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
        <script>
            $("document").ready(function(){
                $("#display").click(function(){
                    $("#panel").slideDown();
                });
            });
        </script>
        <title>The Metric System</title>
    </head>
    <body>
        <h1>The Metric System</h1>
        <p>Have you ever asked why there are 5280 feet in a mile? Well, there is an answer, but it is still inconvenient to do this. I believe that the US should officially switch to the metric system.</p>
        <button class="btn btn-primary" id="display">Display links</button>
    </body>
    <div id="panel">
        <p> The metric system is</p>
        <br>
        <button class="btn btn-primary" onclick="window.location.href = '/easier.php'">Easier to use</button>
    </div>
</html>
