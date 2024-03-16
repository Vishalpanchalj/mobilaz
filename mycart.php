
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <style>
    body{
    background-color:rgba(245, 245, 245, 0.632);
   }
    </style>
</head>

<?php
session_start();
?>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="https://www.moglix.com/assets/img/moglix_logo_red@3x.png" style="width: 100px;"></a>
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABQODxIPDRQSEBIXFRQYHjIhHhwcHj0sLiQySUBMS0dARkVQWnNiUFVtVkVGZIhlbXd7gYKBTmCNl4x9lnN+gXz/2wBDARUXFx4aHjshITt8U0ZTfHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHz/wAARCAA/ADgDASIAAhEBAxEB/8QAGgABAAIDAQAAAAAAAAAAAAAAAAQFAQIDBv/EACoQAAICAQEGBgIDAAAAAAAAAAABAgMEFQUREiFU0RQxVZGSk0FRE3Gh/8QAGAEBAQEBAQAAAAAAAAAAAAAAAAECAwT/xAAhEQEAAgIBAwUAAAAAAAAAAAAAARECYRIDIiMxQUKhov/aAAwDAQACEQMRAD8A9mARcHJnk+J41FfxXyrW79LcFiJmJlKAAQAAAAACnxKLMijPrpulRPxk3xx8/wAFwU+JfZj0Z9lNMr5+MmuCPn+DOW3bp3U1o0nO9Vt9n3Gk53qtvs+41bO9Kt932Nq9qZsrIxlsu2KbSb3vl/hO1282vy10nO9Vt9n3LeKaik3vaXn+zINRFPNlnln6gAKwFVgZFWNVnWXT4ILLmt+7+i1K7Z+MpQzIZFO+Msqckpx5Nctz5mZdcK4zem2tbP6lfF9hrWz+pXxfY7afh9JR9aGn4fSUfWh3L4t/TjrWz+pXxfYnJqSTXk+aI+n4fSUfWiQkkklySLF+7GXD42yACsAAAAAAAAAAA//Z"/ style="width: 40px;">
    <form class="d-flex class ms-5" style="width: 400px;">
        <input class="form-control " type="text" placeholder="Search catagrey ,products and brands"  >
        <input type="image" src="data:image/png;base64,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" style="width: 40px; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
        
        
      </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class=" ">
        
      </ul>
      <ul class="navbar-nav me-5 ms-5" >
        <li class="nav-item dropdown me-5" >
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" ><span id="og"> <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABQODxIPDRQSEBIXFRQYHjIhHhwcHj0sLiQySUBMS0dARkVQWnNiUFVtVkVGZIhlbXd7gYKBTmCNl4x9lnN+gXz/2wBDARUXFx4aHjshITt8U0ZTfHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHz/wAARCABNAEgDASIAAhEBAxEB/8QAGQABAQEBAQEAAAAAAAAAAAAAAAYFAwQC/8QALBAAAQMDBAADCAMAAAAAAAAAAAECAwQFEQYSITETUXEUMkFhgbHB8SORof/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAXEQEBAQEAAAAAAAAAAAAAAAAAMQEC/9oADAMBAAIRAxEAPwCzAAAAAAAAAAAAAAAAAAAHCrqoaKB007trG/2q+SE1NqWtqpvDoIETPupt3PUCsBIt1Dc6KRG10CLnnD2Kxyp8v0UduuMFxg8SBV44c1e2qB6wAAAAAAARmqax01w9nRf44UTj5rzk6aTngiqpmyua2R7URiu49U+x5dRwujvMuepMOaq+mPwadFpRixo6sncrlTO2LGE+q9jmGvrV09O6nihRzXTo/OE7amP0YtirHUdzhVFXZIqMenmim7PpOmcxfZ55WP8Ahvw5PwYNPQysvMVI7CvbKiKrVynHK/4OabF+AAAAAAADMvVpbc4E2qjZme45evRTBhudzsuIKmFXxN4aj0+zixAElJqG4V+YaGn2K7tWZc5Pr8DTsVmdQ7qipVHVL06znanr5m10AAAAAAAAAAAAAAAAAP/Z"  class="ms-2" id="ok">Log in </span></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" id="ou">My profile</a></li>
              <li><a class="dropdown-item" href="#" id="ou">My order</a></li>
              <li><a class="dropdown-item" href="#" id="ou">My RFOQS</a></li>
              <li><a class="dropdown-item" href="#" id="ou">My Bussiness Details</a></li>
            </ul>
          </li>
          </li>
          <li class="nav-item mt-2 ms-4">
            <a class="nav-link" href="javascript:void(0)"> <img src="https://www.moglix.com/assets/img/deliver-location.svg" >Track order</a>
          </li>
          <li class="nav-item mt-2 ms-4" >
            <a class="nav-link " href="arra"><span id="counter" style="color: red; margin-bottom: 30px;" >0</span><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABQODxIPDRQSEBIXFRQYHjIhHhwcHj0sLiQySUBMS0dARkVQWnNiUFVtVkVGZIhlbXd7gYKBTmCNl4x9lnN+gXz/2wBDARUXFx4aHjshITt8U0ZTfHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHz/wAARCAA6ADMDASIAAhEBAxEB/8QAGQABAAMBAQAAAAAAAAAAAAAAAAMFBgEE/8QAKxAAAQQBAwIEBgMAAAAAAAAAAQACAwQSBRFRBjEUIVSSFSKT0dLwQVOx/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/ANliOAmI4C6vLe1Gvp7WGy8tDzsNmkoPTiOAmI4CjrWYrcDZoHZRu7FSoOYjgJiOAuog5iOAi6iAop60FloE8McoHbNoOylRBgr3i9Kty1YrE0cYdu0NeQCD2UHxK962x9V33Wg6vgjMcE24E2+IH8uH7/qzXhp/6ZPYUEvxK962x9V33Wm6X8XLBJYszyyMedmB7ie3c+azdLTbFuyyIRPaCfmcWkBo5W+ghZXhZFGNmMGwCCRERAREQUOtUbz9Sr26kbJxGNgx5AAPPmR+hPE9R+hr+4fko+otLvXbcUlYZxhu22QGJ37+avq7Hx142SOye1oDnclBSG11EO9Kv7h+SuqxldXjNhobMWjNo7Aqk6j0y7enhfWGbGjYtyAxPPmrqpHJFVijldnI1gDnclBMiIgIiICIiAiIgIiIP//Z"  style="height: 30px;">Cart</a>
          </li>
          <script>
            let we=0;
            function inc(){
             we++;
             document.getElementById('counter').textContent=we;
            }
          </script>
      </ul>
      <i style="font-size:24px" class="fa ms-5">&#xf142;</i>
      <script>
        $(document).ready(function(){
          $("i").hover(function(){
            $("#uk").show();
            });
        });
        $(document).ready(function(){
          $("i").cli(function(){
            $("#uk").hide();
            });
        });

        </script>
        
    </div>
    
  </div>
  
