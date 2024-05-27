1. **Users Account**

    - `id`: Primary key
    - `username`: Unique username
    - `email`: Unique email
    - `password_hash`: Encrypted password
    - `created_at`: Timestamp of account creation
    - `updated_at`: Timestamp of last update

2. **User Profiles**

    - `id`: Primary key
    - `user_id`: Foreign key to Users table
    - `first_name`: First name
    - `last_name`: Last name
    - `address`: Address
    - `city`: City
    - `state`: State
    - `zip_code`: Zip code
    - `phone_number`: Phone number
    - `created_at`: Timestamp of profile creation
    - `updated_at`: Timestamp of last update

3. **Watches**

    - `id`: Primary key
    - `brand`: Brand name
    - `model`: Model name
    - `description`: Detailed description
    - `price`: Price
    - `stock`: Stock availability
    - `category_id`: Foreign key to Categories table
    - `created_at`: Timestamp of watch addition
    - `updated_at`: Timestamp of last update

4. **Categories**

    - `id`: Primary key
    - `name`: Category name (e.g., Luxury, Sports)
    - `description`: Description of the category

5. **Images**

    - `id`: Primary key
    - `watch_id`: Foreign key to Watches table
    - `image_url`: URL of the image
    - `created_at`: Timestamp of image addition
    - `updated_at`: Timestamp of last update

6. **Shopping Cart**

    - `id`: Primary key
    - `user_id`: Foreign key to Users table
    - `created_at`: Timestamp of item addition
    - `updated_at`: Timestamp of last update
      <!--
          We can link user and shopping cart   together via inner join
          join User account and shopping cart on the basis of id in user table and user_id foreign key in Shopping cart
          and about Shopping cart and cart items:
          join both tables on the basis of  id of Shopping cart and cart_id foreign key of Cart items
            -->

7. **Cart Items**

    - `id`: Primary key
    - `cart_id`: Foreign key to Shpping cart table
    - `watch_id`: Foreign key to Watches table
    - `price`: Price
    - `quantity`: Quantity of the watch
    - `created_at`: Timestamp of item addition
    - `updated_at`: Timestamp of last update

8. **Orders**

    - `id`: Primary key
    - `user_id`: Foreign key to Users table
    - `total_price`: Total price of the order
    - `status`: Order status (e.g., pending, shipped, delivered)
    - `created_at`: Timestamp of order creation
    - `updated_at`: Timestamp of last update

9. **Order Items**

    - `id`: Primary key
    - `order_id`: Foreign key to Orders table
    - `watch_id`: Foreign key to Watches table
    - `quantity`: Quantity of the watch
    - `price`: Price of the watch at the time of order
    - `created_at`: Timestamp of item addition
    - `updated_at`: Timestamp of last update

10. **Wishlist**

    - `id`: Primary key
    - `user_id`: Foreign key to Users table
    - `watch_id`: Foreign key to Watches table
    - `price`: Price
    - `stock`: Stock availability
    - `created_at`: Timestamp of item addition
    - `updated_at`: Timestamp of last update

11. **Reviews**

    - `id`: Primary key
    - `user_id`: Foreign key to Users table
    - `watch_id`: Foreign key to Watches table
    - `rating`: Rating given by the user
    - `comment`: Review comment
    - `created_at`: Timestamp of review submission
    - `updated_at`: Timestamp of last update

12. **Support Tickets**

    - `id`: Primary key
    - `user_id`: Foreign key to Users table
    - `subject`: Subject of the support ticket
    - `message`: Message content
    - `status`: Ticket status (e.g., open, closed)
    - `created_at`: Timestamp of ticket creation
    - `updated_at`: Timestamp of last update

13. **FAQ**

    - `id`: Primary key
    - `question`: FAQ question
    - `answer`: FAQ answer
    - `created_at`: Timestamp of FAQ addition
    - `updated_at`: Timestamp of last update

14. **Feedback**
    - `id`: Primary key
    - `user_id`: Foreign key to Users table
    - `message`: Feedback message
    - `created_at`: Timestamp of feedback submission
    - `updated_at`: Timestamp of last update
