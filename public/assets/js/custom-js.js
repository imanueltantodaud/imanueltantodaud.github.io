

$('.mission-slider').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.sponsor-slider').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
    dots: false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    }
});


$('.blog-slider').owlCarousel({
    loop:true,
    margin:30,
    autoPlay:true,
    autoplayTimeout:2000,
    nav:true,
    navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
    dots: false,
    responsive:{
        0:{
            items:2,
            margin:10
        },
        768:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

$('.why-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
    dots: false,
    responsive:{
        0:{
            items:1
        },
        730:{
            items:2
        },
        990:{
            items:3
        },
        1200:{
            items:4
        }
    }
});

$('.courses-slider').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1200:{
            items:3
        }
    }
});

$('.my-courses-slider').owlCarousel({
    loop:true,
    margin:5,
    nav:true,
    navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        950:{
            items:3
        },
        1200:{
            items:4
        }
    }
});

$('.maincourses-slider').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1200:{
            items:4
        }
    }
});


$(document).ready(function(){
    $(".chatbot-button").click(function(){
        $(".chat-card").toggleClass("show");
    });
    $(".chatbot-button").click(function(){
        $(".chatbot-button .close-img").toggleClass("hide");
        $(".chatbot-button .open-img").toggleClass("hide");
    });
    $("#courseLessonUnxpand").hide();
    $("#courseLessonExpand").click(function(){
        $(this).hide();
        $("#courseLessonUnxpand").show();
    });
    $("#courseLessonUnxpand").click(function(){
        $(this).hide();
        $("#courseLessonExpand").show();
    });

    $('.course-details-fileds').hide();
    $('#interestedIn').change(function(){
        if($('#interestedIn').val() == 'Others') {
            $('.time-completed-col').hide();
            $('.course-details-fileds').show();
        } else {
           $('.time-completed-col').show();
           $('.course-details-fileds').hide(); 
        } 
    });

    // $("#interestedIn").change(function(){
    //     $(this).find("option:selected").each(function(){
    //         var optionValue = $(this).attr("value");
    //         console.log(optionValue)
    //         if(optionValue){
    //             $(".box").not("." + optionValue).hide();
    //             $("." + optionValue).show();
    //         } else{
    //             $(".box").hide();
    //         }
    //     });
    // }).change();





});

AOS.init();


var input = $("#search-courses");
input.focusin(function() {
    $(this).parent().addClass("blue");
});
input.focusout(function() {
    $(this).parent().removeClass("blue");
});


const loadmore = document.querySelector('#loadmore');
let currentItems = 5;
loadmore.addEventListener('click', (e) => {
    const elementList = [...document.querySelectorAll('.blog-cards-wrapper .card')];
    for (let i = currentItems; i < currentItems + 2; i++) {
        if (elementList[i]) {
            elementList[i].style.display = 'block';
        }
    }
    currentItems += 2;

    // Load more button will be hidden after list fully loaded
    if (currentItems >= elementList.length) {
        event.target.style.display = 'none';
    }
})

function onClickShowOtherValues(){
  document.getElementById('textInput').className="showOtherInput";
}

function onClickHideOtherValues(){
  document.getElementById('textInput').className="hideOtherInput";
}


$(function () {
    $('[data-toggle="popover"]').popover()
})




$("#clickme1").on("click", function(e) {
    if(jQuery('#myfileplayer').length == 0) {
        var mydiv = $("#player");
        var myvideo = $("<video id='myfileplayer' src='../videos/video-1.mp4' controls></video>");
        mydiv.append(myvideo);
    }
});

$("#clickme2").on("click", function(e) {
    if(jQuery('#myfileplayer').length == 0) {
        var mydiv = $("#player");
        var myvideo = $("<video id='myfileplayer' src='../videos/video-2.mp4' controls></video>");
        mydiv.append(myvideo);
    }
});

$("#clickme3").on("click", function(e) {
    if(jQuery('#myfileplayer').length == 0) {
        var mydiv = $("#player");
        var myvideo = $("<video id='myfileplayer' src='../videos/video-3.mp4' controls></video>");
        mydiv.append(myvideo);
    }
});

$("#clickme4").on("click", function(e) {
    if(jQuery('#myfileplayer').length == 0) {
        var mydiv = $("#player");
        var myvideo = $("<video id='myfileplayer' src='../videos/video.mp4' controls></video>");
        mydiv.append(myvideo);
    }
});



$('#assignment-slider').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1200:{
            items:4
        }
    }
});