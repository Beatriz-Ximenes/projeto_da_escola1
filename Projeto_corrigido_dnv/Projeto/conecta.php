<?php
$conn = mysqli_connect(SERVIDOR, USER, PASS, DATABASE); 

if (mysqli_connect_errno()): 
printf("Falha na conexão: %s", mysqli_connect_error()); 
exit();  

else: 

printf("<h1>Conectado com BD!</h1>"); 

endif;
?>