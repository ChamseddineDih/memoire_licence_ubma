$(document).ready(function () {

});

function list_subscriptions_by_member() {
    var idm = $("input#idcon").val();
    $.post('assets/behindcode/subscription/list_by_member.php', {idm:idm}, display_list, 'text');
}

function add_subscription(idg) {
    // var idm = $('input#idcon').val();
    // $.post('assets/behindcode/subscription/add.php', {idm: idm, idg:idg}, feedback, 'text');
    load_content('div#display-tabs', 'Adding_subscription.php?idg=' + idg);
}

function delete_subscription(id) {
    if(id > 0) {
        if(confirm('Are you sure you want to delete this subscription?'))
        $.post('assets/behindcode/subscription/delete.php', {id: id}, feedback, 'text');
    }
    else {
        alert('Select a subscription please!');
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