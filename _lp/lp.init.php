<?php 

if( !defined('AROOT') ) die('NO AROOT!');
if( !defined('DS') ) define( 'DS' , DIRECTORY_SEPARATOR );

// define constant
define( 'IN' , true );

define( 'ROOT' , dirname( __FILE__ ) . DS );
define( 'CROOT' , ROOT . 'core' . DS  );

// define 
error_reporting(E_ALL^E_NOTICE);
ini_set( 'display_errors' , true );

include_once( CROOT . 'lib' . DS . 'core.function.php' );
@include_once( AROOT . 'lib' . DS . 'app.function.php' );

include_once( CROOT . 'config' .  DS . 'core.config.php' );
include_once( AROOT . 'config' . DS . 'app.config.php' );



$c = $GLOBALS['c'] = v('c') ? v('c') : c('default_controller');
$a = $GLOBALS['a'] = v('a') ? v('a') : c('default_action');

$c = basename(strtolower( z($c) ));
$a =  basename(strtolower( z($a) ));

$post_fix = '.class.php';

$cont_file = AROOT . 'controller'  . DS . $c . $post_fix;
$class_name = $c .'Controller' ; 
if( !file_exists( $cont_file ) )
{
	$cont_file = CROOT . 'controller' . DS . $c . $post_fix;
	//if( !file_exists( $cont_file ) ) die('Can\'t find controller file - ' . $c . $post_fix );
	if( !file_exists( $cont_file ) ) {
    unset($cont_file);//��ΪĬ��"404_controller"��
  }
}
unset($o);//ȷ��$oδ��ʼ��

if(isset($cont_file)) {//controller�ļ��Ǵ��ڵ�
  require_once( $cont_file );
  if( !class_exists( $class_name ) ) die('Can\'t find class - '   .  $class_name );
  $o = new $class_name;
  //if( !method_exists( $o , $a ) ) die('Can\'t find method - '   . $a . ' ');
  if( !method_exists( $o , $a ) ) {//�ļ����ڣ�����action������
    unset($o);//$oδ��ʼ������ʾ Ҫ ��ΪĬ��"404_controller"��
  }
}

//$oδ��ʼ����Ҫô��controller�����ڣ�Ҫô��action������
if(!isset($o)){//����ʾ���󣬸�ΪĬ��"404_controller"��'404_action'
  $c=c('404_controller');
  $a=c('404_action');
  $cont_file = AROOT . 'controller' . DS . $c . $post_fix;//AROOT��404_controller���ܴ���
  if( !file_exists( $cont_file ) ) {
    $cont_file = CROOT . 'controller' . DS . $c . $post_fix;//�ٶ�CROOT��404_controller���Ǵ���
  }
  require_once( $cont_file );
  $class_name = $c .'Controller' ; 
  $o = new $class_name;
}//END ��ΪĬ��"404_controller"




if(strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== FALSE && @ini_get("zlib.output_compression")) ob_start("ob_gzhandler");
call_user_func( array( $o , $a ) );

