window.onload = function() {

    let errrr = document.querySelector('.errrr');
    let errr = document.querySelector('.errr');
    let rew = document.querySelector('.rewiev_add');

    setTimeout(color, 5);
    setTimeout(color2, 5);



    function color() {
        if (errrr.innerText == "Логин или пароль неверны"){
            errrr.style.color = "red";
        } else {
            errrr.style.color = "green";
        }
    }

    function color2() {
        if (errr.innerText == "Вы успешно зарегистрированы!"){
            errr.style.color = "green";
        } else {
            errr.style.color = "red";
        }
    }




    let ref = document.querySelectorAll('.ref');
    let sale = document.querySelectorAll('.sale');
    let fa = document.querySelector('.fa-ruble-sign');
    for(let i = 0; i < ref.length; i ++){
        ref[i].addEventListener('mouseover', function(){
            let newh4 = sale[i].innerHTML;
            let newh = Math.round(parseInt(newh4)*0.8) + ' ';
            sale[i].innerHTML = newh;
            sale[i].classList.add('active');
            fa.classList.add('active');
            ref[i].addEventListener('mouseleave', function(){
                sale[i].innerHTML = newh4;
                sale[i].classList.remove('active');
                fa.classList.remove('active');
            })
        })
    }

    let connector = document.querySelectorAll('.connector');
    
    if(connector) {  
        for(let i = 0; i < connector.length; i++){
            connector[i].addEventListener('mousedown', function(e){
                e.preventDefault();
                this.classList.add('active');
            })
            document.addEventListener('mouseup', function(){
                connector[i].classList.remove('active');
            })
        }
    }



    let link_for_info = document.querySelector('.ssilka');
    let info_info = document.querySelector('.info-info');

    if(link_for_info){
        link_for_info.addEventListener('mouseup', function(){
            info_info.classList.add('active');
        })
    }


    let admin_enter = document.querySelector('.admin_enter');
    let admin_reg = document.querySelector('.admin_reg');
    let reg = document.querySelector('.reg');
    let avt = document.querySelector('.avt');

    admin_reg.addEventListener('click', function(){
        avt.classList.remove('active');
        avt.classList.remove('active2');
        errrr.innerHTML = '';
        localStorage.setItem("enterActive", "false");
        reg.classList.add('active');
        setTimeout(active2, 50);
    })

    admin_enter.addEventListener('click', function(){
        reg.classList.remove('active');
        reg.classList.remove('active2');
        avt.classList.add('active');
        localStorage.setItem("regActive", "false");
        errr.innerHTML = '';
        setTimeout(active3, 50);
    })

    function active2() {
        reg.classList.add('active2');
        localStorage.setItem("regActive", "true");
    }

    function active3() {
        avt.classList.add('active2');
        localStorage.setItem("enterActive", "true");
    }

    if (localStorage.getItem("enterActive") == "true") {
        avt.classList.add('active');
        avt.classList.add('active2');
    }

    if (localStorage.getItem("regActive") == "true") {
        reg.classList.add('active');
        reg.classList.add('active2');
    }

    let fa_times = document.querySelectorAll('.fa-times');


    for(let i = 0; i < fa_times.length; i++){
        fa_times[i].addEventListener('click', function(){
            reg.classList.remove('active');
            reg.classList.remove('active2');
            avt.classList.remove('active');
            avt.classList.remove('active2');
            localStorage.setItem("enterActive", "false");
            localStorage.setItem("regActive", "false");
            errrr.innerHTML = "";
            errr.innerHTML = "";
        })
    }


    
}