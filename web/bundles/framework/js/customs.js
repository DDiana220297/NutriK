function redirectTo(path, params = ""){

    window.document.location = '/web/'+path+params;
}

function checkIdGender(id, value){
    // alert(id);
    // debugger;
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
    debugger;
    document.getElementById("entry_delete_"+idEntry).click();
}
