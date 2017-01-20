<!DOCTYPE html>
<html>
<head>
    <title>Plataforma Virtual</title>
    <meta charset="utf-8">
    <!--<link href="css/items.css" rel="stylesheet" type="text/css"/>-->
    <link href="../css/modal.css" rel="stylesheet" type="text/css"/>
    <link href="../css/items.css" rel="stylesheet" type="text/css"/>
    <link href="../css/estilo_general.css" rel="stylesheet" type="text/css"/>
    
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/items.js"></script>
    <script type="text/javascript" src="js/alertify.min.js"></script>
</head>
<body>

    <?php include_once "../_nav.php" ?>
    <div class="main_content">
          <button onclick="modalMarqueX()">Selecci&oacute;n &uacute;nica</button>

          <section class="section-preguntas">
            <h3>Preguntas Evaluacion</h3>
            <button onclick="guardarEvaluacion();">Guardar Evaluacion</button>
             <section id="seleccion_unica">
             <!--       <div class='opt-selec-unica'>
                        <label>¿Pregunta?</label><br>
                        <input type='radio' name='option' value='value'>hola<br>
                        <input type='radio' name='option' value='value'>hola<br>
                        <aside><button onclick="btnRespuesta(this)">Correcta</button></aside>
                    </div> -->
              </section> 
              <section id="seleccion_multiple">
                  
              </section>
          </section>
    </div>
                <div id="marqueX" class="modal">
                    <!-- Modal Content -->
                    <div class="modal-content animate">
                        <span onclick="document.getElementById('marqueX').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <div class="div-modal3">
                            <section class="formulario">                                
                            <h2 class="title-modal">Selecci&oacute;n &Uacute;nica</h2>
                                <form action="controladoras/controladora_evento.php" method="post">
                                <input type="hidden" name="consulta" value="selec_unica">
                                    
                                    <div><label>Pregunta</label><input class="input_redondo_oscuro" type="text" name="pregunta" required></div>
                                    <hr>
                                    <table id="table-options-x" class="form-left">
                                        <tr>
                                            <td><label>Opcion 1</label></td>
                                            <td><input class="input_redondo_oscuro" type="text" name="option" required></td>
                                        </tr>   
                                        <tr>
                                            <td><label>Opcion 2</label></td>
                                            <td><input class="input_redondo_oscuro" type="text" name="option" required></td>
                                        </tr>  
                                        <tr>
                                            <td><label>Opcion 3</label></td>
                                            <td><input class="input_redondo_oscuro" type="text" name="option" required></td>
                                        </tr>
                                        <tr>
                                            <td><label>Opcion 4</label></td>
                                            <td><input class="input_redondo_oscuro" type="text" name="option" required></td>
                                        </tr>

                                    </table>
                                    <button class="button_fill verde_agua" type="submit">Guardar</button>
                                </form>
                                <aside class="aside-modal">
                                    <button class="btn-aside-modal" onclick="addOptionX()">+</button>
                                    <span class=""></span>
                                </aside>                                
                            </section>

                        </div>

                    </div>
                </div>
                </div>

    <?php include_once "../_footer.php" ?>
</body>
</html>
