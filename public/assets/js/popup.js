
// Home popup

$(document).ready(function () {

    setTimeout(function () {
        $("#myModal .modal-content").css("opacity", "1");
        $("#myModal").css("display", "block");
    }, 8000);





    $(".close").click(function () {

        $("#myModal .modal-content").css("opacity", "0");
        setTimeout(function () {

            $("#myModal").css("display", "none");
        }, 200);

    });
});
