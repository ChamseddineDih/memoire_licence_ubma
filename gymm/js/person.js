$(document).ready(function () {

});

function list_group_memeber(idgr)
{
    $.post('assets/behindcode/person/list_group.php', {idgr: idgr}, display_list, 'text'); 
}

function search_person() {
    var kwd = $('input#search-person').val();
    if(kwd.length > 0) {
        $.post('assets/behindcode/person/search.php', {kwd:kwd}, display_list_person, 'text');
    }
}

function consult_person(id) {
    $("div#display-tabs").load("Consult_person.php?id="+id);
}

function delete_person(id) {
    if(id > 0) {
        if(confirm('Are you sure you want to delete this user?'))
        $.post('assets/behindcode/person/delete.php', {id: id}, feedback, 'text');
    }
    else {
        alert('Select a user please!');
    }
}
function display_list_person(data) {
    $("div#display-tabs").html(data);
}


function feedback(data) {
    if(data === false) {
        window.location.href = 'message.php?cd=0&msg=FAILED';
    }
    else {
        window.location.href = 'message.php?cd=0&msg=SUCCESS';
    }
}