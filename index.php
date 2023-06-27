<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" id="form" action="opublikuj.php">
        Nazwa quizu:<input type="text" name="nazwaquizu"><br>
        Pytanie 1:<input type="text" name="pytanie1"><br>
        Odpowiedz 1:<input type="text" name="p1o1"><input type="checkbox" name="p1o1h1"><br>
        Odpowiedz 2:<input type="text" name="p1o2"><input type="checkbox" name="p1o2h2"><br>
        Odpowiedz 3:<input type="text" name="p1o3"><input type="checkbox" name="p1o3h3"><br>
        Odpowiedz 4:<input type="text" name="p1o4"><input type="checkbox" name="p1o4h4"><br>
        <textarea id="ilepytan" name="ilepytan" style="display:none;">1</textarea>
    </form>
    <button type="button" onclick="dodajwartosc()">Dodaj pytanie</button>
    <input type="submit" form="form" value="Opublikuj"><br>



    <script>
        var ilepytan=1;
        function dodajwartosc(){
            ilepytan++;
            document.getElementById("ilepytan").value=ilepytan;
            const inputpytanie=document.createElement("input");
            const labelek=document.createElement("label");
            labelek.innerHTML="Pytanie "+ilepytan+":";
            const ber=document.createElement("br");
            inputpytanie.setAttribute("type","text");
            inputpytanie.setAttribute("name", "pytanie"+ilepytan);
            document.getElementById("form").appendChild(labelek);
            document.getElementById("form").appendChild(inputpytanie);
            document.getElementById("form").appendChild(ber);
            var i=0;
            while(i<4){
                const labelek=document.createElement("label");
                labelek.innerHTML="Odpowiedz "+(i+1)+":";
                const inputodpowiedz=document.createElement("input");
                const ber=document.createElement("br");
                inputodpowiedz.setAttribute("type", "text");
                inputodpowiedz.setAttribute("name","p"+ilepytan+"o"+(i+1));
                const checkboxodpowiedz=document.createElement("input");
                checkboxodpowiedz.setAttribute("type","checkbox");
                checkboxodpowiedz.setAttribute("name","p"+ilepytan+"o"+(i+1)+"h"+(i+1));
                document.getElementById("form").appendChild(labelek);
                document.getElementById("form").appendChild(inputodpowiedz);
                document.getElementById("form").appendChild(checkboxodpowiedz);
                document.getElementById("form").appendChild(ber);
                i++;
            }
        }

    </script>
</body>
</html>