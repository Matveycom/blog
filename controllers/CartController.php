<?php
class CartController {
    public function actionAdd($id){
        Cart::addProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }
    public function actionAddAjax($id){
        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex(){
        $categories =array();
        $categories = Category::getCategoriesList();

        $productsInCart = false;

        $productsInCart = Cart::getProducts();
        if($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);
        }
        require_once (ROOT . '/views/cart/index.php');
        return true;
    }
    public function actionDelete($id){
        Cart::deleteProduct($id);
        header("Location: /magaz/cart");

    }

    public function actionCheckout(){

        $categories = array();
        $categories = Category::getCategoriesList();
        $result = false;

        if (isset($_POST['submit'])){
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];


            $errors = false;
            if (!User::checkName($userName))
                $errors[] = 'Неправильное имя';
            if (!User::checkPhone($userPhone))
                $errors[] = 'Неправильный телефон';
            if ($errors == false){


            }
            else{
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductById($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
//                $totalQuantity = Cart::getCountItems();



            }
        }
    else {
        if (isset($_SESSION['products'])){
            $productsInCart = Cart::getProducts();
            $productsIds = array_keys($productsInCart);
//            $products = Product::getProductById($productsIds);
//            $totalPrice = Cart::getTotalPrice($products);
//                $totalQuantity = Cart::getCountItems();
            if (User::isGuest()){
                $userName = '';
                $userPhone = '';
                $userComment = '';

            }
            else{
                $id = $_SESSION['user'];
                $userName = User::getUserById($id)['name'];
                $userPhone = '';
                $userComment = '';
            }


        }
        else{
            header("Location /magaz/");
        }
        }

        require_once (ROOT. '/views/cart/checkout.php');
        return true;
    }
}