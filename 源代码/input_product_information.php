
<?php 
require_once 'checkUser.php';
checkUser();
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/personal_center.css" rel="stylesheet">
    <link href="css/product_information_frame.css" rel="stylesheet">
    <!-- 以下两个插件用于在IE8以及以下版本浏览器支持HTML5元素和媒体查询，如果不需要用可以移除 -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
<div class="container-fluid">
    <div class="row" id="head">
        <div class="col-md-2">
            <p><img class="img-circle" src="images/logo.png"></p>
        </div>
        <div class="col-md-10">
            <h4>大学生二手交易平台</h4>
            <h4><small>College Students' Secondhand Trading Platform</small></h4>
        </div>
    </div >
    <div class="row" id="body">
        <div class="col-md-3">
           <div class="row">
               <img class="img-circle" src="images/headimage.jpg">
           </div>
            <div class="row">
                <h5><strong>我的昵称</strong></h5>
            </div>
            <div class="row">
                <ul class="list-unstyled">
                    <li><button class="btn btn-default" id="main-btn">首页</button></li>
                    <li><button class="btn btn-default" id="cart-btn" style="background-color: #307ac1;color:#fff">购物车</button></li>
                    <li><button class="btn btn-default" id="psn-btn">个人资料</button></li>
                    <li><button class="btn btn-default" id="pbuy-btn">已购买</button></li>
                    <li><button class="btn btn-default" id="pcol-btn">已收藏</button></li>
                    <li><button class="btn btn-default" id="pb-btn">已发布</button></li>
                    <li><button class="btn btn-default" id="edit-pb-btn">编辑发布</button></li>
                    <li><button class="btn btn-default" id="exit-btn">退出</button></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
<!--         <div class="container"> -->
<!--         <div class="top"> -->
<!--         <form role="form"> -->
<!--             <div class="form-group upload_firstimg"> -->
<!--                 <div class="show_upload_img" ><p>上传图片</p></div> -->
<!--                 <input type="file" name="file" class="doc"> -->
<!--                 <input type="reset" class="btn btn-warning" value="重选" /> -->
<!--             </div> -->
<!--         </form> -->
        <form action="#" role="form" class="input_message" >
          
            <div class="form-group">
                <label for="product_upload_name" class="control-label">名称</label>
                <div>
                    <input type="text" class="form-control" id="upload_name" placeholder="请输入商品名称">
                </div>
            </div>
            <div class="form-group">
                <label for="product_upload_price" class="control-label">价格</label>
                <div>
                    <input type="text" class="form-control" id="upload_price" placeholder="请输入商品价格">
                </div>
            </div>
            <div class="form-group">
                <label for="product_upload_saler" class="control-label">上传者</label>
                <div>
                    <input type="text" class="form-control" id="upload_saler" value="梁海琪" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="product_upload_location" class="control-label">所在地</label>
                <div>
                    <input type="text" class="form-control" id="upload_location" placeholder="请输入您的所在地">
                </div>
            </div>
            <div class="form-group">
                <label for="product_upload_phone" class="control-label">联系方式</label>
                <div>
                    <input type="text" class="form-control" id="upload_phone" placeholder="请输入您的联系方式">
                </div>
            </div>
            <div class="form-group main_message">
                <label for="product_upload_main">详细描述</label>
                <textarea class="form-control upload_main" rows="5"></textarea>
            </div>
            <div class="form-group more_img">
                <label for="upload_img">上传更多商品的图片 </label>
                <a href="javascript:void(0)" id="selectFileBtn">添加图片</a>
                
                <div id="attachList" class="clear"></div>
<!--                 <div class="show_more"></div> -->
            <input type="submit" name="submit" class="btn btn-default footer-btn" value="确定"/>
            <input type="reset" class="btn btn-warning footer-btn" value="重置" />
            </div>
            
        </form>
    </div>
    
<!--     <div class="middle"> -->
<!--         <form action="#" role="form"> -->
<!--             <div class="form-group main_message"> -->
<!--                 <label for="product_upload_main">详细描述</label> -->
<!--                 <textarea class="form-control upload_main" rows="5"></textarea> -->
<!--             </div> -->
<!--             <div class="form-group more_img"> -->
<!--                 <label for="upload_img">上传更多商品的图片 </label> -->
<!--                 <a href="javascript:void(0)" id="selectFileBtn">添加图片</a> -->
                
<!--                 <div id="attachList" class="clear"></div> -->
<!--                  <div class="show_more"></div> --> 
<!--             </div> -->

<!--         </form> -->
<!--     </div> -->
<!--     <button class="btn btn-default footer-btn">确定</button> -->
<!--     <input type="reset" class="btn btn-warning footer-btn" value="重置" /> -->
<!--     </div> -->
<!--     </div> -->
    </div>

    <div class="row" id="footer">
        <div class="col-md-12">
           <h5><small>copyright@2016 14级计科3班 软件工程</small></h5>
        </div>
    </div>
    <div class="row" id="trail">
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.1.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/jquery-1.6.4.js"></script>
<script>
$(document).ready(function(){
	$("#selectFileBtn").click(function(){
		$fileField = $('<input type="file" name="thumbs[]"/>');
		$fileField.hide();
		$("#attachList").append($fileField);
		$fileField.trigger("click");
		$fileField.change(function(){
		$path = $(this).val();
		$filename = $path.substring($path.lastIndexOf("\\")+1);
		$attachItem = $('<div class="attachItem"><div class="left">a.gif</div><div class="right"><a href="#" title="删除附件">删除</a></div></div>');
		$attachItem.find(".left").html($filename);
		$("#attachList").append($attachItem);		
		});
	});
	$("#attachList>.attachItem").find('a').live('click',function(obj,i){
		$(this).parents('.attachItem').prev('input').remove();
		$(this).parents('.attachItem').remove();
	});
});
    $(function(){
        /*设置导航栏按钮背景色和字体颜色*/
        $("#body .col-md-3 button").click(function(){
            $("#body .col-md-3 button").css("background-color","#ffffff");
            $("#body .col-md-3 button").css("color","#307ac1");
            $(this).css("background-color","#307ac1");
            $(this).css("color","#ffffff");
        });
        /*首页按钮事件*/
        $("#main-btn").click(function(){
           location.href = "#";
        });
        /*购物车按钮事件*/
        $("#cart-btn").click(function(){
            $("#contentiframe").attr("src","shopping_cart.html");
        });
        /*个人资料按钮事件*/
        $("#psn-btn").click(function(){
            $("#contentiframe").attr("src","shopping_cart.html");
        });
        /*已购买按钮事件*/
        $("#pbuy-btn").click(function(){
            $("#contentiframe").attr("src","shopping_cart.html");
        });
        /*已收藏按钮事件*/
        $("#pcol-btn").click(function(){
            $("#contentiframe").attr("src","shopping_cart.html");
        });
        /*已发布按钮事件*/
        $("#pb-btn").click(function(){
            $("#contentiframe").attr("src","shopping_cart.html");
        });
        /*编辑发布按钮事件*/
        $("#edit-pb-btn").click(function(){
            $("#contentiframe").attr("src","shopping_cart.html");
        });
        /*退出按钮事件*/
        $("#exit-btn").click(function(){
            $("#contentiframe").attr("src","shopping_cart.html");
        });
    })
</script>
</body>
</html>
