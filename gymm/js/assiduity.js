$(document).ready(function () {

});


function delete_assiduity(id) {
    if(id > 0) {
        if(confirm('Are you sure you want to delete this contract?'))
        $.post('assets/behindcode/assiduity/delete.php', {id: id}, feedback, 'text');
    }
    else {
        alert('Select a assiduity please!');
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