<!DOCTYPE html>
<html>
    <head>
        <title>My Site</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form name="myForm" method="post" action="process.php">
            <p>Введите ваши числа:</p>
            <p>Число 1:</p><input type="text" name="number1">
            <p>Число 2:</p><input type="text" name="number2"><br><br>
            <p>Выберите оператор:</p>
            <select name="operator">
                <option value="sum">+</option>
                <option value="subtraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
            </select><br><br>
            <input type="submit" value="Результат">
        </form>
    </body>
</html>