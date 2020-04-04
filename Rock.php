<?php
$sum1=0;
$sum2=0;
$sum3=0;
$sum4=0;
for($i=1;$i<=50;$i++) {
echo "<h3>ROUND : ".$i."</h3>";
$paper='paper';
$rock='rock';
$scissors='scissors';
$choice=array('paper','rock','scissors');
$rand1= rand(0,2);
$player1=$choice[$rand1]; {
echo '<b>Player1 : </b>'.$player1.'<br/>';
}
$rand2= rand(0,2);
$player2=$choice[$rand2]; {
echo '<b>Player2 : </b>'.$player2.'</br>';
}
$rand3= rand(0,2);
$player3=$choice[$rand3]; {
echo '<b>Player3 : </b>'.$player3.'</br>';
}
$rand4= rand(0,2);
$player4=$choice[$rand4]; {
echo '<b>Player4 : </b>'.$player4.'</br></br>';
	}
$p1=0;
if(($player1 == $paper) && ($player2 == $rock)) {
	$p1 += 1;
	}
if(($player1==$paper)&& ($player3==$rock)) {
	$p1+=1;
	}
if(($player1==$paper)&&($player4==$rock)) {
	$p1+=1;
	}
if(($player1 == $rock) && ($player2 == $scissors)) {
	$p1 += 1;
	}
if(($player1==$rock)&& ($player3==$scissors)) {
	$p1+=1;
	}
if(($player1==$rock)&&($player4==$scissors)) {
	$p1+=1;
	}
if(($player1 == $scissors) && ($player2 == $paper)) {
	$p1 += 1;
	}
if(($player1==$scissors)&& ($player3==$paper)) {
	$p1+=1;
	}
if(($player1==$scissors)&&($player4==$paper)) {
	$p1+=1;
	}
	echo  "Score of player1 : ".$p1."<br/>";
	$sum1=$sum1+$p1;


$p2=0;
if(($player2 == $paper) && ($player1== $rock)) {
	$p2 += 1;
	}
if(($player2==$paper)&& ($player3==$rock)) {
	$p2+=1;
	}
if(($player2==$paper)&&($player4==$rock)) {
	$p2+=1;
	}
if(($player2 == $rock) &&($player1==$scissors)) {
	$p2 += 1;
	}
if(($player2==$rock)&&($player3==$scissors)) {
	$p2+=1;
	}
if(($player2==$rock)&&($player4==$scissors)) {
	$p2+=1;
	}
if(($player2 == $scissors) && ($player1== $paper)) {
	$p2 += 1;
	}
if(($player2==$scissors)&& ($player3==$paper)) {
	$p2+=1;
	}
if(($player2==$scissors)&&($player4==$paper)) {
	$p2+=1;
	}

	echo  "Score of player2 : ".$p2."<br/>";
	$sum2=$sum2+$p2;

$p3=0;
if(($player3 == $paper) && ($player2 == $rock)) {
	$p3 += 1;
	}
if(($player3==$paper)&& ($player1==$rock)) {
	$p3+=1;
	}
if(($player3==$paper)&&($player4==$rock)) {
	$p3+=1;
	}
if(($player3==$rock)&&($player1==$scissors)) {
	$p3+=1;
	}
if(($player3 == $rock) &&($player2==$scissors)) {
	$p3 += 1;
	}
if(($player3==$rock)&&($player4==$scissors)) {
	$p3+=1;
	}
if(($player3 == $scissors) && ($player1== $paper)) {
	$p3 += 1;
	}
if(($player3==$scissors)&& ($player2==$paper)) {
	$p3+=1;
	}
if(($player3==$scissors)&&($player4==$paper)) {
	$p3+=1;
	}
	echo  "Score of player3 : ".$p3."<br/>";
	$sum3=$sum3+$p3;
$p4=0;
if(($player4 == $paper) && ($player2 == $rock)) {
	$p4 += 1;
	}
if(($player4==$paper)&& ($player1==$rock)) {
	$p4+=1;
	}
if(($player4==$paper)&&($player3==$rock)) {
	$p4+=1;
	}
if(($player4==$rock)&&($player1==$scissors)) {
	$p4+=1;
	}
if(($player4 == $rock) &&($player2==$scissors)) {
	$p4 += 1;
	}
if(($player4==$rock)&&($player3==$scissors)) {
	$p4+=1;
	}
if(($player4==$scissors)&&($player1==$paper)) {
	$p4+=1;
	}
if(($player4 == $scissors) &&($player2==$paper)) {
	$p4 += 1;
	}
if(($player4==$scissors)&&($player3==$paper)) {
	$p4+=1;
	}
	echo  "Score of player4 : ".$p4."<br/>";
	$sum4=$sum4+$p4;
}
echo "<h3>Final score of players</h3>";
echo "Total Score of player1: ".$sum1."<br/>";
echo "Total Score of player2: ".$sum2."<br/>";
echo "Total Score of player3: ".$sum3."<br/>";
echo "Total Score of player4: ".$sum4."<br/>";


?>