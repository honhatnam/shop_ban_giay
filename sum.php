<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <style>
            .mainForm{
                margin: 100px;
            }
        </style>
    </head>
    <body>
        <?php
        
     

/* Cách 1*/

        // $num1 =' ';
        // $num2 =' ';
        // $total = ' ';
        // $num1 = $_POST['num1'];
        // $num2 = $_POST['num2'];
        // if(isset($_POST['submit'])){       
        //     if($num1 != '' && $num2 !=''){
        //        if(is_numeric($num1) && is_numeric($num2)){
        //                 $total = $num1 + $num2;
        //             }else{
        //                 echo 'Giá trị nhập phải là số';
        //             }
        //         }else{
        //             echo 'Vui lòng nhập giá trị vào ô';
        //         }
  // }


  /* Cách 2*/
        $num1 =' ';
        $num2 =' ';
        $total = ' ';

        $pattern = '/^[0-9]*$/';
  
        if(isset($_POST['submit'])){  
            $num1 = trim($_POST['num1']);
            $num2 = trim($_POST['num2']);
            if($num1 != '' && $num2 !=''){
                        if(preg_match($pattern,$num1) && preg_match($pattern,$num2)) {
                            $total = $num1 + $num2;
                           
                        }else{
                            echo "Giá trị nhập vào phải là số";
                        }
            }else{
                echo "Vui lòng nhập giá trị";
            }
          }
        ?>

        <form action="#" class="mainForm" method="post">
            <label>Nhập số thứ 1</label><br>
            <input type="text" id="fname" name="num1" value="<?php echo $num1 ?>" ><br>
            <label >Nhập số thứ 2</label><br>
            <input type="text" id="lname" name="num2"   value="<?php echo $num2 ?>"><br><br>
            <label >Kết quả</label><br>
            <input type="text" id="lname" name="total" value="<?php echo $total ?>" ><br>
            <input type="submit" value="Submit"name="submit">
        </form> 
    </body>
<html>