</nav>

<a href="index.php"> Home </a>
<div style=display:flex;>
<div class="container">
    <div class="row">
        <div class="col-lg-8 text-center mt-3">
            <h1 style="color:red;">My cart</h1>

    </div>
    <div class="col-lg-8">
         <table class="table text-center">
   
      <tr>
        
    

      </tr>
   
        <tbody class="text-center">
        <?php
        $total=0;
        $gst=40;
        $ship=29;
        $t=0;

        
        if(isset($_SESSION['cart']))
        {
        foreach($_SESSION['cart'] as $key => $value)
        {
            $total=$total+$value['price'];
            $t=$total+$gst+$ship;
            echo"<tr>
           <td>1<td> 
            <td>$value[item_name]<td>
            <td>$value[price]<td>
            <td><input  class='text-center'type='number' min='1' max='10' value='$value[quantity]'><td>
           <td>
           <form action='cart.php' method='post'>
           <button class='btn btn-sm btn-outline-danger' name='r'>remove</button><td>
           <input type='hidden' name='item_name' value='$value[item_name]'>
            </tr>
            ";


        }
    }
        ?>
    
       </tbody>
      </table>
      
  
      </div>
      <div class=col-lg-4>
        
      <h4 style class="ms-3 text-center" style> payment sumery<h4>
        <h5> price <span style="float:right;"><?php echo $total ?></h5><span>
        <h5> gst <span style="float:right;"><?php echo $gst?></h5><span>
        <h5> shiping <span style="float:right;"><?php echo $ship ?></h5><span>
        <h5> Total <span style="float:right;"><?php echo $t ?></h5><span>

</div>
     </div>
     
        
     
</body>
</html>
