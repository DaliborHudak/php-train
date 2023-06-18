<?php
    // include() = copies the content of a file (php/html/text)
    //             and includes it in your php file.
    //             Sections of our website become reusable
    //             Changes only need to be made in one place

    include("19_include_header.html")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19_include()</title>
</head>
<body>
    This is the Home page <br>
    Stuff about your homepage can go here<br>
</body>
</html>

<?php
    include("19_include_footer.html")

?>