$(document).ready(function () {

});

function group_gym()
{
    var id = $('input#idgym').val();
    $.post('assets/behindcode/group/list_worker.php', {id: id}, display_list, 'text');
}
function list_group_manager(id) {
    $.post('assets/behindcode/group/list_manager.php', {id: id}, display_list, 'text');
}

function list_group(id) {
    $.post('assets/behindcode/group/list_member.php', {id: id}, display_list, 'text');
}

function consult_group(id) {
    $("div#display-tabs").load("Consult_group.php?id="+id);
}

function delete_group(id) {
    if(id > 0) {
        if(confirm('Are you sure you want to delete this group?'))
        $.post('assets/behindcode/group/delete.php', {id: id}, feedback, 'text');
    }
    else {
        alert('Select a group please!');
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