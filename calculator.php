<?php
  if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    switch($operator) {
        case "None":
            echo "Please select an operator.";
        break;
        case "Add":
            echo $num1 + $num2;
        break;
        case "Subtract":
            echo $num1 - $num2;
        break;
        case "Multiply":
            echo $num1 * $num2;
        break;
        case "Divide":
            echo $num1 / $num2;
        break;
    }
  }
?>

<html>
  <body>
    <form method="post" action="calculator.php">
      <input type="text" name="num1" placeholder="Number 1">
      <input type="text" name="num2" placeholder="Number 2">
      <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br>
      <input type="submit" name="submit" value="Calculate">
    </form>
  </body>
</html>