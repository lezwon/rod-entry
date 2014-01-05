<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <title>BigRock :: Domain Websites and More...</title>
    <link rel="icon" type="image/png" href="../images/favicon/favicon-196x196.png" sizes="196x196"/>
    <link rel="icon" type="image/png" href="../images/favicon/favicon-160x160.png" sizes="160x160"/>
    <link rel="icon" type="image/png" href="../images/favicon/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/png" href="../images/favicon/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="../images/favicon/favicon-16x16.png" sizes="16x16"/>
    <meta name="msapplication-TileColor" content="#da532c"/>
    <meta name="msapplication-TileImage" content="/mstile-144x144.png"/>

    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <script src="../bower_components/modernizr/modernizr.js"></script>
    <link rel="stylesheet" href="../css/foundation.css"/>
    <link rel="stylesheet" href="../css/main.css"/>

    <link href="../iCheck-master/skins/polaris/polaris.css" rel="stylesheet">
    <link href="../iCheck-master/skins/square/blue.css" rel="stylesheet">


</head>
<body>
<div class="off-canvas-wrap">
<div class="inner-wrap">


<?php
$parent_dir = '../';
include '../php/header.php';
?>

<br/>


<!--Cart-->

<div class="row " id="cart">
    <div class="small-12 small-centered columns panel">
        <ul class="small-block-grid-3 text-center inline-list">
            <li>Cart (0)</li>
            <li>Total : Rs. 000.00</li>
            <li>
                <a href="" class="button tiny proceedPayment text-center" data-reveal-id="payment">
                    Payment
                    <small></small>
                </a>
            </li>
        </ul>
    </div>
</div>

<br/>
<!--Order summary-->

<div class="row">
    <div class="small-12  columns text-center " id="orderSummary">
        <h3>Order Summary</h3>
    </div>
</div>


<!--Order-->

<div class="row">
    <table class="small-12 columns items">
        <tr>
            <td>
                <h3>

                    <small class="website"></small>
                    <a href="">Meteora.com</a>
                    <a href="" class="right">
                        <small class="remove"></small>
                    </a>
                </h3>

            </td>


            <td>
                <select>
                    <option value="1">1 Year</option>
                    <option value="2">2 Years</option>
                    <option value="3">3 Years</option>
                    <option value="4">4 Years</option>
                    <option value="5">5 Years</option>
                </select>
            </td>
            <td class="text-right">
                <h5>Price:</h5>
            </td>
            <td class="text-right">
                <h5><strong>Rs. 200.00</strong></h5>
            </td>
        </tr>


        <tr>
            <td>
                <h3>
                    <small class="hosting"></small>
                    <a href="">Web Hosting Package</a>
                    <a href="" class="right ">
                        <small class="remove"></small>
                    </a>
                </h3>
            </td>
            <td>
                <select>
                    <option value="">Rs. 79/month</option>
                    <option value="">Rs. 139/month</option>
                    <option value="">Rs. 169/month</option>
                    <option value="">Rs. 219/month</option>
                </select>
            </td>
            <td class="text-right">
                <h5>Price:</h5>
            </td>
            <td class="text-right">
                <h5><strong>Rs. 400.00</strong></h5>
            </td>
        </tr>

        <tr>
            <td>
                <h3>
                    <small class="website"></small>
                    <a href="">Veronica.com</a>
                    <a href="" class="right">
                        <small class="remove"></small>
                    </a>
                </h3>
            </td>
            <td>
                <select>
                    <option value="1">1 Year</option>
                    <option value="2">2 Years</option>
                    <option value="3">3 Years</option>
                    <option value="4">4 Years</option>
                    <option value="5">5 Years</option>
                </select>
            </td>
            <td class="text-right">
                <h5>Price:</h5>
            </td>
            <td class="text-right">
                <h5><strong>Rs. 400.00</strong></h5>
            </td>
        </tr>

        <tr>
            <td>
                <h3>
                    <small class="email"></small>
                    <a href="">Email Hosting Package</a>
                    <a href="" class="right ">
                        <small class="remove"></small>
                    </a>
                </h3>
            </td>
            <td>
                <select>
                    <option value="">Rs. 79/month</option>
                    <option value="">Rs. 139/month</option>
                    <option value="">Rs. 169/month</option>
                    <option value="">Rs. 219/month</option>
                </select>
            </td>
            <td class="text-right">
                <h5>Price:</h5>
            </td>
            <td class="text-right">
                <h5><strong>Rs. 600.00</strong></h5>
            </td>
        </tr>

        <tr>
            <td>
                <h3>
                    <small class="design"></small>
                    <a href="">Web Design Package</a>
                    <a href="" class="right ">
                        <small class="remove"></small>
                    </a>
                </h3>
            </td>
            <td>
                <select>
                    <option value="">Rs. 79/month</option>
                    <option value="">Rs. 139/month</option>
                    <option value="">Rs. 169/month</option>
                    <option value="">Rs. 219/month</option>
                </select>
            </td>
            <td class="text-right">
                <h5>Price:</h5>
            </td>
            <td class="text-right">
                <h5><strong>Rs. 370.00</strong></h5>
            </td>
        </tr>
    </table>
