$(document).ready(function () {

});

function open_form_adding_contract(idw, idg) {

    load_content('div#display-tabs', 'Adding_contract.php?idw=' + idw + '&idg=' + idg);
}

function open_form_adding_contract_(idw, idg) {

    load_content('div#display-tabs', 'Adding_contract_.php?idw=' + idw + '&idg=' + idg);
}

function contract_worker(idw)
{
    $.post('assets/behindcode/contract/list_worker.php', {idw: idw}, display_list, 'text'); 
}

function contract_for_worker()
{
    var idw = $('input#idcon').val();
    $.post('assets/behindcode/contract/list_for_worker.php', {idw: idw}, display_list, 'text'); 
}


function consult_contract(id) {
    $("div#display-tabs").load("Consult_contract.php?id="+id);
}

function delete_contract(id) {
    if(id > 0) {
        if(confirm('Are you sure you want to delete this contract?'))
        $.post('assets/behindcode/contract/delete.php', {id: id}, feedback, 'text');
    }
    else {
        alert('Select a contract please!');
    }
}

function feedback(data) {
    if(data === false) {
        window.location.href = 'message.php?cd=0&msg=FAILED';
    }
    else {
        window.location.href = 'message.php?cd=0&msg=SUCCESS';
    }
}