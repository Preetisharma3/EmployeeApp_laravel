
$(document).ready(function(event){
    event.preventDefault();

    var form = $(this);
    var formdata = form.serialize();

   

      $('#task-list').load('read.php');
});


function makeElementEditable(div) {
    div.style.border = "1px solid lavender";
    div.style.padding = "5px";
    div.style.background = "white";
    div.contentEDitable = true;
}

function updateTaskName(target, taskId) {
     var data = target.textContent;
     target.style.border = "none";
     target.style.background = "0px";
     target.style.background = "#ececec";
     target.contentEditable = false;


     $.ajax({
        url: 'update.php',
        method: 'POST',
        data: {name: data, id:taskId},
        success: function (dta){
            $('#ajax_msg').success("display","block").delay(3000).slideup(300).html(data);
            // document.getElementById("create-task").reset();
        }
    });

     

}