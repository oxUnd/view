<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <title>This is a test</title>
        
    </head>
    <body>
        <?php
            View::block('a', function () {
                echo 'Default A';
            });

            View::block('b', function() {
                echo 'Default B';
            });

            View::block('c', function() {
                echo 'Default C';
            });
        ?>
    </body>
</html>
