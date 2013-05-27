<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <table style="border-collapse: collapse; border: 1px solid black;" align="center" width="98%" cellspacing="20" cellpadding="20">
            <tr>
                <td colspan="2" style="border-bottom: 1px solid black;"><h1>Example of jQuery Plugins</h1></td>
            </tr>
            <tr>
                <td style="border-right: 1px solid black;" width="200" valign="top" bgcolor="#E9E8E2">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <br>
                        <li><a href="index.php?test=1">Basic Validation, AJAX Form submit, Notification</a></li>
                        <br>
                        <li><a href="index.php?test=2">Custom Validation, AJAX Form submit, Popup notification</a></li>
                    </ul>
                </td>
                <td valign="top" bgcolor="#FFFEEC">
                    <?php
                    if( isset($_GET['test']) ) 
                        include 'test-' . $_GET['test'] . '.php';
                    else
                        include 'default.php';
                    ?>
                </td>
            </tr>
            <tr>
                <td align="center" style="border-top: 1px solid black;" colspan="2"> This is an example of jQuery plugin usage from <a href="http://layzend.info">http://layzend.info</a></td>
            </tr>
        </table>
    </body>
</html>