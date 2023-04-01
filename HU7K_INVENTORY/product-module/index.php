<?php
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
?>
<div id="third-submenu"> 
    <a href="index.php?page=products&subpage=products">List of Products</a> | 
    <a href="index.php?page=products&subpage=products&action=create">New Product</a> | 
    <a href="index.php?page=products&subpage=products&action=types">Product Types</a> 
</div>
<div id="subcontent">
    <?php
      switch($action){
        case 'create':
                    require_once 'create-product.php';
                break; 
                case 'modify':
                    require_once 'modify-product.php';
                break; 
                case 'profile':   
                    require_once 'view-product.php';
                break;
                case 'types':
                    require_once 'list-product-types.php';
                break;
                case 'upload':
                    require_once 'imageupload.php';
                break;
                default:
                    require_once 'main.php';
                break; 
            }
    ?>
  </div>