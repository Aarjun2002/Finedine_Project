(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function () {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
                function () {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                },
                function () {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });



    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });


})(jQuery);

function validateEmail() {

    let email = document.getElementById("email").value.toLowerCase();
    let error = document.getElementById("emailError");

    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    error.innerHTML = "";
    
    if(email === ""){
        error.innerHTML = "Please enter your email";
        return false;
    }

    if(!email.match(pattern)){
        error.innerHTML = "Please enter a valid email address";
        return false;
    }
}


function validateNewsletter() {

    let email = document.getElementById("newsletterEmail").value.toLowerCase();
    let error = document.getElementById("emailerror");
    let success = document.getElementById("emailSuccess");

    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    error.innerHTML = "";
    success.innerHTML = "";

    if(email === ""){
        error.innerHTML = "Please enter your email";
        return false;
    }

    if(!email.match(pattern)){
        error.innerHTML = "Please enter a valid email address";
        return false;
    }

    success.innerHTML = "Subscribed successfully!";
    return true;
}

function checkContact(){

    let contact = document.getElementById("contact").value;
    let error = document.getElementById("contactError");

    error.innerHTML = "";

    if(contact.length != 10){
        error.innerHTML = "Please enter a valid 10 digit contact number";
        return false;
    }

    if(isNaN(contact)){
        error.innerHTML = "Contact number must contain only digits";
        return false;
    }

    return true;
}
function showAlert(){

    document.getElementById("formAlert").innerHTML =
    '<div id="successAlert" class="alert alert-success alert-dismissible fade show">' +
    'Your message has been sent successfully!' +
    '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
    '</div>';

    setTimeout(function(){
        let alertBox = document.getElementById("successAlert");
        alertBox.classList.remove("show");
        alertBox.classList.add("fade");

        setTimeout(function(){
            alertBox.remove();
        }, 500);

    }, 10000);

    return false;
}

document.addEventListener("DOMContentLoaded", function () {
    let today = new Date().toISOString().split("T")[0];
    document.getElementById("date").setAttribute("min", today);
});

function validateForm() {

    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let error = document.getElementById("passwordError");

    // Password match check
    if (password !== confirmPassword) {
        error.innerHTML = "Passwords do not match";
        return false;
    } else {
        error.innerHTML = "";
    }

    // Contact validation
    if (!checkContact()) {
        return false;
    }

    return true;
}