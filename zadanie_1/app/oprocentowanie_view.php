<!doctype html>

<html >
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px;">
<div class="col-md-2 themed-grid-col">
<form action="<?php echo _APP_URL; ?>/app/oprocentowanie.php" method="post" >



        <label for="money" class="form-label">Kwota kredytu</label>
        <input type="number" class="form-control" id="cost" name="cost" value="<?php isset($form['cost']) ? print($form['cost']):''; ?>"


        <label for="month" class="form-label">Czas w latach</label>
        <input type="number"  class="form-control" id="years" name="years" value="<?php isset($form['years']) ? print($form['years']):''; ?>">



        <label for="interest" class="form-label">Oprocentowanie</label>
        <input type="number"  class="form-control" id="interest" name="interest" value="<?php isset($form['interest']) ? print($form['interest']):''; ?>">


        <button type="submit"   class="btn btn-primary">Submit</button>

</form>
</div>
<?php
if (isset($messages)) {
if (count ( $messages ) > 0) {
echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
    foreach ( $messages as $key => $msg ) {
    echo '<li>'.$msg.'</li>';
    }
    echo '</ol>';
}
}
?>

<?php if (isset($oblicz)){ ?>
    <div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
        <?php echo 'Wynik: '.round($oblicz); ?>
    </div>
<?php } ?>
</div>
</body>
</html>