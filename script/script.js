$(window).on('load', function() {
    $('.win').css("display" , "none");
    $('.img_click').click(function(e) {
        e.preventDefault();
        var link = $(this).attr('data-imglink');
        $('.pic').attr('src', link);
        console.log(link);
        $(".win").fadeIn();
        query = "path="+link.split("/")[3];
        console.log(query);
        $.ajax ({
            type: "POST",
            url: "server.php",
            data: query,
            success: function(msg) {
                console.log ("Прибыли данные " + query);
            }
        });
    });
    $('.close_win').click(function() {
        $(".win").fadeOut();
    });
    $(document).mouseup(function (event){
        var div = $('.frame');
        if (!div.is(event.target) && div.has(event.target).length === 0) {
            $(".win").fadeOut();
        };
    });
});