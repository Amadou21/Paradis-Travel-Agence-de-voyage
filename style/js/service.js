$("#visa").click(function () { 
    $(".popup").removeClass("popupInactive");
    $(".popup >div").load("serviceDetails/visaService.html",  function () {
        this; // dom element  
    });
});
$(".popupClose").click(function (e) { 
    e.preventDefault();
    $(".popup").addClass('popupInactive');
});

$("#airTicketing").click(function () { 
    $(".popup").removeClass("popupInactive");
    $(".popup >div").load("serviceDetails/airTicketing.html",  function () {
        this; // dom element  
    });
});

$("#tourPackage").click(function () { 
    $(".popup").removeClass("popupInactive");
    $(".popup >div").load("serviceDetails/tourPackage.html",  function () {
        this; // dom element  
    });
});

$("#hotelBooking").click(function () { 
    $(".popup").removeClass("popupInactive");
    $(".popup >div").load("serviceDetails/hotelBooking.html",  function () {
        this; // dom element  
    });
});

$("#travelInsurance").click(function () { 
    $(".popup").removeClass("popupInactive");
    $(".popup >div").load("serviceDetails/travelInsurance.html",  function () {
        this; // dom element  
    });
});

$("#carRentalServices").click(function () { 
    $(".popup").removeClass("popupInactive");
    $(".popup >div").load("serviceDetails/carRentalServices.html",  function () {
        this; // dom element  
    });
});