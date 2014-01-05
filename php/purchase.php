<?php
/**
 * Created by PhpStorm.
 * User: Lezwon
 * Date: 27/12/13
 * Time: 2:31 PM
 */



function check($name){
    if(isset($_REQUEST[$name])&&!empty($_REQUEST[$name])){
        return true;
    }else{
        return false;
    }
}

global $domain_name;
global $domain_ext;
global $exts;
global $domain_others;

if(check('domain') && check('ext')){
    $domain_name = $_POST['domain'];
    $domain_ext = $_POST['ext'];
}


$domainSite = $domain_name.$domain_ext;
$domain_availability = array('Available','Unavailable');
$domain_price = array(349.00,249.00,350.00,750.00,220.00);
$exts = array('.net','.org','.co.in','.cc','.gov');
$site_available= $domain_availability[array_rand($domain_availability)];
$table_header_search = '<tr> <th colspan="5"><h3>Search Results:</h3></th> </tr>';
$table_header_recommendations = '<tr> <th colspan="5"><h3>Other Recommendations:</h3></th> </tr>';
$domain_price_random = 'Rs. '.$domain_price[array_rand($domain_price)].'/yr';

$i = 0;
foreach($exts as $ext){
    $domain_others[$i] = $domain_name.$ext;
    $i++;
}



function printTable($domainSite,$site_available){
    global $domain_price;
    $domain_price_random = 'Rs. '.$domain_price[array_rand($domain_price)].'/yr';
    $site_available_lwr = strtolower($site_available);

    if ($site_available == "Unavailable"){
        $disabled =  "disabled";
        $domain_price_random =  "---";
    }

    else
        $disabled = null;

    return '<tr id="'.md5($domainSite).'">
        <td>'.$domainSite.'</td>
        <td class="'.$site_available_lwr.'"><span> </span>'. $site_available.'</td>
        <td class="text-center">'.$domain_price_random.'</td>
        <td class="text-center" title="Add to Wishlist">
            <button class="small  right round wish-add"'.$disabled.'></button>
        </td>
        <td class="text-center">
            <button title="Add to Cart" class="small  right radius cart-add"  '.$disabled.'></button>
        </td>
    </tr>';
}



echo $table_header_search.printTable($domainSite,$site_available).$table_header_recommendations;




foreach($domain_others as $domainSite){

    $site_available_lwr = strtolower($domain_availability[0]);
    $domain_price_random = 'Rs. '.$domain_price[array_rand($domain_price)].'/yr';
    $disabled = null;

    echo printTable($domainSite,$domain_availability[0]);

}

