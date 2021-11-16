<?php
session_start(); 
     $product_name = $_POST['PName'];
     $product_price = $_POST['PPrice'];
     $product_total = $_POST['PTotal'];
     
  if(isset($_SESSION['user'])){

     

 if(isset($_POST['addCart']))
 {

            //   $check_product = array_column($_SESSION['cart'],'ProductName');
            //      if(in_array($product_name,$check_product))
            //      {
            //          echo "
            //          <script>
            //          alert('This Product is Already Added');
            //          window.location.href='home.php';
            //          </script>
            //         ";
            //     }
            

            //     else
            //   {

    $_SESSION['cart'][] = array('ProductName'=>$product_name,
                              'ProductPrice'=>$product_price,
                              'ProductTotal'=>$product_total);
                             header("location:viewcart.php");
    }
//}

                               


 
 

//Delete Item
  if(isset($_POST['remove']))
  {
      foreach($_SESSION['cart'] as $key  => $value)
      {
          if($value['ProductName']== $_POST['item'])
          {
              unset($_SESSION['cart'][$key]);
              $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"
           <script>
           alert('This Product is Successfully Deleted');
           window.location.href='viewcart.php';
           </script>
           ";
              //header('location:viewcart.php');
         }
     }
  }

 //Update Product
 if(isset($_POST['update']))
 {
     foreach($_SESSION['cart'] as $key  => $value)
     {
         if($value['ProductName']== $_POST['item'])
         {
            $_SESSION['cart'][$key]= array('ProductName'=>$product_name,
                                           'ProductPrice'=>$product_price,
                                           'ProductTotal'=>$product_total);
                                           echo "
                                           <script>
                                           alert('This Product is Successfully Updated');
                                           window.location.href='viewcart.php';
                                           </script>
                                           ";
                                      //header("location:viewcart.php");
         }
    }
 }
     }
     else{
         header("location:form/login.php");
     }
  
 ?>