<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
    <title><?=$top_title . ' | ' . c('site_name') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
     body 
{
	padding-top: 60px;
	padding-bottom: 40px;
}

.sidebar-nav 
{
	padding: 9px 0;
}
    </style>
	<link href="../static/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../static/css/style.css" type="text/css" >
<?php if( isset($css) && is_array( $css ) ): ?>
        <?php foreach( $css as $cfile ): ?><link rel="stylesheet" type="text/css" href="../static/css/<?=$cfile?>">
        <?php endforeach; ?>
<?php endif; ?>
<!--[if lt IE 9]>
      <script src="../static/script/html5.js"></script>
<![endif]-->
<!--[if IE 6]>    
    		<link href="../static/css/ie6.min.css" rel="stylesheet">
<![endif]-->
</head>    
<body>
 	<?php @include_once( dirname(__FILE__) ) . DS . 'header.inc.php'; ?>  
 
    <div class="container">
      <div class="hero-unit">
      <h2><?=$title?></h2>
      <p><?=$info?></p>
      </div>
      
     <?php @include_once( dirname(__FILE__) ) . DS . 'footer.inc.php'; ?>
     
    </div><!--/.fluid-container-->
    
    <script src="http://lib.sinaapp.com/js/jquery/1.7/jquery.min.js"></script>
    <script src="../static/script/bootstrap.min.js"></script>
    <!--[if IE 6]>    
    		 <script src="../static/script/ie6.min.js"></script>
	<![endif]-->
    
    <script src="../static/script/app.js"></script>
    
    
    <?php if( isset($js) && is_array( $js ) ): ?>
        <?php foreach( $js as $jfile ): ?><script type="text/javascript" src="../static/script/<?=$jfile;?>" ></script>
        <?php endforeach; ?>
	<?php endif; ?>
	
   
</body>
</html>