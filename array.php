<h1>Array</h1>
<?php
// $family =array('father','mother','brother') ;
// echo $family[1];
// $family[1]='love';
// $family[3]='sister';

// echo $family[1];
// echo $family[3];
// echo count($family);

// $family =['father','mother','brother'];

// //Assositive Array
// $family =[
//     'Designer'=>'Nour',
//     'programmer'=>'Mjad',
//     'Gamer'=>'Mjad',  
// ];

// echo $family['Designer'];
?>
<form action="array.php" method="get">
 
<input type="text" name="name">
      <input type="submit">   
</form>
<?php
$name =$_GET['name'];
$score = [
'Norh' => ['Score' =>'90','Grade' =>'A'],
'Naif' => ['Score' =>'40','Grade' =>'C'],
'Anas' => ['Score' =>'20','Grade' =>'F'],
];

echo 'Score: '.$score[$name]['Score'];
echo '<br>';
echo 'Grade: '.$score[$name]['Grade'];
?>