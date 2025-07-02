<?php   
$nome = $_POST["Nome"];    
$dt_nascimento = $_POST["dt_nascimento"]; 
$genero = $_POST["genero"]; 
echo"$nome";     echo"<br>";  
echo"$dt_nascimento";   
echo"<br>";   
echo"$genero";   
echo"<br>";      
$idade = 2025 - $dt_nascimento;  
if($idade > 18){     
  echo "maior de idade";    
  echo"<br>";  
}else {     
  echo"menor idade";    
  echo"<br>";  
}    
if($genero == "masculino" ){    
  echo "grupo a";  
}else {     
  echo"grupo b";   
} 
?>
