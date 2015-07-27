<?php
if (extension_loaded('gd') && function_exists('gd_info')) {
    echo "PHP GD library is installed on your web server";
    
}
else {
    echo "PHP GD library is NOT installed on your web server";
}
?>


<?php
echo "<br><hr/>";
$str = "<script type='text/javascript'> window.onload = alert('Google Harder next time!'); </script><br><hr/>This is some <b>bold</b> text.";
echo htmlspecialchars($str);
?>

<?php
echo "<br><hr/>";
$str = "<script type='text/javascript'> window.onload = alert('Google Harder next time!'); </script><br><hr/>This is some <b>bold</b> text.";
echo $str;
?>

<?php
$str = "<br><hr/>This is some <b>bold</b> text.";
echo $str;
?>

