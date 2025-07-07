<?php
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
    $op = isset($_POST['operation']) ? $_POST['operation'] : '+';
    switch ($op) {
        case '+': $result = $num1 + $num2; break;
        case '-': $result = $num1 - $num2; break;
        case '*': $result = $num1 * $num2; break;
        case '/': $result = $num2 != 0 ? $num1 / $num2 : 'Division by zero'; break;
        default: $result = 'Invalid operation';
    }
}
?>
<h1 class="display-4 mb-3">Features</h1>
<p class="lead">This page will list the features of your calculator.</p>
<hr>
<div style="height:200px;"></div>
<h2 class="mb-3">Simple Calculator</h2>
<div class="mt-4"></div>
<form method="post" class="row g-3 justify-content-center">
    <div class="col-auto">
        <input type="number" step="any" name="num1" class="form-control" placeholder="First number" required value="<?php if(isset($_POST['num1'])) echo htmlspecialchars($_POST['num1']); ?>">
    </div>
    <div class="col-auto">
        <select name="operation" class="form-select">
            <option value="+" <?php if(isset($_POST['operation']) && $_POST['operation']=='+') echo 'selected'; ?>>+</option>
            <option value="-" <?php if(isset($_POST['operation']) && $_POST['operation']=='-') echo 'selected'; ?>>-</option>
            <option value="*" <?php if(isset($_POST['operation']) && $_POST['operation']=='*') echo 'selected'; ?>>×</option>
            <option value="/" <?php if(isset($_POST['operation']) && $_POST['operation']=='/') echo 'selected'; ?>>÷</option>
        </select>
    </div>
    <div class="col-auto">
        <input type="number" step="any" name="num2" class="form-control" placeholder="Second number" required value="<?php if(isset($_POST['num2'])) echo htmlspecialchars($_POST['num2']); ?>">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Calculate</button>
    </div>
</form>
<?php if($result !== ''): ?>
<div class="alert alert-info mt-3">Result: <strong><?php echo $result; ?></strong></div>
<?php endif; ?>
