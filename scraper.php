<table class="playertable"id="table_id"> 
<thead></thead> 
<tbody> 
<tr bgcolor="#dbe9f2"> 
    <th>Team</th> 
    <th>Photo</th> 
    <th>Name</th> 
    <th>Price</th> 
    <th>Points</th> 
    <th>Next Match</th>   
    <th>Dream Team</th>  
  </tr> 
<?php 
ini_set('max_execution_time', 300);  
$id = 200; 
for ($id=1; $id<=20; $id++) 
  { 
?> 

<tr bgcolor="#fafafa"> 
<?php   
$endhash ='/'; 
$url = 'http://fantasy.premierleague.com/web/api/elements/'; 
$urlid = $url . $id . $endhash;  
$results = file_get_contents($urlid);  
$playerstats = json_decode($results, true); 
$price = $playerstats['now_cost']; 
$playerprice = number_format($price/10, 1, '.', ''); 
$points = $playerstats['total_points']; 
$webname = $playerstats['web_name']; 
echo "<td><img src=".$playerstats['shirt_mobile_image_url'].">"." ".$playerstats['team_name']."</td>"; 
echo "<td><img src=".$playerstats['photo_mobile_url']." width='45' height='45'>"."</td>"; 
echo "<td>".$playerstats['first_name']." ".$playerstats['web_name']."</td>"; 
echo "<td>".$playerprice."</td>"; 
echo "<td>".$playerstats['total_points']."</td>"; 
echo "<td>".$playerstats['next_fixture']."</td>"; 
echo "<td>".$playerstats['in_dreamteam']."</td>"; 
?> 
</tr> 
<?php 
} 
?> 
</table>

Will it work
