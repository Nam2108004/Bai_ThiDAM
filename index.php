<?php require 'controllers/CategoryController.php';
      require 'controllers/ProductController.php';
      require 'controllers/CustomerController.php';
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        include 'views/home.php';
        break;
    case 'list-category':
        listCategory();
        break;
    
    case 'add-category':
        addCategory();
        break;
    case 'edit-category':
        editCategory();
        break;
    case 'delete-category':
        deleteCategory();
        break;

    case 'add-product':
        addProduct();
        break;

    case 'edit-product':
        editProduct();
        break;

     case 'delete-product':
        deleteProduct();
        break;

    case 'customer':
    include 'views/customer.php';
    break;   
            
    case 'login':
        addCustomer();
    break;
    }

    // case 'logout':
    //     exitCustomer();
    // break;
             

?>