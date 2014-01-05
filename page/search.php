<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>BigRock :: Domain Websites and More...</title>
    <link rel="icon" type="image/png" href="../images/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="../images/favicon/favicon-160x160.png" sizes="160x160" />
    <link rel="icon" type="image/png" href="../images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="../images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../images/favicon/favicon-16x16.png" sizes="16x16" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-TileImage" content="/mstile-144x144.png" />

    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

    <script src="../bower_components/modernizr/modernizr.js"></script>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/main.css" />

    <link href="../iCheck-master/skins/square/blue.css" rel="stylesheet">
    <link rel="stylesheet" href="../select2-3.4.5/select2.css"/>
</head>
<body>
    <div class="off-canvas-wrap">
        <div class="inner-wrap" id="searchPage">


            <?php
                $parent_dir = '../';
                $search_header = 'Search Again';


                include '../php/header.php';

                include '../php/domainSearch.php';
            ?>






            <!--Cart-->

            <div class="row " id="cart">
                <div class="small-12 small-centered columns panel">
                    <ul class="small-block-grid-3 text-center inline-list">
                        <li>Cart (0)</li>
                        <li>Total : Rs. 000.00</li>
                        <li>
                            <a href="order.php" id="checkout"  class="button tiny">
                                <small id="checkoutIcon"></small>
                                Checkout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="row ">

                <table class="large-12 columns " id="domainTable">

                    <!--
                      <tr>
                            <th colspan="5"><h3>Search Results:</h3></th>
                        </tr>
                        <tr>
                            <td>TommyOnline.com</td>
                            <td class="unavailable"><span></span>Unavailable</td>
                            <td>Rs. 249.00</td>
                            <td class="text-center">
                                <button class="small  right round wish-add" disabled></button>
                            </td>
                            <td class="text-center">
                                <button title="Add to Cart" class="small  right  cart-add" disabled></button>
                            </td>
                        </tr>


                                            <tr>
                                                <th colspan="5"><h4>Other Recommendations:</h4></th>
                                            </tr>

                                            <tr>
                                                <td>TommyOnline.net</td>
                                                <td class="available">Available</td>
                                                <td>Rs. 265.00</td>
                                                <td class="text-center">
                                                    <button class="small  right round wish-add"></button>
                                                </td>
                                                <td class="text-center">
                                                    <button title="Add to Cart" class="small  right  cart-add"></button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>TommyOnline.org</td>
                                                <td class="available">Available</td>
                                                <td>Rs. 400.00</td>
                                                <td class="text-center">
                                                    <button class="small  right round wish-add"></button>
                                                </td>
                                                <td class="text-center">
                                                    <button title="Add to Cart" class="small  right  cart-add"></button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>TommyOnline.co.in</td>
                                                <td class="available">Available</td>
                                                <td>Rs. 300.00</td>
                                                <td class="text-center">
                                                    <button class="small  right round wish-add"></button>
                                                </td>
                                                <td class="text-center">
                                                    <button title="Add to Cart" class="small  right  cart-add"></button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>TommyOnline.biz</td>
                                                <td class="available">Available</td>
                                                <td>Rs. 200.00</td>
                                                <td class="text-center">
                                                    <button class="small  right round wish-add"></button>
                                                </td>
                                                <td class="text-center">
                                                    <button title="Add to Cart" class="small  right  cart-add"></button>
                                                </td>
                                            </tr>-->


                    </table>

            </div>




            <?php include '../php/footer.php' ?>


        </div>
    </div>

    <script src="../bower_components/jquery/jquery.js"></script>
    <script src="../bower_components/foundation/js/foundation.min.js"></script>
    <script src="../iCheck-master/icheck.js"></script>
    <script src="../select2-3.4.5/select2.js"></script>
    <script src="../scripts/app.js"></script>

</body>
</html>