</div>


<!--    <div class="row panel items">
        <div class="small-12 medium-8 columns ">

            <div class="row">
                <div class="small-8  columns">
                    <h2><small></small><a href="">tommy.com</a></h2>
                    <p>.com registration</p>
                </div>
                <div class=" small-4 medium-10 large-4 left columns">
                    <select name="" id="term2">
                        <option value="1">1 Year </option>
                        <option value="2">2 Years</option>
                        <option value="3">3 Years</option>
                        <option value="4">4 Years</option>
                        <option value="5">5 Years</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <ul class="small-12 columns circle hide addons">
                    <li>Lorem ipsum dolor.</li>
                    <li>A adipisci, nesciunt.</li>
                    <li>Consectetur, perspiciatis, veniam.</li>
                    <li>Aspernatur, beatae, saepe!</li>
                    <li>Pariatur, quaerat, reprehenderit.</li>
                </ul>
            </div>

        </div>

        <table class="small-12 medium-4 columns text-right right">
            <tr>
                <th>Unit Price:</th>
                <td>Rs. 220.00</td>
            </tr>
            <tr>
                <th>Savings:</th>
                <td>2%</td>
            </tr>
            <tr>
                <th><h5>Final Price:</h5></th>
                <td><h5><strong>Rs. 200.00</strong></h5></td>
            </tr>
        </table>

        <div class="row text-center">
            <hr/>
            <div class="small-4 columns ">
                <a class="button tiny round free secondary" href="#">Free Add-ons >></a>
            </div>

            <div class="small-4 columns ">
                <a class="button tiny secondary round similar" href="">Similar Domains</a>
            </div>

            <div class="small-4 columns ">
                <a class=" button round tiny secondary remove" href=""><small></small>X Remove</a>
            </div>
        </div>

    </div>-->


