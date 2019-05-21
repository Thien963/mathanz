<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$weight = $height = '';
if (isset($_GET["height"]) && isset($_GET["weight"])) {

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    $weight = $_GET["weight"];
    $height = $_GET["height"];

    $bmi = $weight/($height*$height);

    echo "Chỉ sô BMI là : " . $bmi;

}
if ($bmi < 18.5){
    echo "<br>Bạn gầy";
}elseif($bmi >= 18.5 && $bmi <= 24.9){
    echo "<br>Bạn bình thường";
}elseif ($bmi > 25.0 && $bmi <= 29.9){
    echo "<br>Bạn hơi béo";
}elseif ($bmi > 30.0 && $bmi <= 34.9){
    echo "<br>Bạn béo phì cấp độ 1";
}elseif ($bmi > 35.0 && $bmi <= 39.9){
    echo "<br>Bạn béo phì cấp độ 2";
}elseif ($bmi > 40.0){
    echo "<br>Bạn béo phì cấp độ 3";
}else{
    echo "<br> Không phân loại";
}
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Tính chỉ số BMI</h1>

            <form name="bmi" action="" method="get">
                <div class="form-group">
                    <label >Chiều cao ( cm )</label>
                    <input type="text" class="form-control" name="height" value="<?php echo $height ?>">
                </div>
                <div class="form-group">
                    <label >Cân nặng ( kg ) </label>
                    <input type="text" class="form-control" name="weight" value="<?php echo $weight ?>">
                </div>
                <button type="submit" name="calc" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>




</body>
</html>