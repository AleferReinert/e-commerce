<?php
    $authenticated = false;
 
    if (($_SERVER['HTTP_HOST'] == 'localhost') || ($_SERVER['HTTP_HOST'] == '192.168.2.157')){
        $urlBase = "http://" . $_SERVER['SERVER_NAME'] . '/e-commerce-portifolio';
    }else{
        $urlBase = "https://" . $_SERVER['SERVER_NAME'];
    }
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>E-Commerce - Portifólio</title>

<link rel="stylesheet" href="<?php echo $urlBase; ?>/assets/css/min/style.min.css">
