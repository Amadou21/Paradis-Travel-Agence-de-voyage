let code=$('input[name="code"]').val();

$('input[name="code"]').change(function(){
    code=$('input[name="code"]').val();
})

function confirmerCode(){
    $('.loader').show();
    $.ajax({
        url:'../../api/motDePasseOublier/confirmerCode.php',
        data:{
            code:code,
        },
        type:'POST',
        success: function(){
            window.location.href='changerMotDePasse.php';
            $('.loader').css('display', 'none');
        },
        error: function(){
            alert('Code incorrectes');
            $('.loader').css('display', 'none');
        }
    })
}

$('form').submit(function(){
    $('form button').css('filter', 'grayscale(100)');
    confirmerCode();
    $('form button').css('filter', 'grayscale(0)');;
    return false;
})