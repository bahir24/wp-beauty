<?php
session_start();

if(isset($_GET['logout'])){
    session_destroy();
    header('Location: /');
    exit();
}

if(!isset($_SESSION['authorized'])){

if(isset($_POST['submit'])){
    if($_POST['username'] =='adminer' && $_POST['password'] == 'adminer'){
        $_SESSION['authorized'] = true;
        header('Location: /');
        exit();
    }
}

?>

<form action='' method='post' autocomplete='off'>
<p>Username: <input type="text" name="username" value=""></p>
<p>Password: <input type="password" name="password" value=""></p>
<p><input type="submit" name="submit" value="Login"></p>    
</form>

<?php } else { ?>
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<link rel="stylesheet" type="text/css" media="screen" href="css/elfinder.min.css">
<script type="text/javascript" src="js/elfinder.min.js"></script>

<!-- Mac OS X Finder style for jQuery UI smoothness theme (OPTIONAL) -->
<link rel="stylesheet" type="text/css" media="screen" href="css/theme.css">

<script type="text/javascript" src="js/i18n/elfinder.ru.js"></script>

<script type="text/javascript" charset="utf-8">
    $().ready(function() {
        var elf = $('#elfinder').elfinder({
            // lang: 'ru',             // language (OPTIONAL)
            url : 'php/connector.php'  // connector URL (REQUIRED)
        }).elfinder('instance');            
    });
</script>

<!-- Element where elFinder will be created (REQUIRED) -->
<div id="elfinder"></div>
<?php } ?>