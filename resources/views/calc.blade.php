<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form method="post" action="/calc/result">
    @csrf
    <input type="number" name="x1" id="x1" placeholder="Input First Number">
    <select name="operation" id="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="x2" id="x2" placeholder="Input Second Number">
    <input type="submit" value="Посчитать">
</form>
</body>
</html>
