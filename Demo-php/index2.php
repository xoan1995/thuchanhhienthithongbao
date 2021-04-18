<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            font-size: 35px;
            margin-top: 0;
            font-weight: 700;
        }
        legend{
            padding: 5px 10px;
        }
        textarea{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit], input[type=reset] {
            width: 100%;
            background-color: rgb(17, 17, 49);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover, input[type=reset]:hover {
                background-color: rgb(145, 18, 18);
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            }
            label{
                float: left;
        }
    </style>
</head>
<body>
    
    <div style="text-align: center;">
        <?php echo "Hello word"?>

        <div style="width:400px; margin: auto; padding: 20px; background-color: pink;" >
            <fieldset>
                <legend><h1>Đăng nhập</h1></legend>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <!--@csrf-->

                   <textarea name="input_array" placeholder="input some words" id="" cols="30" rows="10"></textarea>
                    
                    <input type="submit" value="Submit">
                </form>
                Số lần xuất hiện <input type="text" value="<?php echo $arr_input;?>" disabled="disabled">
                Số lần xuất hiện <input type="text" value="<?php echo $arr_input;?>" disabled="disabled">
            </fieldset>
          
        </div>
    
    </div>

    <?php
    $arr_input= array();
    $arr_only= array();
    $times = array();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $arr_input = $_POST['input_array'];
        if(empty($arr_input)){
            echo "string is empty!";
        }else{
            echo $arr_input;
        }
    }
?>
</body>
</html>