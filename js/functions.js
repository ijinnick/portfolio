  
$(function() {
    
    var page = $("#page").val();
    var num = 57; //number of pixels before modifying styles
    var base = 100;
    var dim = 15  + base;
    var fadingIn = false;
    var fadingOut = false;
    /*
    $("#box0,#box1,#box2,#box3,#box4,#box5,#box6").hover(function(){
        var box_id = $(this).attr('id');
        
        $("#"+box_id+" .box-overlay").css({"margin-top":"0px","height":"270px"});
        }, function(){
        $(".box-overlay").css({"margin-top":"270px","height":"0px"});
    });
    */
    $("#box0,#box1,#box2,#box3,#box4,#box5,#box6").hover(function(){
        var box_id = $(this).attr('id');
        $(".box").addClass("box-blur");
        $("#"+box_id).removeClass("box-blur");
        $("#"+box_id).addClass("box-active");
        }, function(){
        $(".box").removeClass("box-active");
        $(".box").removeClass("box-blur");
    });
    
    $(window).bind('scroll', function () {
        
        if ($(window).scrollTop() > num) {
            
            $('.nav').addClass('fixed');
            $('.bg-wrapper').css('padding-top','40px');
            
            
        } else {
            $('.nav').removeClass('fixed');
            $('.bg-wrapper').css('padding-top','0');
        }
        
        if ($(window).scrollTop() > dim)
        {
            if (!fadingIn)
            {
                $('.bg-wrapper').addClass('bg-overlay');
                $('.header').addClass('bg-overlay');
                /*$('.bg-wrapper').fadeTo("fast",0.4,function() {fadingIn = false;});*/
            
                fadingIn = true;
            }
        }
        else
        {
            if (fadingIn) {
                $('.bg-wrapper').removeClass('bg-overlay');
                $('.header').removeClass('bg-overlay');
                /*$('.bg-wrapper').fadeTo("fast",1,function() {fadingOut = false;});*/
                
                fadingIn = false;
            }
        }
        
    });

    $('#submit-btn').on('click',function(e){
        e.preventDefault();
        $('#loading').addClass('loading');

        var email = $('#email').val();
        var name = $('#name').val();
        var body = $('#body').val();

        if(name.length > 0 && body.length > 0){
            $.ajax({
                type: 'POST',
                url: 'controller/email.php',
                data: {email: email, name: name,body: body},
                success:function(data){

                    $('#name').val('');
                    $('#body').val('');
                    $('#loading').removeClass('loading');
                    alert('Successfully send inquiry');

                }
            });
        }else{
            $('#name').val(name);
            $('#body').val(body);
            alert('Please fill all fields');
            $('#loading').removeClass('loading');
        }

    });
    
    $('#box0,#box1,#box2,#box3,#box4,#box5,#box6').on('click', function ( e ) {
        
        var id = $(this).attr('data-id');
        data = 'id='+id;
        $.ajax({
            url: 'controller/modal-content.php',
            data: data,
            type: 'POST',
            success: function(result){
                $(".modal").html(result);
                $(".overlay").fadeToggle(500);
                $(".modal").removeClass("hidden");
            }
        });
        
        e.preventDefault();
    });
    
    $(".overlay").on("click",function(e){
        e.preventDefault();
        if ($(e.target).is('.modal,.image-content, h3, img')) {
        
        }
        else{
            $(".overlay").fadeToggle(500);
        }
    });
    
    $(document).on('click','.close',function(e){
        e.preventDefault();
        $(".overlay").fadeToggle(500);
    });
    
    $('#contact, #projects, #about, #header').on('click',function(e){
        e.preventDefault();
        var content = $(this).attr("id");
        $('body,html').stop(true,true).animate({scrollTop: $('.' + content).offset().top}, 1000);
        return false;
    
    });
});