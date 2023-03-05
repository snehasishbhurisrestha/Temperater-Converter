<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperater Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    $res = array(0);
    if(isset($_POST['submit'])) {
        $valnum = $_POST['value'];
        $option = $_POST['select'];
        if($option == "far"){
            $res[0] = (($valnum - 32) * 5/9)."&nbsp;&nbsp;&#176C";
        }
        else if($option == "cel"){
            $res[0] = (($valnum * 9/5) + 32)."&nbsp;&nbsp;&#176F";
        }
        else if($option == "Kelvin"){
            $res[0] = ($valnum - 273.15)."&nbsp;&nbsp;&#176C";
        }
    }
?>
<body>
    <div class="center">
        <h1>Temperature Converter</h1>
        <form action="index.php" method="post">
            <div class="flex">
                <div class="text_fild">
                    <input type="number" name="value" required value = "<?php echo $valnum; ?>">
                    <label for="">Degrees</label>
                </div>
                <div class="text_fild_45">
                    <label for="">Types</label>
                    <select name="select">
                        <option value="far">Fahrenheit</option>
                        <option value="cel">Celsius</option>
                        <option value="Kelvin">Kelvin</option>
                    </select>
                </div>
            </div>
            <div class="text_fild">
                <p class="result" id="font">
                    <?php
                        echo $res[0];
                    ?>
                </p>
                <label for="">Result</label>
            </div>
            <input type="submit" name="submit" value="Convert">
        </form>
    </div>

</body>
</html>