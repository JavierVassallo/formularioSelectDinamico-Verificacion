<?php
$email=$_GET['email'];
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
    <div class="card align-items-center justify-content-center" style="margin-top:5%;">
    <div class="card-header">
    <p>Recuerde que esto solo lo desuscribira de el envio de la factura digital, no del servicio.</p>
    <p>A continuacion seleccione la cantidad de unidades a la que va a desuscribir de la factura digital, haciendo esto dejara de recibir por e-mail la informacion de esas facturas</p>
    </div>
    <div class="card-body">
    <div class="row align-items-center justify-content-center">
    <div class="col-md-12 center">
      <form id="formulario" action="confirmacion.php" method="post" onsubmit="return validar();">
                    <input type="email" name="email" value=<?php echo $email ?> style="display:none;"></input>
                    <div class="form-group">
                        <select class="form-control"   id="cantidad" onChange="cambiar(this.value);"> <!-- Si no le paso name aca al select no pasa por el post -->
                        <option value="" slected="selected">Seleccione la Cantidad</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        </select>
                    </div>
                    <div class="form-group" id="newUF">
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
                </div>
                <div>
                </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="check.js"></script>
        <script type="text/javascript">
        function cambiar(id) { 
            var check=[];
            var formulario = document.getElementById("newUF");
            formulario.innerHTML="";
            for (i=1;i<=id;i++){
                /*var divCol=document.createElement("div")
                divCol.className="col";
                divCol.id="idCol";
                divRows.appendChild(divCol);
                var divCols = document.getElementById("idCol");
                var inputCompletarUf=document.createElement("input");
                inputCompletarUf.id="uf1";
                inputCompletarUf.name="uf1";
                inputCompletarUf.type="text";
                inputCompletarUf.placeholder="UF";
                inputCompletarUf.className="form-control";
                divCols.appendChild(inputCompletarUf);*/
                var uf="<div class='row'><div class='col'><input type='number'  name='uf"+i+"' id='uf"+i+"' class='form-control'  placeholder='UF'></div>";
                var confirmaUF="<div class='col' style='display:inline-block;'><input type='number'  class='form-control'  id='confirme_uf"+i+"' placeholder='Confirme UF' onkeyup='check"+i+"();'><span id='message"+i+"'></span></div></div>";
                var inputs=uf+confirmaUF
                formulario.innerHTML+=inputs;
 
            }  
            
        }
        function validar(){
    var cantidad=document.getElementById('cantidad').value;
    //var idUf="";
    //var idConfirmeUf="";
    var verificado=true;
    for (i=1; i<=cantidad; i++){
                idUf="uf"+i;
                idConfirmeUf="confirme_uf"+i;
                if (document.getElementById(idUf).value !=document.getElementById(idConfirmeUf).value){
                    verificado=false;
                }
                
            }
            return verificado;
        }
        </script>
    </body>
</html>