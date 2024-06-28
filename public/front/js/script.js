$(window).ready( function() {





    $('select').niceSelect();


    $('#id_0').datetimepicker({
        allowInputToggle: true,
        showClose: true,
        showClear: true,
        showTodayButton: true,
        format: "MM/DD/YYYY hh:mm:ss A",
        icons: {
              time:'fa fa-clock-o',
    
              date:'fa fa-calendar-o',
    
              up:'fa fa-chevron-up',
    
              down:'fa fa-chevron-down',
    
              previous:'fa fa-chevron-left',
    
              next:'fa fa-chevron-right',
    
              today:'fa fa-chevron-up',
    
              clear:'fa fa-trash',
    
              close:'fa fa-close'
            },
    
        });
        




        
$(function() {
	$('input[name="daterange"]').daterangepicker({
		opens: 'left'
	}, function (start, end, label) {
		console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	});
});



   let delayed;







    



    $('.thumbnials img').click(function () {

        $(this).addClass('selected').siblings().removeClass('selected');

        $('.img-mian img').hide().attr('src', $(this).attr('src')).fadeIn(500)

    })

    var numOfThumb = $('.thumbnials').children().length,

        MargenBitwenThumb = "1",
        TotalMargen = (numOfThumb - 1) * MargenBitwenThumb,
        ThumbWidth = (100 - TotalMargen) / numOfThumb;
        console.log(ThumbWidth)
        $('.thumbnials img').css({
        'width': ThumbWidth + "%",
        'margin-right': MargenBitwenThumb + "%"
    })


    $('.img-mian span:last-of-type').click(function () {

        if ($('.thumbnials .selected').is(":last-child")) {

            $('.thumbnials img').eq(0).click()
        } else {
            $('.thumbnials .selected').next().click()
        }
    })

    $('.img-mian span:first-of-type').click(function () {

        if ($('.thumbnials .selected').is(":first-child")) {
            $('.thumbnials img:last').click()

        } else {

            $('.thumbnials .selected').prev().click()
        }
    })








    $('.inputs span').each(function(){

        if($(this).text().length > 10 ){

            let originalText=$(this).text()
            $(this).text($(this).text().substring(0,6)+"...")
            console.log(originalText)
        }

    })


    $('.save').each(function(){
        $(this).click(function(e){
            e.stopPropagation()
            e.preventDefault()
            $(this).children().toggleClass('far')
            $(this).children().toggleClass('fas')
            
        })
    })



    $('item-body .rate').each(function(){                     //  هنا انا اعملت على قيمة افتراضية انتا احسبها على التقيمم الحقيقي
        if($(this).dataset('rate') > 10){
            $(this).removeClass('rate-bad')
            $(this).addClass('rate-good')

        }else if($(this).dataset('rate') < 10){
            $(this).removeClass('rate-good')
            $(this).addClass('rate-bad')
        }
    })


function abbrContent(src,content){

    $(src).each(function(){
        $(this).attr("title",content)
    })
}

abbrContent(".item-body p abbr","dskf sdkf dsfkj dkjf sd j dskf sdkf dsfkj dkjf sd j dskf sdkf dsfkj dkjf sd j dskf sdkf dsfkj dkjf sd j");

abbrContent(".icons  li abbr","eirwoi wrpeir wpeoi qpwer iwrep");

abbrContent(".inputs  abbr","kjf wj lwejfel lwefjlf ");




$('.ser').each(function(){

    $(this).click(function(e){
        e.stopPropagation()
    })

})



$('.img-mian .save2').each(function(){
    $(this).click(function(e){
        e.stopPropagation()
        e.preventDefault()
        $(this).children().toggleClass('far')
        $(this).children().toggleClass('fas')
        
    })
})





})






