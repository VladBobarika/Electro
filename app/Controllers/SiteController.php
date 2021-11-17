<?php

    namespace App\Controllers;

    use App\Models\BaseModel;
    use App\Models\Category;
    use App\Models\Product;
    use App\Models\User;
    use mysqli;

    class SiteController {

        function debug($num) {
            echo "<pre>";
            var_dump($num);
            echo "</pre>";
        }

        public function index() {
            Product::selectAll();
            die();

            render('main.php');
        }

        public function notFound() {
            render('404.php');
        }
}