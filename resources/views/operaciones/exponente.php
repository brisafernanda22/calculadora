<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
    body{
        background-color: #84b6f4;
    }
</style>
<body>

    <script>

        document.write("<h1> Tabla de Exponente </h1>")
        document.write("<center>")
        document.write('<div class="container">');
        document.write('<div class="row">');
        document.write('<div class="col-md-3" >');
        document.write('<div class="table-responsive">');
        document.write('<table class="table table-bordered">');
            a = prompt('Ingresa un valor');
            for(var i = 1; i<11; i++){
                expo =  Math.pow(a, i);
                document.write('<tr class="table-success">');
                document.write('<td>' + a + "</td>");
                document.write("<td> ^ </td>");
                document.write('<td>' + i + "</td>");
                document.write("<td> = </td>");
                document.write('<td>' + expo + "</td>");
                document.write('</tr>');
            }
            document.write("</div>");
            document.write("</div>");
            document.write("</div>");
            document.write("</div>");
        document.write("</center>")
        
    </script>
    <a href='menu' class="btn btn-warning" >Regresar</a><br><br>
    <a href='salir' class="btn btn-danger">Salir</a><br><br>
</body>
</html>