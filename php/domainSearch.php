<?php
/**
 * Created by PhpStorm.
 * User: Lezwon
 * Date: 28/12/13
 * Time: 11:21 AM
 */

global $search_header;

?>

<!--Domain Search-->

<div id="domainSearch">
    <div class="row">
        <div class="small-12 columns">

            <div class="row">
                <div class="small-12 columns">

                    <h2><span id="searchIcon"></span> <?php echo $search_header ?> </h2>
                </div>

            </div>

            <form action="" id="searchForm" novalidate="">

                <div class="row collapse">
                    <div class="small-2 columns">
                        <span class="prefix">http://</span>
                    </div>

                    <div class="small-6 columns">
                        <input type="text" id="domainName" placeholder="Enter Your Domain Name" pattern="domain"/>
                    </div>

                    <div class="small-2 columns">
                        <select class="postfix" id="domainExt">
                            <optgroup label="Popular Extensions"></optgroup>
                            <option value=".com">.com</option>
                            <option value=".net">.net</option>
                            <option value=".org">.org</option>
                            <option value=".co.in">.co.in</option>
                            <option value=".biz">.biz</option>
                            <option value=".in">.in</option>
                            <option value=".pw">.pw</option>
                            <option value=".me">.me</option>
                            <option value=".asia">.asia</option>
                        </select>
                    </div>


                    <div class="small-2 columns">
                        <input class="postfix button " type="submit" value="GO"/>
                    </div>
                </div>
            </form>
        </div>

        <hr/>

    </div>
</div>