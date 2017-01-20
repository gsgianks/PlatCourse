<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head> 
    <body>
        <?php
           if (isset($_REQUEST['metodo'])){
             
                 $metodo=$_REQUEST['metodo'];
                
                  
                  if($metodo=="opcionNueva"){
                    
                      opcionNueva(); 
               
                  }
                  
                   if($metodo=="Pregunta"){
                    
                      Pregunta(); 
               
                  }
                    if($metodo=="GuardarPregunta"){
                    
                      GuardarPregunta(); 
               
                  }
           }
           
           function opcionNueva(){
                $opcion=$_REQUEST['opcion'];
               ?>
        <input type="radio" value="<?php echo$opcion ?>" name="group1" /> <label><?php echo$opcion ?> </label> <br> 
        
        <?php
           }
           function Pregunta(){
                $opcion=$_REQUEST['opcion'];
                echo $opcion;  
           }
           
           function GuardarPregunta(){
               
               $opciones=$_REQUEST['opcion'];
               $pregunta=$_REQUEST['pregunta'];

              ?>
              <div class="opt-selec-unica">
               <label><?php  echo$pregunta;?></label><br>

               <?php
               foreach ($opciones as $opcion) {
          
                 ?>
                
                    <input type="radio" name="option" value=""><?php  echo  $opcion ?> <br> 
                
              <?php
               
               
            
}
               
           }

           
        ?>
          </div>
    </body>
</html>
