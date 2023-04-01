<?php
/* include the class file (global - within application) */
include_once 'classes/class.user.php';
include_once 'classes/class.product.php';
include_once 'classes/class.receive.php';
include_once 'classes/class.release.php';
include_once 'classes/class.inventory.php';
include 'config/config.php';


$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
$user = new User();
$product = new Product();
if(!$user->get_session()){
	header("location: login.php");
}
$user_id = $user->get_user_id($_SESSION['user_email']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>HU7K APPAREL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
</head>
<body>
<h5> HU7K APPAREL </h5>
    <div id="header">
      
      <header> 
      <ul class ="navbar">

                   <li ><a href="index.php">Home</a><li>
                   <li><a href="index.php?page=products">Products</a> </li>
                   <li><a href="index.php?page=inventory">Inventory</a></li>
                   <li><a href="index.php?page=settings">Settings</a> </li>
                   <li class="LOG"><a href="logout.php">Log Out</a> </li>
                   <span class="move-right"><?php echo $user->get_user_lastname($user_id).', '.$user->get_user_firstname($user_id);?>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</span> 
</ul>
      </header>

               
  <div id="content">
    <?php
      switch($page){
                case 'settings':
                    require_once 'setting-module/index.php';
                break; 
                case 'products':
                    require_once 'product-module/index.php';
                    break;
                break; 
                case 'inventory':
                    require_once 'inventory-module/index.php';
                break; 
                default:
                    require_once 'index.php';
                break; 
            }
    ?>
  </div>
</div>

</body>
</html>


