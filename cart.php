<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['addto']))

  {
    if(isset($_SESSION['cart']))
    {
        $myitems=array_column($_SESSION['cart'],'item_name');
        if(in_array($_POST['item_name'],$myitems))
        {
            echo"<script>
            alert('item are added');
            window.location.href='har.php';
            </script>";
        }
        else{
        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
        echo"<script>
        alert('item are added');
        window.location.href='har.php';
        </script>";
        }
    }
    else{
        $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
        print_r($_SESSION['cart']);
        
        echo"<script>
        alert('item  added');
        window.location.href='har.php';
        </script>";
    }
  }
  if(isset($_POST['r']))
  {
    foreach($_SESSION['cart'] as $key=>$value)
    {
        if($value['item_name']==$_POST['item_name'])
        {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>
            alert('item are removed');
            window.location.href='mycart.php';
            </script>";
        }
    }
  }
}
?>
</body>
</html>