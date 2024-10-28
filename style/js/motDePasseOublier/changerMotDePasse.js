let motDePasse=$('input[name="motDePasse"]').val();

$('input[name="motDePasse"]').change(function(){
    motDePasse=$('input[name="motDePasse"]').val();
})

function changerMotDePasse(){
    $('.loader').show();
    $.ajax({
        url:'../../api/motDePasseOublier/changerMotDePasse.php',
        data:{
            motDePasse:motDePasse,
        },
        type:'POST',
        success: function(){
            window.location.href='../dashboard.php';
            $('.loader').css('display', 'none');
        },
        error: function(){
            alert('Une erreur est survenue. Veuillez reessayer');
            $('.loader').css('display', 'none');
        }
    })
}

$('form').submit(function(){
    $('form button').css('filter', 'grayscale(100)');
    changerMotDePasse();
    $('form button').css('filter', 'grayscale(0)');;
    return false;
})