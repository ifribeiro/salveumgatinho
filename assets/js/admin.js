$(document).ready(function(){
    $("#loginPainel").click(function(){
        console.log("Teste");
        Swal({
            title: 'Error!',
            text: 'Do you want to continue',
            type: 'error',
            confirmButtonText: 'Cool'
          })
    });

    function loginPainel(){
        $.ajax({
            type: 'POST',
            url: "mysubmitpage.php",
            data: $('#addCommentForm').serialize(), 
            success: function(response) {
               alert("Submitted comment"); 
                $("#commentList").append("Name:" + $("#name").val() + "<br/>comment:" + $("#body").val());
            },
           error: function() {
                //$("#commentList").append($("#name").val() + "<br/>" + $("#body").val());
               alert("There was an error submitting comment");
           }
        });
    }

});
