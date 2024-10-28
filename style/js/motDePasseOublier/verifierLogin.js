let login=$('input[name="login"]').val();

$('input[name="login"]').change(function(){
    login=$('input[name="login"]').val();
})

function verifierLogin(){
    $('.loader').show();
    $.ajax({
        url:'../../api/motDePasseOublier/verifierLogin.php',
        data:{
            login:login,
        },
        type:'POST',
        success: function(){
            window.location.href='confirmerCode.php';
            $('.loader').css('display', 'none');
        },
        error: function(){
            alert('Informations incorrectes');
            $('.loader').css('display', 'none');
        }
    })
}

$('form').submit(function(){
    
    $('form button').css('filter', 'grayscale(100)');
    verifierLogin();
    
    $('form button').css('filter', 'grayscale(0)');;
    return false;
})