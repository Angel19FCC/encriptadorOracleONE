<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap">
    <title>Document</title>
    <style>
        body {
            position: relative;
            width: 1200px;
            height: 600px;
            background: #F3F5FC;
        }
        .mi-label{
            position: absolute;
            width: 577px;
            height: 48px;
            left: 240px;
            top: 110px;
            background-color: transparent;

            font-family: 'Ubuntu', sans-serif;
            
            font-weight: 400;
            font-size: 32px;
            line-height: 150%;

            color: #0A3871;
        }
        .mi-input{
            position: absolute;
            width: 577px;
            height: 48px;
            left: 240px;
            top: 168px;
            background-color: transparent;

            font-family: 'Ubuntu', sans-serif;
            
            font-weight: 400;
            font-size: 28px;
            line-height: 150%;

            color: #0A3871;
        }
        .logo{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 0px;
            gap: 40px;

            position: absolute;
            width: 120px;
            height: 48px;
            left: 40px;
            top: 40px;


        }

        .muñeco{
            position: absolute;
            width: 336px;
            height: 304px;
            left: 900px;
            top: 320px;
        }

        .botones{
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 0px;
            gap: 24px;

            position: absolute;
            width: 680px;
            height: 67px;
            left: 200px;
            top: 500px;
        }
        .boton1{
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 24px;
            gap: 8px;

            width: 328px;
            height: 67px;



            background: #0A3871;
            border-radius: 24px;


            flex: none;
            order: 0;
            flex-grow: 0;
        }
        .boton2{
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 24px;
            gap: 8px;

            width: 328px;
            height: 67px;



            background: #D8DFE8;


            border: 1px solid #0A3871;
            border-radius: 24px;



            flex: none;
            order: 1;
            flex-grow: 0;
        }
        .input{
            position: relative;
            display: inline-block;
        }
        .respuesta{
            position: absolute;
            width: 400px;
            height: 644px;
            left: 900px;
            top: 40px;

            background-color: transparent;

            box-shadow: 0px 24px 32px -8px rgba(7, 43, 97, 0.7);
            
            border-radius: 32px;
            font-family: 'Ubuntu', sans-serif;
            font-size: 30px;
            text-align: center;
            color: #0A3871;
            
            
        }
        .r{
            position: absolute;
            width: 400px;
            height: 344px;
            left: 900px;
            top: 40px;
            background-color:#052051;
            
        }
    


    </style>
    <script>
        function leerLetraPorLetra() {
            var input = document.getElementById("txt");
            var textarea = document.getElementById("respuesta");
            var texto = input.value;
      
            var letras = "";
            for (var i = 0; i < texto.length; i++) {
                if(texto.charAt(i) == 'e'){
                    letras += 'enter';
                }else if(texto.charAt(i) == 'i'){
                    letras += 'imes';
                }else if(texto.charAt(i) == 'a'){
                    letras += 'ai';
                }else if(texto.charAt(i) == 'o'){
                    letras += 'ober';
                }else if(texto.charAt(i) == 'u'){
                    letras += 'ufat';
                }else{
                    letras += texto.charAt(i);
                }
            
        }
      
            textarea.value = letras;
        }
  </script>
    <script>
        function desencriptar(){
            var input = document.getElementById("txt");
            var textarea = document.getElementById("respuesta");
            var texto = input.value;

            var desencriptado = texto.replace(/enter/gi, "e");

            texto= desencriptado.replace(/imes/gi, "i");

            desencriptado = texto.replace(/ai/gi, "a");

            texto= desencriptado.replace(/ober/gi, "o");

            desencriptado = texto.replace(/ufat/gi, "u");

            textarea.value = desencriptado;
        }
    </script>
</head>
<body>
    <img src="Logo.png" class="logo " alt="Descripción de la imagen">
    <div class="input">
        
        <input type="text" id="txt" name="txt" class="mi-input" >
        <label for="txt" class="mi-label">ingrese texto que deseas encriptar</label>
    </div>
   
    <textarea class="respuesta"  id="respuesta"></textarea>

 
    <img src="Muñeco.png" class="muñeco " alt="Descripción de la imagen">
    <div class="botones" >
        <button class="boton1" onclick="leerLetraPorLetra()">Encriptar</button>
        <button class="boton2" onclick="desencriptar()">Desencriptar</button>

    </div>
    <script>
        
    </script>
    
</body>
</html>