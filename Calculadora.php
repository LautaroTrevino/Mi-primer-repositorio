<?php
  function calculator($num1, $num2, $operator) {
    switch ($operator) {
      case "sum":
        return $num1 + $num2;
        break;
      case "sub":
        return $num1 - $num2;
        break;
      case "mul":
        return $num1 * $num2;
        break;
      case "div":
        if ($num2 == 0) {
          return "NO SE PUEDE DIVIVIR POR 0";
        } else {
          return $num1 / $num2;
        }
        break;
      default:
        return "OPERADOR INVALIDO";
        break;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
</head>
<body>
  <h1>Calculadora</h1>
  <form action="" method="get">
    <input type="text" name="num1" placeholder=""><br><br>
    <input type="text" name="num2" placeholder=""><br><br>
    <select name="operator">
      <option value="sum">SUMA (+)</option>
      <option value="sub">RESTA (-)</option>
      <option value="mul">MULTIPLICACION (*)</option>
      <option value="div">DIVISION (/)</option>
    </select><br><br>
    <input type="submit" value="Calcular">
  </form>
  <?php
    if ($_POST) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operator = $_POST['operator'];
      echo "<p>Resultado: " . calculator($num1, $num2, $operator) . "</p>";
    }
  ?>
</body>
</html>