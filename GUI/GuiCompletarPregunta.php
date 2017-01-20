<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" /> 
         <link href="../css/modal.css" rel="stylesheet" type="text/css"/>
          <link href="../css/items.css" rel="stylesheet" type="text/css"/>
          <script type="text/javascript" src="../js/Funciones.js"></script>
    </head>
    <body>
        
        <?php
       
        ?>

        <div id="ventanaModalPregunta" class="modal">
                    <!-- Modal Content -->
                    <div class="modal-content animate">
                        <span onclick="document.getElementById('ventanaModalPregunta').style.display='none'" class="close" title="Close Modal">&times;</span>
        
        
            
        <input type="button" onclick="ventanaCrearPregunta();" id=""  value="Crear pregunta" />
        <input type="button" onclick="ventanaModalRespuesta();" id=""  value=" + " />
        
         <input type="button" onclick="guardarPregunta();" id=""  value="Guardar pregunta" />
            
         <div id="PreguntaCompletar"> 
                </div>
            <div id="opcionesRespuesta"> 
                </div>
            </div>
        
        </div>
           <center>
               <input type="button" onclick="ventanaModalPregunta();"   value="Crear pregunta" />
               <input type="button" onclick="prueba();"   value="valores" />
     
             
                <div id="ventanaCrearPregunta" class="modal">
                    <!-- Modal Content -->
                    <div class="modal-content animate">
                        <span onclick="document.getElementById('ventanaCrearPregunta').style.display='none'" class="close" title="Close Modal">&times;</span>
                
               
                   <label>Pregunta: </label> <textarea   id="pregunta" rows="4" cols="40"  ></textarea>
                   <input type="button" onclick="AgregarCampoVacio()" id=""  value=" espacio en blanco " />
                   <input type="button" onclick="crearPregunta()" id=""  value="Crear pregunta" />
               
               </div>
                </div>

              <div id="ventanaModalRespuesta" class="modal">
                    <!-- Modal Content -->
                    <div class="modal-content animate">
                        <span onclick="document.getElementById('ventanaModalRespuesta').style.display='none'" class="close" title="Close Modal">&times;</span>
                           
                          <div title="Respuetas"> 
                             <label>Nueva opción: </label>    <input type="text"   value="" id="opcion" />
                             <input type="button" onclick="AgregarRespuestas()" id=""  value="Agregar opción" />
                         
                         </div>
                     
                    </div>
                </div>


               </center>
               <div  id="examen"> 

           <section class="section-preguntas">
              <div class="opt-selec-unica">
                   <label>¿Quien es el pokemon amarillo?</label><br> 
                     <input type="radio" name="option" value="option">Option 1<br> 
                    <input type="radio" name="option" value="option">Option 2<br> 
                  <input type="radio" name="option" value="option">Option 3<br> 
              </div>
             
          </section>


               </div>

           
    </body>
</html>
