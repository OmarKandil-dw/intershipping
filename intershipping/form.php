<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <form>
           <style>
              form{
                  display: flex;
                  justify-content:   center;
                  
              }
              input{
                width: 200px;
              }
              .bar{
                width: 200px;
              }
              #submitBtn{
                margin-left: 40px;
                margin-top: 50px;
              }
           </style>
    <?php
            if(isset($_POST["submit"])){

              $poids = "poids";
              $longueur = "longueur" ;
              $largeur = "largeur" ;
              $hauteur = "hauteur";

              echo "($longueur * $largeur * $hauteur )";
            } 
    ?>

           <div class="group">      
            <input type="number" id="poids" name="poids" required>
            <p id="p_poids"></p>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Poids(kg)</</label>
          </div>
          &emsp;&emsp;&emsp;
          <div>
              <img src="box.jpg" style="width:80px;">
          </div>
          &emsp;&emsp;&emsp;
          <div class="group">      
            <input type="number" id="longueur"  name="longueur" required>
            <p id="p_lang"></p>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Longueur (cm)</</label>
          </div>
          &emsp;&emsp;&emsp;
          <div><h2><strong>×</strong></h2></div>
         &emsp;&emsp;&emsp;
          <div class="group">      
            <input type="number" id="largeur" name="largeur" required>
            <p id="p_lar"></p>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Largeur (cm)</label>
          </div>
          &emsp;&emsp;&emsp;
          <div><h2><strong>×</strong></h2></div>
         &emsp;&emsp;&emsp;
          <div class="group">      
            <input type="number" id="hauteur" name="hauteur" required>
            <p id="p_haut"></p>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Hauteur (cm)</label>
          </div>


        </form>
           <button type="submit" id="done" name="submit">Submit</button>
      </div>
      <!-- <div> <button type="submit" id="Done" onkeydown="validation()">Submit</button> -->
        <!-- <button type="submit" id="Done" >Submit</button> -->
      </div>
             
<script>
    var poids = document.getElementById("poids")
    var lang = document.getElementById("longueur")
    var lar = document.getElementById("largeur")
    var haut = document.getElementById("hauteur")
    var errorp=document.getElementById("p_lar");
    var errorL=document.getElementById("p_lang");
    var errorg=document.getElementById("p_poids");
    var errorh=document.getElementById("p_haut");

    const element = document.getElementById('done');
    element.addEventListener('click', onFormSubmit);

    function onFormSubmit(e){
      e.preventDefault();
      if (Number(lar.value) < 0){
          errorp.innerHTML=(' Nombre Positive');
          errorp.style.color='red';
      }
      else{
          errorp.innerHTML=('hhhh');
          errorp.style.color='green';
      }

      if (Number(lang.value) < 0){
          errorL.innerHTML=(' Nombre Positive');
          errorL.style.color='red';
      }
      else{
          errorL.innerHTML=(' oui');
          errorL.style.color='green';
      }
      if (Number(poids.value) < 0){
          errorg.innerHTML=(' Nombre Positive');
          errorg.style.color='red';
      }
      else{
          errorg.innerHTML=(' oui');
          errorg.style.color='green';
      }
      if (Number(haut.value) < 0){
          errorh.innerHTML=(' Nombre Positive');
          errorh.style.color='red';
      }
      else{
          errorh.innerHTML=(' oui');
          errorh.style.color='green';
      }
  }
    </script>
  </body>
</html>