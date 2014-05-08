<html>
<head>
<style type="text/css">
.slideThree {
width: 80px;
height: 26px;
background: #333;
margin: 20px auto;
-webkit-border-radius: 50px;
-moz-border-radius: 50px;
border-radius: 50px;
position: relative;
-webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
-moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
}
.slideThree:after {
content: 'DISLIKE';
font: 12px/26px Arial, sans-serif;
color: #000;
position: absolute;
right: 10px;
z-index: 0;
font-weight: bold;
text-shadow: 1px 1px 0px rgba(255,255,255,.15);
}
.slideThree:before {
content: 'LIKE';
font: 12px/26px Arial, sans-serif;
color: #00bf00;
position: absolute;
left: 10px;
z-index: 0;
font-weight: bold;
}
.slideThree label {
display: block;
width: 34px;
height: 20px;
-webkit-border-radius: 50px;
-moz-border-radius: 50px;
border-radius: 50px;
-webkit-transition: all .4s ease;
-moz-transition: all .4s ease;
-o-transition: all .4s ease;
-ms-transition: all .4s ease;
transition: all .4s ease;
cursor: pointer;
position: absolute;
top: 3px;
left: 3px;
z-index: 1;
-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
background: #fcfff4;
background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
}
.slideThree input[type=checkbox]:checked + label {
left: 43px;}
</style>
</head>
<body>
<form name="songs" action="2.php" method="POST" >
<p><input type="checkbox" name="chckbox[]" value="tum hi ho" id="slideThree" />Tum hi ho</input></p>
<p><input type="checkbox" name="chckbox[]" value="balma" id="slideThree"/>balma</input></p>
<p><input type="checkbox" name="chckbox[]" value="bahara" id="slideThree"/>Bahara re</input></p>
<p><input type="checkbox" name="chckbox[]" value="soniyo" id="slideThree"/>Soniyo</input></p>
<p><input type="checkbox" name="chckbox[]" value="main agar kahoon" id="slideThree"/>Main agar kahoon</input></p>
<p><input type="checkbox" name="chckbox[]" value="abhi mujme kahin" id="slideThree"/>Abhi mujme kahin</input></p>
<p><input type="checkbox" name="chckbox[]" value="kamali" id="slideThree"/>Kamali</input></p>
<p><input type="checkbox" name="chckbox[]" value="beintehan" id="slideThree"/>Aaja nachale</input></p>
<p><input type="checkbox" name="chckbox[]" value="beedi" id="slideThree"/>Beedi</input></p>
<p><input type="checkbox" name="chckbox[]" value="indino" id="slideThree"/>In dino</input></p>
<p><input type="checkbox" name="chckbox[]" value="jaaneman" id="slideThree"/>Jaaneman</input></p>
<p><input type="checkbox" name="chckbox[]" value="dilnashin" id="slideThree"/>Dil nashi</input></p>
<p><input type="checkbox" name="chckbox[]" value="bad" id="slideThree"/>Bad</input></p>
<p><input type="checkbox" name="chckbox[]" value="beat it" id="slideThree"/>Beat it</input></p>
<p><input type="checkbox" name="chckbox[]" value="thriller" id="slideThree"/>Thriller</input></p>
<p> <input type="submit" name="submit" value="submit"/></p>
</form>
</body>
</html>










