$(document).ready(function () {

});

function list_gym_worker (idg)

{
    var idg = $("input#idgym").val();
    $.post('assets/behindcode/worker/list_gym_.php', {idg: idg}, display_list, 'text'); 
}

function list_worker_gym(idg)

{
    
    $.post('assets/behindcode/worker/list_gym.php', {idg: idg}, display_list, 'text'); 
}

function consult_worker(id) {
    $("div#display-tabs").load("Consult_worker.php?id="+id);
}

function consult_worker_(id) {
    $("div#display-tabs").load("Consult_worker_.php?id="+id);
}

function delete_worker(id) {
    if(id > 0) {
        if(confirm('Are you sure you want to delete this worker?'))
        $.post('assets/behindcode/worker/delete.php', {id: id}, feedback, 'text');
    }
    else {
        alert('Select a worker please!');
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