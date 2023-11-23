<?php
//Get Input Data
$input_age = $_POST['age'];

echo $input_age;
is_numeric($input_age);
$Year = date('Y');
$Month = date('m');
$day = date('d');
//Age Calculation
// $currentdate = date('m/d/Y');
// $age = ($currentdate)-($input_age);
$user_year = ($input_age+$input_age)/2;
$age = $Year - $user_year;
echo $user_year;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>age calculator|| Result</title>
</head>
<body>
    <div class="section-center">
        <h4 class="title">Your Age is:</h4>
        <span><?php echo $age ?> Years Old</span>
    </div>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        body {
            background: #000;
            font-family: monospace;
            position: relative;
        }
        .section-center {
            position: absolute;
            top: 30%;
            left:50%;
            transform: translate(-50%,-50%);
            background: #fff;
            border: 2px solid #8feaee;
            border-radius: 5px;
            padding: 2rem;
            box-shadow: 2px 5px 15px #fff;
        }
    </style>
</body>
</html>