<div class="row hide" id="similarContainer">

    <table class="large-12 columns" id="similarTable">

        <tr>
            <th colspan="5"><h3>Similar Results:</h3></th>
        </tr>

        <tr>
            <td>tommy.net</td>
            <td class="available"><span> </span>Available</td>
            <td class="text-center">Rs. 249/yr</td>
            <td class="text-center" title="Add to Wishlist">
                <button class="small  right round wish-add"></button>
            </td>
            <td class="text-center">
                <button title="Add to Cart" class="small  right radius cart-add"></button>
            </td>
        </tr>

        <tr>
            <td>TommyOnline.net</td>
            <td class="available"><span> </span>Available</td>
            <td class="text-center">Rs. 400.00/yr</td>
            <td class="text-center" title="Add to Wishlist">
                <button class="small  right round wish-add"></button>
            </td>
            <td class="text-center">
                <button title="Add to Cart" class="small  right radius cart-add"></button>
            </td>
        </tr>

        <tr>
            <td>Tommynow.biz</td>
            <td class="available"><span> </span>Available</td>
            <td class="text-center">Rs. 350.00/yr</td>
            <td class="text-center" title="Add to Wishlist">
                <button class="small  right round wish-add"></button>
            </td>
            <td class="text-center">
                <button title="Add to Cart" class="small  right radius cart-add"></button>
            </td>
        </tr>

        <tr>
            <td>Tommy.org</td>
            <td class="available"><span> </span>Available</td>
            <td class="text-center">Rs. 250.00/yr</td>
            <td class="text-center" title="Add to Wishlist">
                <button class="small  right round wish-add"></button>
            </td>
            <td class="text-center">
                <button title="Add to Cart" class="small  right radius cart-add"></button>
            </td>
        </tr>

        <tr>
            <td>tommyOnline.co.in</td>
            <td class="available"><span> </span>Available</td>
            <td class="text-center">Rs. 300.00/yr</td>
            <td class="text-center" title="Add to Wishlist">
                <button class="small  right round wish-add"></button>
            </td>
            <td class="text-center">
                <button title="Add to Cart" class="small  right radius cart-add"></button>
            </td>
        </tr>

        <tr>
            <th colspan="5" class="text-center">
                <a class="button small secondary round similar" href="">Close</a>
            </th>
        </tr>


    </table>

</div>


<!--Total-->


<div class="row ">
    <hr/>

    <!--        coupon-->
    <div class="large-8 columns text-center" id="coupon">
        <form action="">

            <div class="row">
                <div class="small-12 columns">
                    <label for="coupon">
                        <h3>Got a Coupon?</h3>
                    </label>

                </div>
            </div>

            <div class="row">

                <div class="small-11 medium-9  large-11 small-centered columns">
                    <div class="row collapse">
                        <div class="small-8 columns">
                            <input type="text"/>
                        </div>
                        <div class="small-4 columns">
                            <a class="button postfix" href="">Apply</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="small-6 columns">
                    <a href="">
                        <img src="../images/fb_signIn.png" alt="" class="right"/>
                    </a>
                </div>
                <div class="small-6 columns">
                    <a href="">
                        <img src="../images/tw_signIn.png" alt="" class="left"/>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns" id="couponConditions">

                    <small>
                        To get upto 10% off on this order instantly
                        <br/>
                        *Discounts not applicable on .BIZ domains,
                        Premium Domains & VPS Hosting
                    </small>

                </div>
            </div>
        </form>
    </div>


    <!--        Payment-->

    <div class="large-4 columns ">
        <div class="row">
            <table class="small-12 columns text-center">
                <tr>
                    <th>Sub-total:</th>
                    <td>Rs. 600.00</td>
                </tr>
                <tr>
                    <th>Tax:</th>
                    <td>Rs. 150.00</td>
                </tr>
                <tr>
                    <th><h4>Final Total:</h4></th>
                    <td><h4><strong>Rs. 750.00</strong></h4></td>
                </tr>

                <tr>
                    <td>Savings:</td>
                    <td>Rs. 70.00</td>
                </tr>
            </table>
        </div>

        <div class="row">

            <div class="small-11 columns small-centered">
                <a class="button large show-for-medium-down proceedPayment" data-reveal-id="payment" href="">
                    Proceed to Payment
                    <small></small>
                </a>
            </div>

            <a class="large-12 columns button large hide-for-medium-down proceedPayment text-center" href=""
               data-reveal-id="payment">
                Proceed to Payment
                <small></small>
            </a>
        </div>
    </div>


</div>


<!--Payment Modal-->

