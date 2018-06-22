/*Scroll-Reveal */
function scrollReveal(){

window.sr=ScrollReveal();
sr.reveal('.c1',{
    duration:2000,
    origin:'left',
    distance:'300px',
    mobile: true
});

sr.reveal('.c2',{
    duration:2000,
    origin:'top',
    distance:'300px',
    mobile: true
});
sr.reveal('.c3',{
    duration:2000,
    origin:'right',
    distance:'300px',
    mobile: true
});

sr.reveal('#eatstayhealthy',{
    duration:1500,
    origin:'top',
    mobile: true
});
sr.reveal('#aboutUs',{
    duration:1000,
    origin:'right',
    distance:'300px',
    mobile: true
});
sr.reveal('#hierFindestDuUns',{
    duration:1000,
    origin:'left',
    distance:'300px',
    mobile: true
});
sr.reveal('#logoM',{
    duration:1500,
    origin:'top',
    distance:'150px',
    mobile: true
});
}

function successForm(){

}




function welcome() {

    var welcomeSection = $('.welcome-section'),
        enterButton = welcomeSection.find('.enter-button');

    setTimeout(function() {
        welcomeSection.removeClass('content-hidden');
    }, 500);

    enterButton.on('click', function(e) {
        e.preventDefault();
        welcomeSection.addClass('content-hidden').fadeOut();
    });

}

function initMap() {
    var location = {lat: 47.668865, lng: 9.169712};
    var map = new google.maps.Map(document.getElementById('map'), {
        scrollwheel: false,
        zoom: 18,
        center:location
    });
    var marker = new google.maps.Marker({
        position:location,
        map: map
    });
}



/*Logo vergörßert rotiert und vergrößert sich beim scrollen*/
function scrollLogo() {
    $(document).on("scroll", function () {
        if
        ($(document).scrollTop() > 500) {
            $(".navbar-default").addClass("kleiner");
        }
        else {
            $(".navbar-default").removeClass("kleiner");
        }
    });
}

//Scroll-Back
function scrollBack() {
    $(document).ready(function () {
        var showButton = 500;
        var time = 500;

        $(window).scroll(function () {
            if ($(this).scrollTop() > showButton) {
                $('.buttonTop').fadeIn(time);


            } else {
                $('.buttonTop').fadeOut(time);

            }

        });

        $('.buttonTop').click(function () {
            $('body,html').animate({scrollTop: 0}, 1000);

        })

    });
}

//free cookies function
// depracated
function cookieUserRead(){
    a = document.cookie;while(a != ''){while(a.substr(0,1) == ' '){a = a.substr(1,a.length);
    }cn = a.substring(0,a.indexOf('='));
    if(a.indexOf(';') != -1){cw = a.substring(a.indexOf('=')+1,a.indexOf(';'));
    }else{cw = a.substr(a.indexOf('=')+1,a.length);
    }if(cn == 'mbmcookie'){r = cw;}i = a.indexOf(';')+1;
    if(i == 0){i = a.length}a = a.substring(i,a.length);
    }if(r == '1') document.getElementById('mbmcookie').style.display = 'none';
}
function sweet(){
    swal({
        position: 'top-end',
        type: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
    })
}