<?php
session_start();
if(isset($_SESSION['nazwauzytkownika'])==false){
header("Location: zalogujsie.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
    <title>Stwórz quiz</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="nav-link nav-item">Główna</a>
                    <a href="quizy.php" class="nav-link nav-item">Quizy</a>
                    <a href="stworzquiz.php" class="nav-link nav-item active">Stwórz</a>
                    <a href="konto.php" class="nav-link nav-item">Konto</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="text-center col-12">
                <div class="display-2 text-center mb-3">Stwórz quiz</div>
                <button type="button" class="btn mb-3 btn-info btn-lg" data-toggle="modal" data-target="#myModal">Samouczek</button>
                <form method="POST" id="form" action="opublikuj.php">
                    Nazwa quizu:<input type="text" id="nazwaquizu" name="nazwaquizu"><br>
                    <textarea id="ilepytan" name="ilepytan" style="display:none;">1</textarea>
                </form>
                <div class="mt-3">
                    <button class="btn btn-primary" type="button" onclick="dodajwartosc()">Dodaj pytanie</button>
                    <button class="btn btn-primary" type="button" onclick="opublikuj()">Opublikuj</button><br>
                    <div id="niedobrze" class="d-none">Któreś z pól jest puste lub któreś z pytań nie ma poprawnej odpowiedzi!</div>
                </div>
            </div>
        </div>
    </div>


    
    <div class="modal text-center" tabindex="1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Samouczek</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Na początek dodaj tytuł</p>
                    <img src="samouczek1.png" class="border mb-1" style="width:100%">
                    <p>Następnie napisz pierwsze pytanie i odpowiedzi. Potem zaznacz kwadraciki przy poprawnych odpowiedziach.</p>
                    <img src="samouczek2.png" class="border mb-1" style="width:100%">
                    <p>Możesz dodać tyle pytań ile zechcesz! Na końcu wystarczy kliknąć "opublikuj" i gotowe!</p>
                </div>
            </div>
        </div>
    </div>





    <script>
        var ilepytan=0;
        dodajwartosc();
        function dodajwartosc(){
            ilepytan++;
            const divek = document.createElement("div");
            divek.setAttribute("id", "divek"+ilepytan);
            divek.setAttribute("class","col-12 mt-3 text-center");
            document.getElementById("form").appendChild(divek);
            document.getElementById("ilepytan").value=ilepytan;
            const inputpytanie=document.createElement("input");
            const labelek=document.createElement("label");
            labelek.innerHTML="Pytanie "+ilepytan+":";
            const ber=document.createElement("br");
            inputpytanie.setAttribute("type","text");
            inputpytanie.setAttribute("name", "pytanie"+ilepytan);
            inputpytanie.setAttribute("id", "pytanie"+ilepytan);
            document.getElementById("divek"+ilepytan).appendChild(labelek);
            document.getElementById("divek"+ilepytan).appendChild(inputpytanie);
            document.getElementById("divek"+ilepytan).appendChild(ber);
            var i=0;
            while(i<4){
                const labelek=document.createElement("label");
                labelek.innerHTML="Odpowiedz "+(i+1)+":";
                const inputodpowiedz=document.createElement("input");
                const ber=document.createElement("br");
                inputodpowiedz.setAttribute("type", "text");
                inputodpowiedz.setAttribute("name","p"+ilepytan+"o"+(i+1));
                inputodpowiedz.setAttribute("id","p"+ilepytan+"o"+(i+1));
                const checkboxodpowiedz=document.createElement("input");
                checkboxodpowiedz.setAttribute("type","checkbox");
                checkboxodpowiedz.setAttribute("class","ml-2");
                checkboxodpowiedz.setAttribute("name","p"+ilepytan+"o"+(i+1)+"h"+(i+1));
                checkboxodpowiedz.setAttribute("id","p"+ilepytan+"o"+(i+1)+"h"+(i+1));
                document.getElementById("divek"+ilepytan).appendChild(labelek);
                document.getElementById("divek"+ilepytan).appendChild(inputodpowiedz);
                document.getElementById("divek"+ilepytan).appendChild(checkboxodpowiedz);
                document.getElementById("divek"+ilepytan).appendChild(ber);
                i++;
            }
        }

        function opublikuj(){
            var j=0;
            var k=0;
            var czypuste=true;
            var pytaneczko="ee";
            var checkboxprzytympytaniu=false;
            if(document.getElementById("nazwaquizu").value == "" )
            {
                czypuste=false;
            }
            while(j<ilepytan){
                if(document.getElementById("pytanie"+(j+1)).value == "")
                {
                    czypuste=false;
                }
                k=0;
                checkboxprzytympytaniu=false;
                while(k<4){
                    if(document.getElementById("p"+(j+1)+"o"+(k+1)).value == ""){
                        czypuste=false;
                    }
                    if(document.getElementById("p"+(j+1)+"o"+(k+1)+"h"+(k+1)).checked){
                        checkboxprzytympytaniu=true;
                    }
                    k++;
                }
                if(checkboxprzytympytaniu==false){
                    czypuste=false;
                }
                j++;
            }
            j=0;
            if(czypuste==true)
            {
                document.getElementById("form").submit();
            }
            else{
                document.getElementById("niedobrze").setAttribute("class", "");
            }
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   

</body>
</html>