// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();





$(document).ready(function(){



    //add table wen search page loads
    $('#domainTable').hide().html(sessionStorage.tableData).slideDown();


//    search form submit and reload
    $('#searchForm').submit(function(e){
        e.preventDefault();

        var domainValue = $('#domainName').val();
        var domainExt = $('#domainExt').val().substring(0,62);

        if(!domainValue.match(/^([a-zA-Z0-9]+-?[a-zA-Z0-9]*[^_\W]$)/)){

            alert('Invalid Domain Name');
            return;
        }else{
            domainName = domainValue;
        }

        var domainSite = 'www.'+domainName+domainExt;


        if(typeof(Storage)!=="undefined")
        {
            sessionStorage.setItem('domainSite',domainSite);
        }
        else
        {

        }

        var path = document.location.href;

        if(path.search('page')>=0){

            $.post('../php/purchase.php',{domain: domainName,ext:domainExt},function(data){
                document.location.href='search.php';
                sessionStorage.tableData = data;
            });

            return;
        }

        $.post('php/purchase.php',{domain: domainName,ext:domainExt},function(data){

            document.location.href='page/search.php';
            sessionStorage.tableData = data;
        })

    });



//    Go to Top

    $('#goToTop').click(function(e){
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 1000);
    });

    //SignupForm

    form = $('#signUpForm');
    $('.error').hide();


    error = 0;

    function submitForm(){

        if($('#agree').is(':checked')  && error == 0){
            $('#signUp_Submit').removeAttr('disabled');
        }else{
            $('#signUp_Submit').attr('disabled','');
        }
    }

    $('input').each(function(){
        $(this).keyup(function(){ //keyup for each input

//          Check if characters for city,state and name

            if($(this).attr('pattern') == 'alpha'){

                var charItem= $(this).val();

                if(charItem.match(/^[a-z\s]+$/) || charItem ==""){
                    $(this).removeAttr('data-invalid').next().slideUp();
                    error = 0;
                    submitForm();
                }else{
                    $(this).attr('data-invalid','').next().slideDown();
                    error = 1;
                    submitForm();
                }
            }

            //numeric check for mobile and age

            if($(this).attr('pattern') == 'number'){

                var numericItem = $(this).val();

                if($.isNumeric(numericItem) || numericItem ==""){
                    $(this).removeAttr('data-invalid').next().slideUp();
                    error = 0;
                    submitForm();
                }else{
                    $(this).attr('data-invalid','').next().slideDown();
                    error = 1;
                    submitForm();
                }
            }

            //email

            if($(this).attr('pattern') == 'email'){
                var emailItem = $(this).val();
                var pos_atRate = emailItem.search('@');
                var pos_stop = emailItem.lastIndexOf('.');


                if(pos_atRate>0 && pos_stop> pos_atRate || emailItem == ''){
                    $(this).removeAttr('data-invalid').next().slideUp();
                    error = 0;
                    submitForm();
                }else{
                    $(this).attr('data-invalid','').next().slideDown();
                    error = 1;
                    submitForm();
                }
            }


            //password

            if($(this).attr('pattern') == 'password'  && $(this).attr('name') != 'password-confirm'){
                var passwordItem = $(this).val();

                if(passwordItem.match(/(?=^.{8,15}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&amp;*()_+} {&quot;&quot;:;'?/&gt;.&lt;,]).*$/) || passwordItem==''){
                    $(this).removeAttr('data-invalid').next().slideUp();
                    error = 0;
                    submitForm();
                }else{
                    $(this).attr('data-invalid','').next().slideDown();
                    error = 1;
                    submitForm();
                }
            }

/*            if($(this).attr('pattern') == 'domain'){
                var domainItem = $(this).val();
                alert(domainItem);
                if(domainItem.match( /^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$/) || domainItem == ""){
                    $(this).next().slideUp();
                    error = 0;
                }else{
                    $(this).next().slideDown();
                    error = 1;
                }
            }*/

            //confirm

            if($(this).attr('name') == 'password-confirm'){
                if($(this).val() == $('input[name=password]').val()){
                    $(this).removeAttr('data-invalid').next().slideUp();
                    error = 0;
                    submitForm();
                }else{
                    $(this).attr('data-invalid','').next().slideDown();
                    error = 1;
                    submitForm();
                }
            }


        });
    });


//    checkbox and signup


    $('#agree').click(submitForm);



    form.find('input').each(function(index){
        inputs = form.find('input');
        form.submit(function(e){
            e.preventDefault();
            if(inputs.val()=="" || inputs.hasAttribute('data-invalid')){
                inputs[index].next().slideDown();
            }

            $('#signUp_Submit').val('Please Wait...').attr('disabled','');
        })
    });

    cart_counter = 1;
    wish_counter = 1;
    sessionStorage.cartItems = [0];

    $('.cart-add').each(function(index){
        $(this).click(function(){

            //add to cart
            tb_row = $(this).closest('tr');
            tb_md5 = tb_row.attr('id');
            tb_domain = tb_row.find('td').eq(0).text();
            tb_price = tb_row.find('td').eq(2).text();



            var a = sessionStorage.getItem('cartItems');

            if(a.length == 1){
                var item = {
                    id:tb_md5,
                    name:tb_domain,
                    price: tb_price
                };





            }else{
                //if not empty

                cartArray.each(function(){
                    var id = $(this).data('id');
                    alert(id);
                })

            }






            $(this).toggleClass('cart-remove');

            if(cart_counter){
                $(this).attr('title','Remove from Cart');
                cart_counter--;
            }else{
                $(this).attr('title','Add to Cart');
                cart_counter++;
            }
        });
    });




    $('.wish-add').click(function(){
        $(this).toggleClass('wish-remove').attr('title','Remove from Wishlist');

        if(wish_counter){
            $(this).attr('title','Remove from Wishlist');
            wish_counter--;
        }else{
            $(this).attr('title','Add to Wishlist');
            wish_counter++;
        }

    });

    var addonToggle = 1;


    $('.free').each(function(){
        $(this).click(function(e){
            var freeButton  = $(this);
            e.preventDefault();
            $(this).closest('.items').find('.addons').slideToggle('slow',function(){
                if(addonToggle){
                    freeButton.text('Hide <<');
                    addonToggle--;
                }else{
                    freeButton.text('Free Add-ons >>');
                    addonToggle++;
                }
            });
        })
    });


/*    $('.similar').each(function(){
        $(this).click(function(e){
            e.preventDefault();
            $('#similarContainer').slideToggle('slow');
        })
    });



    $('.remove').each(function(){
        $(this).click(function(e){
            e.preventDefault();
            $(this).closest('.items').slideUp('slow',function(){
                $(this).remove();
            });
        })
    })*/

    //checkbox and radio

    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_polaris'
//            increaseArea: '-10%' // optional
    });


//    Selectize

    $('#country').select2();




});











