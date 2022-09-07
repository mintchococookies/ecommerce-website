<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "sugarfix_store";

$handler = mysqli_connect($servername, $username, $password, $dbname);

if (!$handler){
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

$create_table_query = "CREATE TABLE products(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(30) NOT NULL,
    product_price DECIMAL(4,2) NOT NULL,
    product_description VARCHAR(500) NOT NULL,
    product_image VARCHAR(100) NOT NULL)";

$insert_products_query = "INSERT INTO products (product_name, product_price, product_description, product_image) 
                          VALUES('Choc Mousse Cake', '48.00', 'This super moist dark chocolate mousse cake combines unsweetened natural cocoa powder and dark cocoa powder for an extra rich flavor. The cake is filled with a simplified chocolate mousse and covered with semi-sweet chocolate ganache.', 'images/cake1.png'),
                                ('Quintuple Chocolate Cake', '45.00', 'This is our favorite homemade chocolate cake. With a super moist crumb and fudgy, yet light texture, this chocolate cake recipe will soon be your favorite too. Topped with chocolate buttercream, chocolate chips and oreo crumbs for 4x the chocolate flavor. ', 'images/cake2.png'),
                                ('Oreo Chocolate Cake', '45.00', 'A rich double chocolate layer cake with two layers of Oreo cookies inside, a thick cream filling, chocolate buttercream, and an Oreo cookie crumb coating.', 'images/cake3.png'),
                                ('Chocolate Butter Cake', '55.00', 'This Chocolate Butter Cake is moist and tender and the two layers are sandwiched together and frosted with a satiny smooth chocolate frosting. What makes this chocolate cake unique is that we use both unsweetened chocolate and unsweetened cocoa powder to achieve its rich chocolate flavor and color.', 'images/cake4.png'),
                                ('Gudetama Cake', '48.00', 'This Gudetama-themed Lemon Chiffon Cake is almost too cute to eat! This moist three layer cake frosted with raspberry buttercream is drizzled with a light sugar-free meringue frosting; making it just the right sweetness. P.S. not to fret! The Gudetama on the cake are made of candy: prefectly safe and yummy to eat!', 'images/cake5.png'),
								('Totoro Cake', '35.00', 'Nutty roasted black sesame seeds are infused all over this spongy, light and fluffy butter chiffon cake that resembles the adorable troll in popular Japanese anime character known as Totoro.', 'images/cake6.png'),
                                ('Basque Burnt Cheesecake', '65.00', 'This cheesecake is the alter ego to the classic New York–style cheesecake with a press-in cookie crust. Inspired by a Basque version, this cheesecake is cooked at a high heat to acheieve that signature crispy cheese crust.', 'images/cake7.png'),
                                ('Blueberry Galaxy Cake', '48.00', 'A decadent blueberry galaxy cake made with layers of light lemon cake, filled with blueberry buttercream, and decorated to look like outer space! P.S. let us know the planet of your choice!', 'images/cake8.png'),
								('Ice Cream Cake', '58.00', 'Cool off with a slice of ice cream cake! This summertime treat combines two of your favorite ice cream flavors, hot fudge, homemade whipped cream, and sprinkles– all on top of an Oreo cookie crust. ', 'images/cake9.png'),
                                ('Tiramisu Cake', '48.00', 'Cake flavored with expresso filled with layers of mascarpone cheese and cappucino cream', 'images/cake10.png'),
                                ('Cappucino Cake', '48.00', 'This cuppucino cake is deliciously soft and moist, every bite is heaven if you are a coffee lover!', 'images/cake11.png'),
								('Boba Earl Grey Cake', '38.00', 'Light, spongy and airy cake with the lava custard, this delightful Boba Earl Grey Cake is a perfect dessert for your afternoon tea!', 'images/cake12.png'),
								('Cendol Cake', '29.00', ' Our Cendol Cake which is generously decked in pandan, sago gula melaka, and coconut milk mousse, sandwiched between yummy portions of agar-agar.', 'images/cake13.png'),
                                ('Mango Cake', '29.00', 'Everyday is Mangonificient. Grab this yummy cake filled with chunks of fresh mangoes and layers of fluffy vanilla sponge.', 'images/cake14.png'),
                                ('Pandan Cake', '35.00', 'Dear Pandan lovers, Pandan cakes are here to invade your taste bud. Not only the design is attractive, the texture, fragrance and taste of it is also wonderful.', 'images/cake15.png'),
                                ('Durian Cake', '35.00', 'A new favourite to Durian Lovers! Freshly made Musang King Durian Mille Crepe Cake, perfect balance of crepes and creams. Suitable for your breakfast or high tea!', 'images/cake16.png') ";

if (mysqli_query($handler, $create_table_query)){
    echo "Table created succesfully";
} else {
    echo "Error creating table: " . mysqli_error($handler); 
}

if (mysqli_query($handler, $insert_products_query)){
    echo "Records inserted succesfully";
} else {
    echo "Error inserting records: " . mysqli_error($handler); 
}
?>


