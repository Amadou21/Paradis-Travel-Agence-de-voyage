let email=$('input[name="email"]').val();
let tel=$('input[name="tel"]').val();
let instagram=$('input[name="instagram"]').val();
let facebook=$('input[name="facebook"]').val();
let snapchat=$('input[name="snapchat"]').val();
let whatsapp=$('input[name="whatsapp"]').val();
let lieu=$('input[name="lieu"]').val();

$('input[name="email"]').change(function(){
    email=$('input[name="email"]').val();
})

$('input[name="tel"]').change(function(){
    tel=$('input[name="tel"]').val();
})

$('input[name="instagram"]').change(function(){
    instagram=$('input[name="instagram"]').val();
})

$('input[name="facebook"]').change(function(){
    facebook=$('input[name="facebook"]').val();
})

$('input[name="snapchat"]').change(function(){
    snapchat=$('input[name="snapchat"]').val();
})

$('input[name="whatsapp"]').change(function(){
    whatsapp=$('input[name="whatsapp"]').val();
})

$('input[name="lieu"]').change(function(){
    lieu=$('input[name="lieu"]').val();
})

function modifierInfo(){
    $('.loader').show();
    $.ajax({
        url:'../api/modifierInfo.php',
        data:{
            tel:tel,
            email:email,
            instagram:instagram,
            facebook:facebook,
            snapchat:snapchat,
            whatsapp:whatsapp,
            lieu:lieu,
        },
        type:'POST',
        success: function(){
            window.location.href='dashboard.php';
            $('.loader').hide();
        },
        error: function(){
            alert('Une erreure est survenue');
            $('.loader').hide();
        }
    })
}

$('form').submit(function(){
    $('form button').css('filter', 'grayscale(100)');
    modifierInfo();
    $('form button').css('filter', 'grayscale(0)');;
    return false;
})