new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 30,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }
});

$(document).ready(function () {
    $(".header__logo").click(function () {
        window.location.replace("https://espressocentral.mx");
    });
})

$(function () {

    $('form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'post.php',
            data: $('form').serialize(),
            success: function () {
            alert('¡Gracias por darnos tu opinión y ayudarnos a mejorar! Ahora serás redirigidx a la página de inicio. Da click en OK.');
            setTimeout(function () {
                window.location.href = 'https://espressocentral.mx'; // Change to your desired URL
            }, 1000);
            }, error: function () {
                alert('Hubo un error al enviar el formulario. ¡Vuelve a intentarlo!');
            }
        });

    });

});

$('.promociones').click(function() {
    // Get the target container from the data-target attribute
    var targetId = $(this).data('target');
    
    // Scroll smoothly to the target container
    $('#' + targetId)[0].scrollIntoView({
        behavior: 'smooth'
    });
});

$('.concafe').click(function() {
    // Get the target container from the data-target attribute
    var targetId = $(this).data('target');
    
    // Scroll smoothly to the target container
    $('#' + targetId)[0].scrollIntoView({
        behavior: 'smooth'
    });
});

$('.sincafe').click(function() {
    // Get the target container from the data-target attribute
    var targetId = $(this).data('target');
    
    // Scroll smoothly to the target container
    $('#' + targetId)[0].scrollIntoView({
        behavior: 'smooth'
    });
});

$('.otros').click(function() {
    // Get the target container from the data-target attribute
    var targetId = $(this).data('target');
    
    // Scroll smoothly to the target container
    $('#' + targetId)[0].scrollIntoView({
        behavior: 'smooth'
    });
});

$('.fit').click(function() {
    // Get the target container from the data-target attribute
    var targetId = $(this).data('target');
    
    // Scroll smoothly to the target container
    $('#' + targetId)[0].scrollIntoView({
        behavior: 'smooth'
    });
});

$('.antojo').click(function() {
    // Get the target container from the data-target attribute
    var targetId = $(this).data('target');
    
    // Scroll smoothly to the target container
    $('#' + targetId)[0].scrollIntoView({
        behavior: 'smooth'
    });
});


