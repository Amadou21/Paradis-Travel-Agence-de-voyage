function remplirLesStatitstiques(){
    $.ajax({
        url : '../api/dashboardControler.php',
        type:'POST',
        data:{
            eq:'2',
        },
        success: function(reponse){
            $('.nombreAction').text(reponse);
        }
    });
    
    $.ajax({
        url : '../api/dashboardControler.php',
        type:'POST',
        data:{
            eq:'3',
        },
        dataType:'JSON',
        success: function(reponse){
            $('.nombreVisite .value').text(reponse[0].nombreVisite);
            $('.nombreInteraction .value').text(reponse[0].nombreInteraction);
        }
    })

    $.ajax({
        url : '../api/dashboardControler.php',
        type:'POST',
        data:{
            eq:'4',
        },
        success: function(reponse){
            $('.nombreMail .value').text(reponse);
        }
    });
    
    $.ajax({
        url : '../api/dashboardControler.php',
        type:'POST',
        data:{
            eq:'5',
        },
        success: function(reponse){
            $('.nombreEmailSender .value').text(reponse);
        }
    });
    
    $.ajax({
        url : '../api/dashboardControler.php',
        type:'POST',
        data:{
            eq:'6',
        },
        success: function(reponse){
            $('.nombreEmailSender .value').text(reponse);
        }
    });
}

function chargerModifications(){
    function addAction(e, i){
        // fonction pour charger les modifications
        let comp="<div class='visite_main_zone'>"+
            "<div>"+
                "<h4 class='nom_page'>Date:"+e[i]['date']+"</h4>"+
                "<h3>La modification:</h3>"+
                "<p class='date_visite'>"+e[i]['contenue']+"</p>"+
            "</div>"+
        "</div>";
    
        $('.statistique_modification').append(comp);
    }

    $.ajax({
        url : '../api/dashboardControler.php',
        type:'POST',
        dataType : 'JSON',
        data:{
            eq:'1'
        },
        success: function(reponse){
            for(i=0; i<reponse.length; i++){
                addAction(reponse, i);
            }
        },
        error: function(){
            $('.statistique_modification').append('Aucune donnee de disponible');
        }
    })
}

remplirLesStatitstiques();

chargerModifications();