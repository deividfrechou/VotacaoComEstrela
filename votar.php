<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Votação</title>
</head>
<script>
function cache() {
imagens = new Image();
imagens.src='estrelaPreta.png';
imagens.src='estrelaCor.png';
}
function vota(id) {
if(id==1) {
document.getElementById('nota').innerHTML="<font class='ajax'>Ruím pacas...</font>";
}
if(id==2) {
document.getElementById('nota').innerHTML="<font class='ajax'>Regular</font>";
}
if(id==3) {
document.getElementById('nota').innerHTML="<font class='ajax'>Bom</font>";
}
if(id==4) {
document.getElementById('nota').innerHTML="<font class='ajax'>Muito bom</font>";
}
if(id==5) {
document.getElementById('nota').innerHTML="<font class='ajax'>Muito Ótimo</font>";
}
for(i = 0; i < id; i++) {
document.getElementById(i+1).src="estrelaCor.png";
}
}

function retira(id) {
for(i = 5; i > id; i--) {
document.getElementById(i).src="estrelaPreta.png";
}
}
</script>
<body onLoad="cache()">

<table cellspacing=2 cellpading=2>
<tr>
<td width="16" onmouseover="vota('1')" onmouseout="retira('1')"><a href='voto.php?cod=1'><img id="1" src="estrelaCor.png" border="0"></a></td>
<td width="16" onmouseover="vota('2')" onmouseout="retira('2')"><a href='voto.php?cod=2'><img id="2" src="estrelaCor.png" border="0"></a></td>
<td width="16" onmouseover="vota('3')" onmouseout="retira('3')"><a href='voto.php?cod=3'><img id="3" src="estrelaCor.png" border="0"></a></td>
<td width="16" onmouseover="vota('4')" onmouseout="retira('4')"><a href='voto.php?cod=4'><img id="4" src="estrelaCor.png" border="0"></a></td>
<td width="24" onmouseover="vota('5')" onmouseout="retira('5')"><a href='voto.php?cod=5'><img id="5" src="estrelaCor.png" border="0"></a></td>
<td id="nota" width="65"></td>
</tr>
</table>
</body>
</html>