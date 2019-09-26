<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/709.less', 'css/709.css');
        ?>
        <link rel="stylesheet" href="css/709.css"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

          

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
    </head>
    <body>
    <div class="type-709">
        <?php include '709-content.php'; ?>
    </div>
    </body>

    <script>
        $(document).ready(function () {
            //  DROPDOWN
            if ($(window).width() > 728) {
                $(".dropdown2").hover(
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("600");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("600");
                            $(this).toggleClass('open');
                        }
                );
            }
            if ($(window).width() < 728) {
                var i = 0;
                $(".dropdown2", this).click(function () {
                    if (i % 2 !== 0) {
                        $('span.opener', this).removeClass("close");
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("600");
                        $(this).toggleClass('open');
                    } else {
                        $('span.opener', this).addClass("close").css({'font-size': '28px', 'color': '#009900', 'opacity': '1'});
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("600");
                        $(this).toggleClass('open');
                    }
                    i++;

                });
            }
        });

    </script>
</html>