<div id="payment" class="reveal-modal" data-reveal="">
    <div class="row">
        <div class="small-10 columns small-centered">

            <div class="row">
                <div class="small-12 columns">
                    <h3>Select Your Payment Method</h3>
                </div>
                <hr/>
            </div>
            <form action="">
                <div class="row">
                    <ul class="small-12 no-bullet columns small-centered">
                        <li>
                            <input id="netbanking" type="radio" name="paymentOption" value="netbanking"/>
                            <label for="netbanking">Netbanking</label>
                        </li>
                        <li>
                            <input id="debitCard" type="radio" name="paymentOption" value="debitCard"/>
                            <label for="debitCard">Debit Cards</label>
                        </li>
                        <li>
                            <input id="creditCard" type="radio" name="paymentOption" value="creditCard"/>
                            <label for="creditCard">VISA / MasterCard Credit Cards</label>
                        </li>
                        <li>
                            <input id="paypal" type="radio" name="paymentOption" value="paypal"/>
                            <label for="paypal">Paypal [Amex/Discover Credit Cards/ Paypal account]</label>
                        </li>
                        <li>
                            <input id="cheque" type="radio" name="paymentOption" value="cheque"/>
                            <label for="cheque">Pay via Cheque/Demand Draft/Direct Deposit</label>
                        </li>
                        <li>
                            <input id="accountBal" type="radio" name="paymentOption" value="accountBal"/>
                            <label for="accountBal">Pay via Account balance</label>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="large-6 medium-12 columns large-push-6 text-center">
                        <h3>Amount Payable:<b> Rs. 800.00</b></h3>

                    </div>
                    <div class="large-6 medium-12 columns large-pull-6">
                        <button type="submit" value="Proceed" id="proceed"
                                class="button large-11 columns text-center proceedPayment">
                            Proceed
                            <small></small>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <a class="close-reveal-modal" href="">&#215;</a>
</div>


<!--Extra Offers-->

<div class="row">
    <div class="small-11 large-12 medium-10 small-centered columns">
        <div class="row ">
            <hr/>
            <div class="extra  large-4  columns text-center">
                <h3>Website Design</h3>
                <h4>Get your own website</h4>
                <h5>Includes Email & Web Hosting</h5>

                <select>
                    <option value="">Basic Plan @ Rs. 79/month</option>
                    <option value="">Simple Plan @ Rs. 139/month</option>
                    <option value="">Buisness Plan @ Rs. 169/month</option>
                    <option value="">Premium Plan @ Rs. 219/month</option>
                </select>
                <br/>
                <a href="" class="secondary button tiny plansButton">View Plans</a>
                <br/>
                <a class="button small plansAdd" href="">Add to Cart</a>
            </div>

            <div class="extra  large-4  columns text-center">
                <h3>Web Hosting</h3>
                <h4>Affordable, Reliable, Secure</h4>
                <h5>Includes Email Hosting</h5>

                <select>
                    <option value="">Basic Plan @ Rs. 79/month</option>
                    <option value="">Simple Plan @ Rs. 139/month</option>
                    <option value="">Buisness Plan @ Rs. 169/month</option>
                    <option value="">Premium Plan @ Rs. 219/month</option>
                </select>

                <br/>

                <a href="" class="secondary button tiny plansButton">View Plans</a>
                <br/>
                <a class="button small plansAdd" href="">Add to Cart</a>
            </div>

            <div class="extra  large-4  columns text-center">
                <h3>Email Hosting</h3>
                <h4>Get email at your domain!</h4>
                <h5>you@yourdomain.com</h5>

                <select name="" id="">
                    <option value="">Basic Plan @ Rs. 79/month</option>
                    <option value="">Simple Plan @ Rs. 139/month</option>
                    <option value="">Buisness Plan @ Rs. 169/month</option>
                    <option value="">Premium Plan @ Rs. 219/month</option>
                </select>

                <br/>

                <a href="" class="secondary button tiny plansButton">View Plans</a>
                <br/>
                <a class="button small plansAdd" href="">Add to Cart</a>
            </div>
        </div>
    </div>
</div>


<!--Search-->

<?php
$search_header = 'Find another Domain';
include '../php/domainSearch.php'
?>



<!--Footer-->

<?php include '../php/footer.php' ?>


</div>
</div>

<script src="../bower_components/jquery/jquery.js"></script>
<script src="../bower_components/foundation/js/foundation.min.js"></script>
<script src="../iCheck-master/icheck.js"></script>
<script src="../scripts/app.js"></script>

</body>
</html>