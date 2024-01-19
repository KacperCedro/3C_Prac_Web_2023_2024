<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8"/>
        <title>
            formularz dla kandydatów
        </title>
    </head>
    <body>
        <form action="http://localhost/19.01.2024/formResult.php" method="post">
            <p>Formularz dla kandydatów do szkół ponadpodstawowych:</p>
            Imie:<br/>
            <input type="text" name="imie" value="" size="50">
            <br>
            Nazwisko:
            <br>
            <input type="text" name="nazwisko" value="" size="50">
            <br>
            Adres zamieszkania:
            <br>
            <input type="text" name="adres" value="" size="50">
            <br>
            Pesel:
            <br>
            <input type="text" name="pesel" value="" size="50">
            <br>
            ocena z języka Polskiego:
            <br>
            <input type="number" name="ocenaJP" value="" max="6">
            <br>
            ocena z języka Angielskiego:
            <br>
            <input type="number" name="ocenaJA" value="" max="6">
            <br>
            ocena z Matematyki:
            <br>
            <input type="number" name="ocenaMat" value="" max="6">
            <br>
            Ocena z przedmiotu dodatkowego:
            <br>
            <select name="dodatkowaOcena" multiple>
                <option value="chemia">chemia</option>
                <option value="biologia">biologia </option>
                <option value="fizyka">fizyka</option>
                <option value="geografia">geografia</option>
                <option value="historia">historia</option>
            </select>
            <br>
            <input type="number" name="ocenaD" value="" max="6">
            <p><b>Wyniki z egzaminów:</b></p>
            <input type="number" name="egzJP" value="" max="100">
            <br>
            ocena z języka Angielskiego:
            <br>
            <input type="number" name="egzJA" value="" max="100">
            <br>
            ocena z języka Polskiego:
            <br>
            <input type="number" name="egzJP" value="" max="100">
            <br>
            ocena z Matematyki:
            <br>
            <input type="number" name="egzaMat" value="" max="100">
            <br>
            Ocena z przedmiotu dodatkowego:
            <br>
            <select name="dodatkowyEgz" multiple>
                <option value="chemia">chemia</option>
                <option value="biologia">biologia </option>
                <option value="fizyka">fizyka</option>
                <option value="geografia">geografia</option>
                <option value="historia">historia</option>
            </select>
            <br>
            <input type="number" name="egzD" value="" max="100">
            <br>
            <p><input type="checkbox" name="wyr" > świadectwo z wyróżnieniem</p>
            Dodatkowe aktywności:
            <br>
            <input type="radio" name="akt" value="olimpiada" > olimpiada tematyczna 
            <br>
            <input type="radio" name="akt" value="wolontariat" > wolontariat 
            <br>
            <input type="radio" name="akt" value="konkurs" > konkursy sportowe 
            <br>
            <input type="radio" name="akt" value="nic" > nic 
            <br>
            <br>
            <input type="submit" value="Wyślij" name="wyslij" > &nbsp; &nbsp;
            <input type="reset" value="Wyczyść" name="zeruj" >
        </form>
    </body>

</html>

