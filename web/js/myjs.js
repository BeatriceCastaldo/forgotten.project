$(document).ready(
    function () {
    $(".modalutente").click(function (e) {
        e.preventDefault();
        var urlPaginaEvento = $(this).attr('href');

        $.ajax({
          url: urlPaginaEvento
        }).done(function (data) {
          $('.ajax-content').html(data);
            $("#myModal1").fadeIn("fast");
        });
    });
});