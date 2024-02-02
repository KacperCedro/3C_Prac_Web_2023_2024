<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8"/>
        <title>
            formularz
        </title>
    </head>
    <body>
        <form action="http://localhost/02.02.2024/zadanie3/formResult.php" method="post">
            <p>Formularz:</p>
            Imie:<br/>
            <input type="text" name="imie" value="" size="50">
            <br>
            Nazwisko:
            <br>
            <input type="text" name="nazwisko" value="" size="50">
            <br>
            <input type="submit" value="Wyślij" name="wyslij" > &nbsp; &nbsp;
            <input type="reset" value="Wyczyść" name="zeruj" >
        </form>
    </body>

</html>