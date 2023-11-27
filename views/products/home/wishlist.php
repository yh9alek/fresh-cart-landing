<?php require_once "cart.php"; ?>
<?php require_once "header.php"; ?>
<section class="wishlist__section" id="wishlist">
    <div class="wishlist__container container">
        <div class="wishlist__header">
            <div>
                <h2>My Wishlist</h2>
                <p>There are 5 products in this wishlist.</p>
            </div>
            <a class="btn__add form__control">Add selected to the shopping cart</a>
        </div>
        <div class="table__container">
            <table>
                <tr>
                    <th>
                        <input type="checkbox" class="check-all">
                    </th>
                    <th></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                    <th>Remove</th>
                </tr>
                <!--<tr>
                    <td>
                        <input type="checkbox" class="check">
                    </td>
                    <td>
                        <figure>
                            <img src="https://freshcart.codescandy.com/assets/images/products/product-img-18.jpg">
                        </figure>
                    </td>
                    <td>
                        <p class="title">Organic Banana</p>
                        <p class="weight">$.98 / lb</p>
                    </td>
                    <td>
                        <p class="wprice">$35.00</p>
                    </td>
                    <td>
                        <p class="status in">In Stock</p>
                    </td>
                    <td>
                        <a class="add" href="">Add to Cart</a>
                    </td>
                    <td>
                        <a href="" class="rem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-success">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                        </a>
                    </td>
                </tr>-->
            </table>
        </div>
    </div>
<section>