<?php
/**
 * Created by PhpStorm.
 * User: Lezwon
 * Date: 28/12/13
 * Time: 10:54 AM
 */

global $parent_dir;
global $child_dir;
?>




<!--Header-->
<div class="row">
    <a class="small-6 columns" id="bigrockTitle" href="<?php echo $parent_dir ?>index.php">
        <img src="<?php echo $parent_dir ?>images/BR-logo-gloss.png" alt="BigRock.in"/>
    </a>

    <div class="small-6  columns ">
        <ul class="button-group radius right  " id="sign">
            <li><a href="#" class="button secondary tiny" data-reveal-id="signUp">Sign Up</a></li>
            <li><a href="#" class="button secondary tiny" data-reveal-id="logIn">Login</a></li>
        </ul>

        <div class="row hide">

            <div class="medium-10 large-6 columns right">

                <ul class="small-block-grid-2" id="account">
                    <li>
                        <a href="<?php echo $child_dir ?>order.php" class="button secondary  small radius">Cart (0)</a>
                    </li>
                    <li>
                        <a href="#" class="button secondary small radius  right-off-canvas-toggle ">
                            <span class="profilePic"></span>
                            Ramesh</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!--Off canvas Menu-->

<aside class="right-off-canvas-menu">
    <ul class="off-canvas-list text-left">
        <li class="text-center"><label>My account</label></li>
        <li><a href="#" id="order">
                <small></small>
                Previous Orders</a></li>
        <li><a href="#" id="wish">
                <small></small>
                Wishlist</a></li>
        <li><a href="#" id="pref">
                <small></small>
                Preferences</a></li>
        <li><a href="#" id="help">
                <small></small>
                Help</a></li>
        <li><a href="#" id="logout">
                <small></small>
                Logout</a></li>

    </ul>
</aside>


<!--Sign Up Modal-->

<div class="reveal-modal " data-reveal id="signUp">
    <div class="row">
        <div class="medium-12 large-10 columns small-centered">
            <form action="" id="signUpForm" novalidate="">
                <h3>Sign Up</h3>

                <div class="row">
                    <!--    name-->
                    <div class="medium-6 columns">
                        <input type="text" placeholder="Full Name" pattern="alpha" name="name" required=""/>
                        <small class="error">Please enter characters only.</small>
                    </div>

                    <!--    mobile-->
                    <div class="medium-4 columns">
                        <input type="tel" placeholder="Mobile" name="mobile" pattern="number" required/>
                        <small class="error">Please enter numbers only.</small>
                    </div>

                    <!--    age-->
                    <div class="medium-2 columns">
                        <input type="text" placeholder="Age" name="age" pattern="number" maxlength="2"/>
                        <small class="error">Please enter numbers only.</small>
                    </div>
                </div>


                <!--address-->
                <div class="row">
                    <div class="small-12 columns">
                        <input type="text" placeholder="Address" name="address" required=/>
                        <small class="error">Please fill the required field</small>
                    </div>
                </div>

                <div class="row">
                    <div class="medium-3 columns">
                        <select name="country" id="country">
                            <option value="AX">Åland Islands</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua And Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, Democractic Republic</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote D'Ivoire (Ivory Coast)</option>
                            <option value="HR">Croatia (Hrvatska)</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="TP">East Timor</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Islas Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji Islands</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="FX">France, Metropolitan</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia, The</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard and McDonald Islands</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong S.A.R.</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN" selected>India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KR">Korea</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Laos</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macau S.A.R.</option>
                            <option value="MK">Macedonia</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua new Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn Island</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russia</option>
                            <option value="RW">Rwanda</option>
                            <option value="SH">Saint Helena</option>
                            <option value="KN">Saint Kitts And Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent And The Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia And The South Sandwich Islands</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard And Jan Mayen Islands</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad And Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks And Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VA">Vatican City State (Holy See)</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Vietnam</option>
                            <option value="VG">Virgin Islands (British)</option>
                            <option value="VI">Virgin Islands (US)</option>
                            <option value="WF">Wallis And Futuna Islands</option>
                            <option value="EH">WESTERN SAHARA</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>

                    <!--state-->
                    <div class="medium-3 columns">
                        <input type="text" placeholder="State" pattern="alpha" name="state" required/>
                        <small class="error">Please enter characters only.</small>
                    </div>

                    <!--city-->
                    <div class="medium-3 columns">
                        <input type="text" placeholder="City" pattern="alpha" name="city" required/>
                        <small class="error">Please enter characters only.</small>
                    </div>

                    <!--zip-->
                    <div class="medium-3 columns">
                        <input type="text" placeholder="Zip" pattern="number" name="zip" required/>
                        <small class="error">Please enter numbers only.</small>
                    </div>
                </div>

                <hr/>

                <div class="row">
                    <div class="small-12 large-6 columns">
                        <input type="email" placeholder="Email" pattern="email" name="email" required>
                        <small class="error">Please enter a valid email.</small>
                    </div>
                </div>


                <!--password-->
                <div class="row">
                    <div class="small-12 large-6 columns">
                        <input type="password" placeholder="Enter Password" pattern="password" name="password" required>
                        <small class="error">Passwords must be between 8-15 characters with 1 capital letter, 1 number,
                            and one special character.
                        </small>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 large-6 columns">
                        <input type="password" placeholder="Confirm Password" pattern="password" name="password-confirm"
                               required/>
                        <small class="error">Passwords must match.</small>
                    </div>
                </div>


                <!--checkbox-->
                <div class="row">
                    <div class="small-12 columns">

                        <input type="checkbox" value="agree" id="agree" required/>
                        <label for="agree">
                            I agree with the <a href="">Terms and Conditions</a>.
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <input type="submit" value="Sign Up" id="signUp_Submit" class="button" disabled/>
                    </div>
                </div>

            </form>

            <hr/>
        </div>
    </div>

    <div class="row">
        <div class="medium-12 large-10 small-centered columns">
            <p>Already a User? <a href="" data-reveal-id="logIn">Sign In</a></p>
        </div>
    </div>
    <a class="close-reveal-modal">&#215;</a>
