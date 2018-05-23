$(function(){

$(".cart-img-product").on('click',function(){

$('#'+$(this).data('form')).submit();

})





$('.form-btn').click(function() {



    
    
     /*
     
          var frm=$("#"+$(this).data('form'))

	$("#"+$(this).data('form')).submit(function (e) {


    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function (data) {
            console.log('Submission was successful.');
        },
        error: function (data) {
            console.log('An error occurred.');
        },
    });
}); // end ajax

    $("#"+$(this).data('form')).submit();

});*/


    $("#"+$(this).data('form')).submit();

}); //end function






});