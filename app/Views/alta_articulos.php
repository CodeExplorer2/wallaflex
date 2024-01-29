<style>
     body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            
        }

        h1 {
            font-family: serif;
            text-align: center;
            padding: 10px;
            margin: 0;
        }

        .formulario {
        
            max-width: 400px;
            margin: 20px auto;
            background-color: #7C5D7A;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .formulario h1 {
        
            text-align: center;
            color: #333;
            font-family: serif;
          
        }

        .formulario label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        .formulario input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        .formulario input[type="file"] {
            margin-top: 4px;
        }

        .formulario input[type="submit"] {
            background-color: #3A75C5;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .formulario input[type="submit"]:hover {
            background-color: #45a049;
        }

        .formulario input:focus {
            border-color: #4caf50;
        }

        .mensaje {
            text-align: center;
            color: #4caf50;
        }

        .volver {
            display: block;
            text-align: center;
            margin-top: 16px;
            text-decoration: none;
            color: #333;
        }

        .volver:hover {
            text-decoration: underline;
        }
</style>
<?php helper('form') ?>
        <h1><center>Articulos Tienda</center> </h1>
        <br>
      <div class="col-5 mx-auto">     
        <?php
            if(isset($guardado))
            {
         
         ?>
         <center>
                <p>Los Datos Se Han Guradado Correctamente</p>
                <p>Verifica Tu Articulo en Mostrar Tienda</p>              
                <a href="<?php echo base_url('articulos/alta_articulo') ?>">Volver</a>
        </center>        
        <?php
        } else{
    
        ?>
                <div class="formulario">
    
                <form action="<?php  echo base_url('articulos/guardar')?>" method="post" enctype="multipart/form-data">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" />
                    
                    
                    <label for="nombre">Marca:</label>
                    <input type="text" name="marca" />
                    
                    <label for="nombre">Precio:</label>
                    <input type="text" name="precio" />
                    
                    <label for="nombre">Talla:</label>
                    <input type="text" name="talla" />
                    
                    <label for="imagen">Imagen</label>
                    <input type="file" value="imagen" name="imagen" require/><br>
                    <img id="preview" src="#" style="display:none"><br>
                    <input type="submit" value="Enviar" >
                    
                </form>
          </div>
           <?php 
        }
      ?>
      <script>

        document.getElementById('imagen').addEventListener('change', function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
                document.getElementById('preview').style.display = "block";
            };
            reader.readAsDataURL(e.target.files[0]);
        });

      </script>  
</body>
</html>