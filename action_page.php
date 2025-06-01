<html>
<head>
<style>
body {background-image:url("yes_back.jpg");}
h1   {
color: red;
text-align: center;
font-size: 80px
}
.smile{
position:absolute;
top:280px;
left:120px;
mix-blend-mode: multiply;
}
</style>
</head>
<body>

<h1><b>You have a date with me on <?php $date = date_create($_GET["date_date"]);
echo date_format($date, "F j, l"); ?><br>
Don't forget or you might not be alive to regret it</b></h1>
<img src="sweet_smile.jpg" class="smile" alt="smile" width="300" height="400">

</body>
</html>