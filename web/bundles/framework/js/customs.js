function redirectTo(path, params = ""){

    window.document.location = '/web/'+path+params;
}

function checkIdGender(id, value){
    if($('#idGenderFemale').attr('checked') === 'checked' && id !== 'idGenderFemale'){
        $('#idCustomerGenderFemale').removeAttr("checked");
    }

    if($('#idGenderMale').attr('checked') === 'checked' && id !== 'idGenderMale'){
        $('#idCustomerGenderFemale').removeAttr("checked");
    }

    if($('#idGenderOther').attr('checked') === 'checked' && id !== 'idGenderOther'){
        $('#idCustomerGenderFemale').removeAttr("checked");
    }
}

function deleteEntry(idEntry){
    document.getElementById("entry_delete_"+idEntry).click();
}

function deleteWeeklyPlan(idPlan){
    document.getElementById("plan_delete_"+idPlan).click();
}

function deleteEvent(idEvent){
    document.getElementById("event_delete_"+idEvent).click();
}

function deleteCustomerDependency(idCustomer){
    document.getElementById("customer_dependency_delete_"+idCustomer).click();
}

function deleteRecipe( idRecipe){
    document.getElementById("recipe_delete_"+idRecipe).click();
}

function deleteAppointment(idAppointment){
    document.getElementById("appointment_delete_"+idAppointment).click();
}

function openModal(){
    let button = document.getElementById('openMyIngredientModal');
    button.click()
}
