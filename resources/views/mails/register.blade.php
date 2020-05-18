<!DOCTYPE html>
<html lang="en">
<head>
 <title>Document</title>
 <style>
 body {
 font-family: Arial, Helvetica, sans-serif;
 }
 </style>
</head>
<body>
<img src="{{ asset('assets/img/logomail.jpg')}}">
<h1>U heeft zich ingeschreven voor {{$courseName}}</h1>
<div><b>Beste </b>{{$studentName}}</div>
<p>Dank voor het vertrouwen. Wij kijken uit naar de opstart van uw course.</p>

@if ($studentCount<8)
    <p>Uw course heeft helaas minder dan 8 inschrijvingen en kan nog niet opstarten.
    Wij houden u op de hoogte van zodra wij de start van de course kunnen bevestigen.</p>
@endif

<div><br><br><p>Wij contacteren u ASAP,<br>mvg SyntraTECH</p>
<a style="color:#3498db" href="http://localhost:8000/courses">SyntraTech</a>
</div>
</body>
</html>