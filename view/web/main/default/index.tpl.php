<div class="hero-unit">
            <h1>TRY LazyPHP3 !</h1>
            <p></p>
            <p>LazyPHP是一个轻框架.</p>
<p>
之所以开发这么一个框架，是因为其他框架给的太多。在高压力的情况下，ORM和盘根错节的对象树反而将简单的页面请求处理复杂化，在调试和性能上带来反面效果。</p>

<p>
LP采用函数式接口封装对象，对内通过面向对象实现代码重用，对外则提供简明扼要的操作函数。开发者甚至不用理解面向对象就能很好的使用，这让一些初级程序员很容易就开发出强壮的应用。</p>
</p>
            <p><a class="btn btn-primary btn-large" href="http://ftqq.com/lazyphp/" target="_blank">帮助文档 &raquo;</a></p>
          </div>
          <div class="row-fluid">
            <div class="col-12 col-lg-4 col-sm-4">
              <h2>Ajax</h2>
              <p><div id="iii"><a href="javascript:loadit()">点我通过Ajax加载页面</a></div> </p>
              <p><a href="?c=default&a=test" target="_blank">通过Web请求test Action</a></p>

<form action="?c=default&a=test" id="theform" class="well">
<input type="text" name="user" value="LazyPHP" />
<input type="button" class="btn" value="通过Ajax请求test Action（弹窗）" onclick="send_form_pop( 'theform' )" />
</form>
<form action="?c=default&a=ajax_test" id="theform2" class="well">
<input type="text" name="user" value="LazyPHP" />
<input type="button" class="btn" value="通过Ajax提交form，form内显示提示" onclick="send_form_in( 'theform2' )" />
</form>
            </div><!--/col 4-->
            <div class="col-12 col-lg-4 col-sm-4">
              <h2>多层Layout</h2>
              <p> <a href="?c=default&a=rest" target="_blank">Rest Layout 正确返回值</a></p>
              <p><a href="?c=default&a=rest&o=1" target="_blank">错误返回值</a></p>
              <p><a href="?c=default&a=mobile" target="_blank">移动Layout</a></p>
              <p></p>
              <p><a href="?c=default&a=about" target="_blank">about</a></p>
              <p><a href="?c=default&a=contact" target="_blank">contact</a></p>
             
            </div><!--/col 4-->
            <div class="col-12 col-lg-4 col-sm-4">
              <h2>单元测试</h2>
              <p> <a href="test/index.html" target="_blank">集成JSUnit测试框架：Qunit</a></p>
              <p><a href="test/index.php" target="_blank">集成PHPUnit测试框架：SimpleTest</a> </p>
            </div><!--/col 4-->
          </div><!--/row-->
         

<script>
function loadit()
{
	$("#iii").load( '?c=default&a=ajax_load' );
}
</script>