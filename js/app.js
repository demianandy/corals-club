$(function(){

    // ============================= ФОРМА АВТОРИЗАЦИИ ===============================

    $('#avtoriz').click(function(e) {
        e.preventDefault();
        let password = $('#userpasswordenter').val();
        let email = $('#useremailenter').val();
        if (email.length < 1 || password.length < 1){
        $(".errrr").addClass('invalid');
        $(".errrr").html("Заполните все поля");
        $(".errrr").css({'color': 'red'});
        } else if (!email.includes("@")) {
            $(".errrr").addClass('invalid');
            $(".errrr").html("Имя почты некорректно");
            $(".errrr").css({'color': 'red'});
        } else {
            $('#logan').submit();
                $('.useremail').val("");
                $('.userpassword').val("");
        } 
    })

    // ---------------------- ФОРМА РЕГИСТРАЦИИ ============================

    $('#regan').click(function(e) {
        e.preventDefault();
        let er = /[0-9]/;
        let dog = "@";
        let avtor = $('#username').val();
        let password = $('#userpassword').val();
        let password2 = $('#userpassword2').val();
        let email = $('#useremail').val();
        if (avtor.length < 1 || email.length < 1 || password.length < 1 || password2.length < 1){
        $(".errr").addClass('invalid');
        $(".errr").html("Заполните все поля");
        $(".errr").css({'color': 'red'});
        } else if (avtor.length < 4) {
            $(".errr").addClass('invalid');
            $(".errr").html("Имя должно быть длиннее");
            $(".errr").css({'color': 'red'});
        } else if (er.test(avtor)){
            $(".errr").addClass('invalid');
            $(".errr").html("Цифры в имени недопустимы");
            $(".errr").css({'color': 'red'});
        } else if (!email.includes("@")) {
            $(".errr").addClass('invalid');
            $(".errr").html("Имя почты некорректно");
            $(".errr").css({'color': 'red'});
        } else if (password != password2) {
            $(".errr").addClass('invalid');
            $(".errr").html("Пароли не совпадают");
            $(".errr").css({'color': 'red'});
        } else {
            $(".errr").addClass('invalid');
            $(".errr").css({'color': 'green'});
            $('#regist').submit();
                $('.username').val("");
                $('.useremail').val("");
                $('.userpassword').val("");
                $('.userpassword2').val("");
        } 
    })

// ==================== ПОТЕМЕНЕНИЕ МЕНЮ ===============================

    $(window).on('scroll', function(){
        if($(this).scrollTop() > 85){
            $('.menu').addClass('active');
        }else{
            $('.menu').removeClass('active');
        }
    })
// ===================== ПЛАВНОЕ ПЕРЕМЕЩЕНИЕ МЕНЮ =======================

    var link = $('.link, .link2, .ssilka');

    link.on('click', function(e){
        e.preventDefault();

        var selector = $($(this).attr('href'));

        $('html, body').animate({
            scrollTop: selector.offset().top - 60
        }, 600);
    })

    // ========================== РАСТЯЖЕНИЕ TEXTAREA =============================


    var textarea = document.querySelector('textarea');
 
    textarea.addEventListener('keyup', function(){
      if(this.scrollTop > 0){
        this.style.height = this.scrollHeight + "px";
      }
    });



    // ---------------------- ФОРМА ОБРАТНОЙ СВЯЗИ ============================
    $('#connect').click(function(e) {
        e.preventDefault();
        let er = /[0-9]/;
        let dog = "@";
        let avtor = $('#name').val();
        let call = $('#text').val();
        let email = $('#email').val();
        if (avtor.length < 1 || email.length < 1 || call.length < 1 ){
        $(".open").addClass('invalid');
        $(".open").html("Заполните все поля");
        $(".open").css({'color': 'red'});
        } else if (call.length < 10) {
            $(".open").addClass('invalid');
            $(".open").html("Слишком короткий текст сообщения");
            $(".open").css({'color': 'red'});
        } else if (avtor.length < 4) {
            $(".open").addClass('invalid');
            $(".open").html("Имя должно быть длиннее");
            $(".open").css({'color': 'red'});
        } else if (er.test(avtor)){
            $(".open").addClass('invalid');
            $(".open").html("Цифры в имени недопустимы");
            $(".open").css({'color': 'red'});
        } else if (!email.includes("@")) {
            $(".open").addClass('invalid');
            $(".open").html("Имя почты некорректно");
            $(".open").css({'color': 'red'});
        } else {
            $(".open").addClass('invalid');
            $(".open").html("Есть контакт");
            $(".open").css({'color': 'green'});
            $('#callback').submit();
                    $('#open').val("");
                    $('#open').val("");
                    $('#open').val("");
            } 
    })

    // $('.show_text').on('click', function() {
    //     $(this).next().show('slow');
    // });


})