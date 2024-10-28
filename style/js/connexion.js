let login=$('input[name="login"]').val();
let motDePasse=$('input[name="motDePasse"]').val();

$('input[name="login"]').change(function(){
    login=$('input[name="login"]').val();
})

$('input[name="motDePasse"]').change(function(){
    motDePasse=$('input[name="motDePasse"]').val();
})

function connexion(){
    $('.loader').show();
    $.ajax({
        url:'../api/connexion.php',
        data:{
            login:login,
            motDePasse:motDePasse
        },
        type:'POST',
        success: function(){
            window.location.href='dashboard.php';
            $('.loader').hide();
        },
        error: function(){
            alert('Informations incorrectes');
            $('.loader').hide();
        }
    })
}

$('form').submit(function(){
    $('form button').css('filter', 'grayscale(100)');
    connexion();
    $('form button').css('filter', 'grayscale(0)');;
    return false;
})