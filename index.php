<!DOCTYPE html>
<html>
<head>
    <title>Registrar Empleado</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>
<body>


        <div class="main-block">
      <div class="center-part">
        <i class="fas fa-envelope"></i>
        <i class="fas fa-at"></i>
        <i class="fas fa-mail-bulk"></i>
      </div>
      <form method="post">
        <h1>Registrar Empleado</h1>
        <div class="info">
        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nombre empleado*</span>
                        <input type="text" name="nombre" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div> 

        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Correo electronico*</span>
                        <input type="text" name="correo" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>  

        <div class="form-check">
            <h4>Genero<span></span></h4>
            <h1></h1>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                Masculino
                </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                Femenino
        </label>

        <div>
            <h1></h1>
        <h4>Areá<span></span></h4>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Direccion</option>
            <option value="1">Ventas</option>
            <option value="2">Comercial</option>
            <option value="3">Tecnología</option>
        </select>
        </div>


        <div class="form-floating">
        <h1></h1>
        <h4>Descripción<span></span></h4>
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea"></label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
               Deseo recibir boletin informativo
            </label>
        </div>



    <div class="form-check">
    <h4>Roles<span></span></h4>
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
             Gerente
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
             Auxiliar administrativo
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
             Profesional proyectos
        </label>
    </div>


    <button name="guardar" type="submit" href="/">Guardar</button>
      </form>
    </div>
    
</body>
</html>