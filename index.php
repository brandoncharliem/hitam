<?php
include('config.php');
include ('fungsi.php');
?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $site_name.' - '.$site_desc; ?></title>
        <meta name="description" content="<?php echo $site_desc; ?>">
        <meta property="og:title" content="<?php echo $site_name; ?>">
        <meta property="og:description" content="<?php echo $site_desc; ?>">
        <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/style.css" />
<meta name="google-site-verification" content="M4mhXsV-c_s35ivziv50szjakHrUO_3YRqMdsgOR1QY" />
<?php
    $file_name = 'head.txt';
    $script_head = file_get_contents( $file_name );
    echo $script_head;
    ?>
</head>
    <body>

        <?php include('header.php'); ?>

        <div class="container">

<center><h3>Popular Books </h3></center>
<?php agclist();?>
<?php agclist();?>
<?php agclist();?>
<?php agclist();?>
<?php agclist();?>
<?php agclist();?>
<?php agclist();?>
<?php agclist();?>
<?php agclist();?>
        </div>
        <?php include('footer.php'); ?>

<?php
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
$site_url = parse_url($root);
$domain = str_replace('www.','',$site_url['host']); 


$file = 'domain.txt';
if (!file_exists($file)){
	fopen($file, 'w') or die('Cannot open file:  '.$file); //implicitly creates file
}


$arr = file($file,FILE_IGNORE_NEW_LINES);
if (!in_array($domain,$arr))
{
	$docp = file_put_contents($file, $domain. PHP_EOL, FILE_APPEND);
}

?>

    </body>
</html>