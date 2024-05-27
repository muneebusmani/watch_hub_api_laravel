### Summary of Relationships:

-   **Users** table is linked to **User Profiles**, **Shopping Cart**, **Orders**, **Wishlists**, **Reviews**, **Support Tickets**, and **Feedback**.
-   **Watches** table is linked to **Categories**, **Images**, **Cart Items**, **Order Items**, **Wishlist Items**, and **Reviews**.
-   **Shopping Cart** and **Wishlists** tables are linked to **Cart Items** and **Wishlist Items**, respectively.
-   **Orders** table is linked to **Order Items**.
    Sure, Muneeb. Here's a detailed explanation of the many-to-one and one-to-many relationships in the WatchHub project tables:

### One-to-Many Relationships

1. **Users to User Profiles**:
    - **done**
    - **One User** can have **one User Profile**.
    - **One-to-One** relationship.

2. **Categories to Watches**:
    - **done**
    - **One Category** can have **many Watches**.
    - **Many-to-One** relationship from Watches to Categories.

3. **Watches to Images**:

    -**done**
    - **One Watch** can have **many Images**.
    - **One-to-Many** relationship from Watches to Images.

4. **Users to Shopping Carts**:

    - **done**
    - **One User** can have **one Shopping Cart**.
    - **One-to-One** relationship.

5. **Shopping Carts to Cart Items**:

    - **done**
    - **One Shopping Cart** can have **many Cart Items**.
    - **One-to-Many** relationship from Shopping Carts to Cart Items.

6. **Users to Orders**:

    - **done**
    - **One User** can have **many Orders**.
    - **One-to-Many** relationship from Users to Orders.

7. **Orders to Order Items**:
    - **done**
    - **One Order** can have **many Order Items**.
    - **One-to-Many** relationship from Orders to Order Items.

8. **Users to Wishlists**:
    - **done**
    - **One User** can have **one Wishlist**.
    - **One-to-One** relationship.

9. **Wishlists to Wishlist Items**:

    - **One Wishlist** can have **many Wishlist Items**.
    - **One-to-Many** relationship from Wishlists to Wishlist Items.

10. **Watches to Reviews**:

    - **One Watch** can have **many Reviews**.
    - **One-to-Many** relationship from Watches to Reviews.

11. **Users to Reviews**:

    - **One User** can have **many Reviews**.
    - **One-to-Many** relationship from Users to Reviews.

12. **Users to Support Tickets**:

    - **One User** can have **many Support Tickets**.
    - **One-to-Many** relationship from Users to Support Tickets.

13. **Users to Feedback**:
    - **One User** can have **many Feedback Entries**.
    - **One-to-Many** relationship from Users to Feedback.

### Many-to-One Relationships

1. **User Profiles to Users**:

    - **One User Profile** belongs to **one User**.
    - **One-to-One** relationship from User Profiles to User.

2. **Watches to Categories**:

    - **Many Watches** belong to **one Category**.
    - **Many-to-One** relationship from Watches to Categories.

3. **Images to Watches**:

    - **Many Images** belong to **one Watch**.
    - **Many-to-One** relationship from Images to Watches.

4. **Cart Items to Shopping Carts**:

    - **Many Cart Items** belong to **one Shopping Cart**.
    - **Many-to-One** relationship from Cart Items to Shopping Carts.

5. **Order Items to Orders**:

    - **Many Order Items** belong to **one Order**.
    - **Many-to-One** relationship from Order Items to Orders.

6. **Wishlist Items to Wishlists**:

    - **Many Wishlist Items** belong to **one Wishlist**.
    - **Many-to-One** relationship from Wishlist Items to Wishlists.

7. **Reviews to Watches**:

    - **Many Reviews** belong to **one Watch**.
    - **Many-to-One** relationship from Reviews to Watches.

8. **Reviews to Users**:

    - **Many Reviews** belong to **one User**.
    - **Many-to-One** relationship from Reviews to Users.

9. **Support Tickets to Users**:

    - **Many Support Tickets** belong to **one User**.
    - **Many-to-One** relationship from Support Tickets to Users.

10. **Feedback to Users**:
    - **Many Feedback Entries** belong to **one User**.
    - **Many-to-One** relationship from Feedback to Users.

### Detailed Table Relationships

-   **Users** table is central to many tables (User Profiles, Shopping Carts, Orders, Wishlists, Reviews, Support Tickets, Feedback), indicating a strong connection between user actions and data.
-   **Watches** table connects to Categories, Images, Cart Items, Order Items, Wishlist Items, and Reviews, showing its importance in the product management system.
-   **Shopping Carts**, **Wishlists**, and **Orders** have many-to-one relationships with **Cart Items**, **Wishlist Items**, and **Order Items** respectively, representing a hierarchical structure of user transactions.
