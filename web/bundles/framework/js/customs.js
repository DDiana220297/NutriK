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
