@extends('layout.front.index')
@section('title')@section('title')
   Home
@endsection
@section('content')
<!-- MAIN -->
<div id="main" class="theme-clearfix" role="document">
    <div class="breadcrumbs theme-clearfix">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a id="home" href="home_style_2.html">Home</a>
                    <span class="go-page"></span>
                </li>

                <li class="active">
                    <span>Cart</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="contents" role="main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="post-27 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="woocommerce">
                                            <form method="post">
                                                <table class="shop_table cart" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-remove">&nbsp;</th>
                                                            <th class="product-thumbnail">Image</th>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-price">Price</th>
                                                            <th class="product-quantity">Quantity</th>
                                                            <th class="product-subtotal">Total</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-remove">
                                                                <a href="" class="remove" title="Remove this item">&#215;</a>
                                                            </td>

                                                            <td class="product-thumbnail">
                                                                <a href="">
                                                                    <img 	width="180" height="180" src="{{ asset('best/images/1-2-180x180.jpg') }}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""/>
                                                                </a>
                                                            </td>

                                                            <td class="product-name">
                                                                <a href="">Steak veniam </a>
                                                            </td>

                                                            <td class="product-price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>80.00
                                                                </span>
                                                            </td>

                                                            <td class="product-quantity">
                                                                <div class="quantity">
                                                                    <input type="number" step="1" min="0" max="" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" />
                                                                </div>
                                                            </td>

                                                            <td class="product-subtotal">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>80.00
                                                                </span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="6" class="actions">
                                                                <div class="coupon">
                                                                    <label for="coupon_code">Coupon:</label>
                                                                    <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
                                                                    <input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />
                                                                </div>
                                                                <input type="submit" class="button" name="update_cart" value="Update Cart" disabled="">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>

                                            <div class="cart-collaterals">
                                                <div class="cart_total">
                                                    <div class="cart_totals ">
                                                        <h2>Cart Totals</h2>
                                                        <table cellspacing="0" class="shop_table shop_table_responsive">
                                                            <tbody>
                                                                <tr class="cart-subtotal">
                                                                    <th>Subtotal</th>

                                                                    <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>80.00
                                                                        </span>
                                                                    </td>
                                                                </tr>

                                                                <tr class="order-total">
                                                                    <th>Total</th>

                                                                    <td>
                                                                        <strong>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>80.00
                                                                            </span>
                                                                        </strong>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <div class="wc-proceed-to-checkout">
                                                            <a href="home_style_2_checkout.html" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN -->
@endsection
