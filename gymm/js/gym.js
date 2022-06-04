$(document).ready(function () {

});

function list_gyms_by_super() {
    var idm = $("input#idcon").val();
    $.post('assets/behindcode/gym/list_by_super.php', {idm:idm}, display_list_gym, 'text');
}

function list_gyms_by_manager() {
    var idm = $("input#idcon").val();
    $.post('assets/behindcode/gym/list_by_manager.php', {idm:idm}, display_list_gym, 'text');
}

function list_gyms_by_member() {
    var idcon = $("input#idcon").val();
    $.post('assets/behindcode/gym/list_by_member.php', {idcon:idcon}, display_list_gym, 'text');
}

function modify_state_gym(id, state) {
    if(confirm('Are sure you want to change this gym state?')) {
        $.post('assets/behindcode/gym/modify_state.php', {id:id, state:state}, display_results, 'text');
    }
}

function search_gym() {
    var kwd = $('input#search-gym').val();
    if(kwd.length > 0) {
        $.post('assets/behindcode/gym/search.php', {kwd:kwd}, display_list_gym, 'text');
    }
}

function search_gym_admin() {
    var kwd = $('input#search-gym').val();
    if(kwd.length > 0) {
        $.post('assets/behindcode/gym/search_admin.php', {kwd:kwd}, display_list_gym, 'text');
    }
}

function consult_gym(id) {
    $("div#display-tabs").load("Consult_gym.php?id="+id);
}

function delete_gym(id) {
    if(id > 0) {
        if(confirm('Are you sure you want to delete this gym?'))
        $.post('assets/behindcode/gym/delete.php', {id:id}, feedback_gym, 'text');
    }
    else {
        alert('Select a gym please!');
    }
}

function display_list_gym(data) {
    $("div#display-tabs").html(data);
}

function feedback_gym(data) {

    var msg = 'message.php?cd=0&msg=FAILED';

    if(data == true) {
        msg = 'message.php?cd=1&msg=SUCCESS';
    }

    window.location.href = msg;
}
