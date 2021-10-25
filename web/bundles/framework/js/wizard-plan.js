$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $(".next").click(function(){

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            },
            duration: 600
        });
    });

    $(".previous").click(function(){

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            },
            duration: 600
        });
    });

    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });

    $('.day-meal-button').click(function(){
        let actualButton = $(this)[0].innerText;
        this.classList.add('day-meal-button-active');

        //Obtenemos todos los botones de la clase day-meal-button
        let buttons = document.getElementsByClassName('day-meal-button');
        if ( buttons !== undefined){
            for(const button in buttons){
                if (buttons[button].innerText !== actualButton){
                    if(buttons[button].classList !== undefined){
                        buttons[button].classList.remove('day-meal-button-active');
                    }
                }
            }
        }

        //Breakfast
        let breakfastMeals = document.getElementsByClassName('day-plan-breakfast');
        for(let meal of breakfastMeals) {
            if (actualButton === "Desayuno"){
                meal.classList.remove('day-meal-hidden')
                meal.classList.add('day-meal-visible')
            }
            else{
                meal.classList.add('day-meal-hidden')
                meal.classList.remove('day-meal-visible')
            }
        }

        //Snack
        let snackMeals = document.getElementsByClassName('day-plan-snack');
        for(const meal of snackMeals) {
            if (actualButton === "Snack"){
                meal.classList.remove('day-meal-hidden')
                meal.classList.add('day-meal-visible')
            }
            else{
                meal.classList.add('day-meal-hidden')
                meal.classList.remove('day-meal-visible')
            }
        }
        //Lunch
        let lunchMeals = document.getElementsByClassName('day-plan-lunch');
        for(const meal of lunchMeals) {
            if (actualButton === "Almuerzo"){
                meal.classList.remove('day-meal-hidden')
                meal.classList.add('day-meal-visible')
            }
            else{
                meal.classList.add('day-meal-hidden')
                meal.classList.remove('day-meal-visible')
            }
        }

        //Afternoon
        let afternoonMeals = document.getElementsByClassName('day-plan-afternoon');
        for(const meal of afternoonMeals) {
            if (actualButton === "Merienda"){
                meal.classList.remove('day-meal-hidden')
                meal.classList.add('day-meal-visible')
            }
            else{
                meal.classList.add('day-meal-hidden')
                meal.classList.remove('day-meal-visible')
            }
        }
        //Dinner
        let dinnerMeals = document.getElementsByClassName('day-plan-dinner');
        for(const meal of dinnerMeals) {
            if (actualButton === "Cena"){
                meal.classList.remove('day-meal-hidden')
                meal.classList.add('day-meal-visible')
            }
            else{
                meal.classList.add('day-meal-hidden')
                meal.classList.remove('day-meal-visible')
            }
        }
    });
});

function restDay(day){
    switch (day){
        case 'monday':
            if (document.getElementById("monday-workout-rest").checked === true){
                $('.monday-workout').hide();
            }
            else{
                $('.monday-workout').show();
            }
        case 'tuesday':
            if (document.getElementById("tuesday-workout-rest").checked === true){
                $('.tuesday-workout').hide();
            }
            else{
                $('.tuesday-workout').show();
            }
        case 'wednesday':
            if (document.getElementById("wednesday-workout-rest").checked === true){
                $('.wednesday-workout').hide();
            }
            else{
                $('.wednesday-workout').show();
            }
        case 'thursday':
            if (document.getElementById("thursday-workout-rest").checked === true){
                $('.thursday-workout').hide();
            }
            else{
                $('.thursday-workout').show();
            }
        case 'friday':
            if (document.getElementById("friday-workout-rest").checked === true){
                $('.friday-workout').hide();
            }
            else{
                $('.friday-workout').show();
            }
        case 'saturday':
            if (document.getElementById("saturday-workout-rest").checked === true){
                $('.saturday-workout').hide();
            }
            else{
                $('.saturday-workout').show();
            }
        case 'sunday':
            if (document.getElementById("sunday-workout-rest").checked === true){
                $('.sunday-workout').hide();
            }
            else{
                $('.sunday-workout').show();
            }

    }
}
