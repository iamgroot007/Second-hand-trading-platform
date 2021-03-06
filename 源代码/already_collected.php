<?php 
require_once 'checkUser.php';
checkUser();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/shopping-cart.css">
	<link rel="stylesheet" type="text/css" href="css/already_purchase.css">

</head>
<body>
	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class = "goods goods-first">

                <img src = "images/good1.jpg"/>
                <dl class="dl-horizontal">
                    <dt>价格：</dt>
                    <dd><span class="price">1299</span></dd>
                    <dt>所在地：</dt>
                    <dd>广州大学城</dd>
                    <dt>联系方式：</dt>
                    <dd>18813295242</dd>
                </dl>

                <div class="button">
                	<button style="height: 35px; width: 80px;" class="delete" type="button">取消收藏</button>
 	
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class = "goods">

                <img src = "images\product-list\5.jpg"/>
                <dl class="dl-horizontal">
                    <dt>价格：</dt>
                    <dd><span class="price">199</span></dd>
                    <dt>所在地：</dt>
                    <dd>广州大学城</dd>
                    <dt>联系方式：</dt>
                    <dd>18813295242</dd>
                </dl>

                <div class="button">
                	<button style="height: 35px; width: 80px;" class="delete" type="button">取消收藏</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class = "goods goods-last">
   
                <img src = "images\product-list\1.jpg"/>
                <dl class="dl-horizontal">
                    <dt>价格：</dt>
                    <dd><span class="price">299</span></dd>
                    <dt>所在地：</dt>
                    <dd>广州大学城</dd>
                    <dt>联系方式：</dt>
                    <dd>18813295242</dd>
                </dl>

                <div class="button">
                	<button style="height: 35px; width: 80px;" class="delete" type="button">取消收藏</button>                	

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" class="pagination">
            <ul class="pagination">
                <li>
                    <a href="#">上一页</a>
                </li>
                <li>
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">下一页</a>
                </li>
            </ul>
        </div>
    </div>

</div>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

	$("button[class='delete']").bind('click',function(){
	   $(this).parent("div").parent('div').parent("div").parent('div').next('div').children('div').children('div').addClass('border');
       $(this).parent("div").parent('div').remove();
	})

</script>
</body>
</html>