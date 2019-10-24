<!DOCTYPE html>
<html lang="es">

<head>

    <title>Starter Template · Bootstrap</title>

    <!--Template based on URL below-->


</head>

<body>
    <style>
        margin-top:50px;

    </style>
    <img src="imagenes/logo.png" alt="Logo ITSJ" class="rounded-circle" style="heigth: 100px; width:100px; float: left;">
    <div style="padding-left:100px;">

        <h4 style="margin-top:50px;">INSTITUTO TECNOLÓGICO SUPERIOR DE JEREZ<br>OFICINA DE ORIENTACIÓN EDUCATIVA
            <br>PROGRAMA DE TUTORÍAS
            <br><u>FICHA DE SEGUIMIENTO INDIVIDUAL</u></h4>
    </div>
    
    <div>
        <label for="">Nombre del alumno</label>
        <input >
    </div>
     <div >
        <table >
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Problemática identificada</th>
                    <th >Actividad remedial</th>
                    <th >Firma del alumno</th>
                    <th >Nombre del tutor</th>
                    <th >Firma del tutor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input></td>
                    <td><input></td>
                    <td><input></td>
                    <td><input></td>
                    <td><input></td>
                    <td><input></td>
                </tr>
               
                <tr>
                    <td colspan="3">Motivo de la alta
                        <hr>
                        <textarea ></textarea></td>
                    <td colspan="3">Resolución:
                        <div >
                            <input type="radio"  >
                            <label >Favorable</label>
                        </div>
                        <div >
                            <input type="radio">
                            <label >No Favorable</label>
                            <div >More example invalid feedback text</div>
                        </div>
                    </td>


                </tr>
                
            </tbody>
        </table>
        
        
    </div>
    <div>
        <input type="button" value="Imprimir" onclick="location.href='print_pdf.php'">
    </div>
</body>

</html>
