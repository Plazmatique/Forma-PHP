<?php
$array = ["A","B","C","D","E","F"];
foreach($array as $key => $value){
  echo "<div class='choice'>" . $value . "</div>" . "<br>";
}
//random
$arrayRandom = array_rand($array);
echo "<script>let random = '$arrayRandom';</script>";
?>

<script>
  let choices = document.querySelectorAll('.choice');
  console.log(choices);
  for(let i = 0; i < choices.length; i++){
    let choice = choices[i];
    console.log(choice.innerText);
    choice.addEventListener('click', () => {
      if(i == random){
        alert("LETS GOOOOO !");
        location.reload();
      }
      else{
        console.log("kiki");
      }
    })
  }
</script>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
</body>
</html>