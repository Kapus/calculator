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
        case '/': $result = $num2 != 0 ? $num1 / $num2 : 'Division med noll'; break;
        default: $result = 'Ogiltig operation';
    }
}
?>
<h1 class="display-4 mb-3">Funktioner</h1>
<p class="lead">Den här sidan listar funktionerna för din miniräknare.</p>
<hr>
<div style="height:200px;"></div>
<h2 class="mb-3">Enkel miniräknare</h2>
<div class="container mt-5 mb-5" style="max-width:900px;">
<form method="post" class="row g-3 justify-content-center">
    <div class="col-auto">
        <input type="number" step="any" name="num1" class="form-control" placeholder="Första talet" required value="<?php if(isset($_POST['num1'])) echo htmlspecialchars($_POST['num1']); ?>">
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
        <input type="number" step="any" name="num2" class="form-control" placeholder="Andra talet" required value="<?php if(isset($_POST['num2'])) echo htmlspecialchars($_POST['num2']); ?>">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Beräkna</button>
    </div>
</form>
<?php if($result !== ''): ?>
<div class="alert alert-info mt-3">Resultat: <strong><?php echo $result; ?></strong></div>
<?php endif; ?>
</div>
