# E-commerce Website
Prototype of an e-commerce website written in HTML, PHP, JavaScript, and CSS. Hosted with Apache web server with a mysql database.

![Alt Text](https://github.com/mintchococookies/ecommerce-website/blob/main/ecomm1.png)
![Alt Text](https://github.com/mintchococookies/ecommerce-website/blob/main/ecomm2.png)

## Features:
1. **User Data Storage**
   - The website is able to send entered user data from the Sign-Up page to the website's SQL database using the POST method.

2. **User Data Retrieval**
   - The stored sign-up data is able to be retrieved at the Log in page to verify that the customer's email belongs to an account and has entered their password correctly.

3. **Add Items to Cart**
   - The customer is able to add several items to their cart, and details about every item added to their cart are stored.

4. **Checkout Authentication**
   - The customer is not allowed to checkout unless they have logged in. The order button is hidden if the user is not logged in.

5. **Cart Page Access**
   - A cart page is accessible to the user once they have added at least one item to their cart.

6. **Logout Functionality**
   - Upon logout, all the customer's information and cart items are cleared.

7. **Order Placement and Cart Clearance**
   - After the customer has placed an order, their cart is cleared of all items, and they are shown an order confirmation message.
