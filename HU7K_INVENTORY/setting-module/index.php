<?php
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
?>
<div id="second-submenu">
    <a href="index.php?page=settings&subpage=users">Users</a> 
   
</div>
<div id="content">
    <?php
      switch($subpage){
                case 'users':
                    require_once 'users-module/index.php';
                break; 
                case 'products':
                    require_once 'product-module/index.php';
                break; 
                case 'module_xxx':
                    require_once 'module-folder/';
                break; 
                default:
                    require_once 'index.php';
                break; 
            }
    ?>
  </div>