</div>


<!--Login Modal-->
<div class="reveal-modal medium" data-reveal id="logIn">
    <div class="row">
        <div class="large-9 small-12 columns">
            <form action="">
                <h3>Log In</h3>
                <input type="text" placeholder="Email"/>
                <input type="password" placeholder="Password"/>
                <input type="submit" class="button" value="Log In"/>

            </form>
        </div>
    </div>

    <div class="row">
        <hr/>
        <div class="large-6 medium-12 columns">
            <p>New User? <a href="" data-reveal-id="signUp">Create an Account</a></p>
        </div>

        <div class="large-6 medium-12 columns">
            <p>Forgot Password? <a href="" data-reveal-id="forgotPassword">Click Here</a></p>
        </div>
    </div>

    <a class="close-reveal-modal">&#215;</a>
</div>


<!--Forgot Password Modal-->

<div class="reveal-modal small" data-reveal="" id="forgotPassword">
    <div class="row">
        <div class="small-12 columns">
            <form action="">
                <h3>Forgot Password</h3>
                <input type="text" placeholder="Enter your Email"/>
                <input type="submit" value="Submit" class="button"/>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <hr/>
            <a href="" data-reveal-id="logIn">Go Back</a>
        </div>
    </div>


    <a class="close-reveal-modal">&#215;</a>
</div>

<!--Menu-->

<div class="contain-to-grid" id="menu">
    <nav class="top-bar contain-to-grid" data-topbar>
        <ul class="title-area show-for-small-only">
            <li class="name">
                <h1><a href="#">Menu</a></h1>
            </li>

            <li class="toggle-topbar menu-icon"><a href=""><span></span></a></li>
        </ul>


        <section class="top-bar-section text-center small-centered">
            <ul class="medium-block-grid-5 small-block-grid-1">
                <li><a href="<?php echo $parent_dir . '/' ?>#"> Purchase a domain </a></li>
                <li><a href="<?php echo $parent_dir . '/' ?>#"> Get Hosting </a></li>
                <li><a href="<?php echo $parent_dir . '/' ?>#"> Products </a></li>
                <li><a href="<?php echo $parent_dir . '/' ?>#"> Support </a></li>
                <li><a href="<?php echo $parent_dir . '/' ?>#"> Live Chat </a></li>
            </ul>
        </section>
    </nav>

</div>