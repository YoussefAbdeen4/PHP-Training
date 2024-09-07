<?php
    class Products{
        private $title,$image,$price;

        /**
         * @param $title
         * @param $image
         * @param $price
         */
        public function __construct($title, $image, $price)
        {
            $this->title = $title;
            $this->image = $image;
            $this->price = $price;
        }

        /**
         * @return mixed
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @param mixed $title
         */
        public function setTitle($title): void
        {
            $this->title = $title;
        }

        /**
         * @return mixed
         */
        public function getImage()
        {
            return $this->image;
        }

        /**
         * @param mixed $image
         */
        public function setImage($image): void
        {
            $this->image = $image;
        }

        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

        /**
         * @param mixed $price
         */
        public function setPrice($price): void
        {
            $this->price = $price;
        }

    }
    class Store
    {
       private $name,$image,$description,$products;

        /**
         * @param $name
         * @param $image
         * @param $description
         * @param $products
         */
        public function __construct($name, $image, $description, $products)
        {
            $this->name = $name;
            $this->image = $image;
            $this->description = $description;
            $this->products = $products;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name): void
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getImage()
        {
            return $this->image;
        }

        /**
         * @param mixed $image
         */
        public function setImage($image): void
        {
            $this->image = $image;
        }

        /**
         * @return mixed
         */
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * @param mixed $description
         */
        public function setDescription($description): void
        {
            $this->description = $description;
        }

        /**
         * @return mixed
         */
        public function getProducts()
        {
            return $this->products;
        }

        /**
         * @param mixed $products
         */
        public function setProducts($products): void
        {
            $this->products = $products;
        }
    }
    $products=[];
    $product1=new Products("Aransl Home","images/arsnal_home.png",400);
    $products[0]=$product1;
    $product2=new Products("Aransl Away","images/arsnal_away.png",360);
    $products[1]=$product2;
    $product3=new Products("Aransl Third","images/arsnal_3th.png",320);
    $products[2]=$product3;
    $product4=new Products("Real Madrid Home","images/rm_home.png",600);
    $products[3]=$product4;
    $product5=new Products("Real Madrid Away","images/rm_away.png",500);
    $products[4]=$product5;
    $product6=new Products("Real Madrid Thrid","images/rm_3th.png",550);
    $products[5]=$product6;
    $product7=new Products("El Zamalek Home","images/zm_home.png",200);
    $products[6]=$product7;
    $product8=new Products("El Zamalek Away","images/zm_away.png",160);
    $products[7]=$product8;
    $store=new Store("Te shirt Kora","images/Brown%20Black%20Modern%20Badge%20Football%20Club%20Logo.png","This store for high quality sports kits with low price",$products);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Te shirt</title>
        <meta name="description" content="Te shirt Kora, buy naw high quality low price">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="head">
            <ul>
                <li><?=$store->getName() ?></li>
                <li><img src="<?= $store->getImage() ?>" alt="Logo"></li>
                <li><?= $store->getDescription() ?></li>
            </ul>
        </div>
        <div class="body">

            <ul>
                    <?php
                    foreach ($store->getProducts() as $product) {
                        echo '<li>';
                        echo '<img src="' . $product->getImage() . '" alt="Product Image">';
                        echo '<p>' . $product->getTitle() . '</p>';
                        echo '<p>Price: $' . $product->getPrice() . '</p>';
                        echo '</li>';
                    }
                    ?>
            </ul>
        </div>
        <div class="footer">
            <ul>
                <li>Name : Youssef Abdeen Ramadan</li>
                <li>phone : +20123226858</li>
                <li>gmail : <a href="mailto:abdeenyoussef9@gmail.com" target="_blank">abdeenyoussef9@gmail.com</a></li>
                <li><a href="https://www.linkedin.com/in/youssef-abdeen-943577270?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><img src="images/icons8-linkedin-50.png"></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100092998103442&mibextid=ZbWKwL" target="_blank"><img src="images/icons8-facebook-50.png"></a></li>
            </ul>
        </div>
    </body>
</html>
