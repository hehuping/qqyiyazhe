<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes">
    <meta name="baidu-site-verification" content="SvfV8OFIMY" />
    <title>【咿呀折官网】校园折扣网，汇集青年折扣-学生折扣网，大学生折扣</title>
    <meta name="Keywords" content="咿呀折,校园折扣网,学生折扣网,青年折扣网,大学生折扣网" />
	<meta name="Description" content="咿呀折专注大学生折扣，每天精选上百款青年折扣商品，努力做一个低价，潮流，有趣的校园折扣网"/>
    <link rel="icon" href=""  type="image/png" sizes="">
    <link rel="stylesheet" href="/Public/css/index/lunbo.css">
    <link rel="stylesheet" href="/Public/css/index/neat.css" type="text/css"  />
    <link rel="stylesheet" href="/Public/css/index/index.css" type="text/css"  />
    <link rel="stylesheet" href="/Public/css/index/sweet-alert.css" />
</head>

<style>
.big:hover > img {
    transform: scale(1.05, 1.05);
    transition: .5s transform;
}

.big img{
	width:275px;
	height:275px;
}



.small:hover
{
	 transform: scale(1.02, 1.05);
    transition: .5s transform;
}

.new_goods_list > ul:hover{
	border:1px solid #ef6060;
}

.subMenu {
	position: absolute;
	top: 127px;
	height: 40px;
	z-index: 9998;
	width: 100%;
	min-width:1200px;
	background: #aabd46;

}

.info_state span{
	display:block;
}


.goods-pl{
	background: #aabd46;
	width:100%;
	height:100%;
	position:absolute;
	top:0px;
	left:0px;
	z-index:9995;
	padding-top: 12px;
  	background-color: rgba(0,0,0,0.7);/* IE9、标准浏览器、IE6和部分IE7内核的浏览器(如QQ浏览器)会读懂 */
  	display:none;
}

.goods-pl p{
	color: white;
}

/*@media \0screen\,screen\9 {/* 只支持IE6、7、8 
.goods-pl{
    background-color:#000000;
    filter:Alpha(opacity=70);
    position:static; 
    *zoom:1;
  }
.goods-pl p{
	color:white;
    position: relative;
  }  
}*/
.plcontent{
	width:100%;
	height:80%;
	overflow-x: hidden; overflow-y: auto; 
}
.plsend{
	padding-left:6%;
	padding-top:5%;
}

.plsend a{
	color:white;
}

.plsend input{
	width:70%;
	height:30px;
	border-radius: 4px 4px 4px 4px;
	border: 1px solid #fb6d78;
}

.pl_bg {
	display: inline-block;
	background: #fb6d78;
	height: 30px;
	line-height: 30px;
	width: 44px;
	text-align: center;
	border-radius: 4px 4px 4px 4px;
}
.plname{
	color: rgba(127, 253, 11, 0.92);
}

#cellclien{
	width:150px;
	color:white;
	line-height:40px;
	margin-left:50px;
	position: absolute;
}
#cellclien:hover .qrcode{
	display:block;
}

.qrcode{
	display:none;	
	position:absolute;
	z-index:9995; 
	left:-45px;
	top:40px;
}

#jifen{
	color:white;
	margin-left:150px;
	line-height:40px;
	position: absolute;
}

#weixin{
	margin-top: 65px;
	padding-left:5px;
	text-align:left;
	width:100px;
	position: absolute;
}

#weixin:hover .weixincode{
	display:block;
}

.weixincode{
	top:1px;
	height:100px;
	left:-100px;
	position: absolute;
	display:none;
}

#weibo{
	padding-left:5px;
	text-align:left;
	width:100px;
	position: absolute;
}

#weibo:hover .weibocode{
	display:block;
}

.weibocode{
	top:1px;
	height:100px;
	left:-100px;
	position: absolute;
	display:none;
}

.favorate{
	position: absolute;
    top: 5px;
    right: 5px;
    display:none;
}

.goods_pic:hover .favorate{
	display:block;
	cursor:pointer
}

.big{
	background-image:url(/Public/images/index/backimg.png);
}


</style>

<body>  
<div class="header">
    <div class="header_up">
        <div class="center">
            <ul class="top_navbar">
            <?php $login=session('user.uid'); if(!$login){ ?>
                <li><a href="/Login/qqlogin">QQ登录</a></li>
                <li class="line"></li>
                <li><a href="/Login">登录</a>&nbsp;&nbsp;<a href="/Signup">免费注册</a></li>
            <?php }else{ ?>
           		 <li class="active"><a href="/user" target="_blank"><img width="20px;" src="/uploads/<?php echo session('user.userpic'); ?>" /></a></li>
            	<li class="active"><a href="/User" target="_blank" style="color:#F50505"><?php echo session('user.username'); ?></a></li>
           		<li class="active"><a href="/Login/loginout" target="_blank" style="color:#F50505">退出</a></li>
            <?php } ?>
            
                <li class="line"></li>
                <li class="active"><a href="/user/comment">我的评论</a></li>
                <li class="line"></li>
                <li class="active"><a href="/user/favorate">我的收藏</a></li>
                <li class="line"></li>
                <li><a href="#">联系客服</a></li>
                <li class="line"></li>
                <li><a href="#">卖家报名</a></li>
            </ul>
        </div>
    </div>
    <div class="header_down">
        <div class="center">
            <div class="logo">
                <a href="/"><img src="/Public/images/index/logo.png" alt=""/></a>
            </div>
            <div class="search">
                <div class="search_box">
                 <form id="searchfrom" method="get" action="/search/index">
                    <input type="search" name="keywords" placeholder="打几个字儿呗"/>
                    <a href="javascript:void(0)" onclick="submit()" class="search_bg">GO</a> 
                    </form>
                </div>
            </div>
            <div class="top_text">
                <ul>
                    <li>
                        <img src="/Public/images/index/top_icon_01.png" alt=""/>
                        <span>每天11:00开抢</span>
                    </li>
                    <li>
                        <img src="/Public/images/index/top_icon_02.png" alt=""/>
                        <span>校园专业挑款</span>
                    </li>
                    <li>
                        <img src="/Public/images/index/top_icon_03.png" alt=""/>
                        <span>商家品质保证</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="subMenu">
	<div class="goods_navbar">
	    <div class="center">
	        <ul>
	            <li class="active">
	                <a href="">
	                    <img src="/Public/images/index/goods_type_01.png" alt=""/>
	                    <span>全部</span>
	                </a>
	            </li>
	            <li>
	                <a href="/admin/manager/Girls">
	                    <img src="/Public/images/index/goods_type_02.png" alt=""/>
	                    <span>女神</span>
	                </a>
	            </li>
	            <li>
	                <a href="/admin/manager/Boys">
	                    <img src="/Public/images/index/goods_type_03.png" alt=""/>
	                    <span>男神</span>
	                </a>
	            </li>
	            <li>
	                <a href="/admin/manager/Foods">
	                    <img src="/Public/images/index/goods_type_04.png" alt=""/>
	                    <span>美食</span>
	                </a>
	            </li>
	            <li>
	                <a href="/admin/manager/ShoeAndBags">
	                    <img src="/Public/images/index/goods_type_05.png" alt=""/>
	                    <span>鞋包</span>
	                </a>
	            </li>
	            <li>
	                <a href="/admin/manager/Dormitory">
	                    <img src="/Public/images/index/goods_type_06.png" alt=""/>
	                    <span>宅宿舍</span>
	                </a>
	            </li>
	            <li>
	                <a href="/admin/manager/Digital">
	                    <img src="/Public/images/index/goods_type_07.png" alt=""/>
	                    <span>数码</span>
	                </a>
	            </li>
	            <li>
	                <a href="/admin/manager/Beauty">
	                    <img src="/Public/images/index/goods_type_08.png" alt=""/>
	                    <span>美妆</span>
	                </a>
	            </li>
	            <li>
	                <a href="/admin/manager/Sports">
	                    <img src="/Public/images/index/goods_type_09.png" alt=""/>
	                    <span>文体</span>
	                </a>
	            </li>	            	
	                <a href="javascript:void(0)" id="cellclien">手机客户端<img class="qrcode" src="/Public/images/index/qrcode.png" /></a>          
	                <a href="javascript:void(0)" id="jifen" <?php $qiandao=session('user.qiandao');if(!$qiandao){ ?>  onclick="qiandao()"<?php } ?>><?php $qiandao=session('user.qiandao'); if($qiandao){echo "已签到 ";}else{echo "签到领积分";} ?></a>      
	        </ul>
	    </div>
	</div>
</div>	


<div class="content">
    
    <div class="new_goods center" >
        <h3>
            <img src="/Public/images/index/now.png" alt=""/>
            <span>今天宝贝总数:</span>
            <span class="vice"><?php echo ($count); ?>款</span>
        </h3>
        <ul>
        <?php foreach($goodlist as $k=>$v){ ?>
            <li class="new_goods_list">
                <ul style="position:relative">
               		<div class="goods-pl" id="scom<?php echo ($v['gid']); ?>">
	               		<div class="plcontent" id="plcontent<?php echo ($v['gid']); ?>">
		                	<?php foreach($v['comments'] as $data){ ?><p><em class="plname"><?php echo $data['username']; ?></em>：<?php echo $data['content']; ?></p><?php } ?>              	       	
	                	</div>
	                	<div class="plsend">
	                		<input type="text" id="comment<?php echo ($v['gid']); ?>" placeholder="字数少于20大于3哦"/>
	                		<a href="javascript:void(0)" class="pl_bg" onclick="sendComment(<?php echo ($v['gid']); ?>)">发送</a>
	                	</div>
                	</div>
                    <li class="goods_pic">
                        <a href="/Jump/jump/id/<?php echo ($v['gid']); ?>" target="_blank"><div class="big"><img src="<?php echo ($v['gimage']); ?>" alt="<?php echo ($v['title']); ?>" id="gimages<?php echo ($v['gid']); ?>"/></div></a>
                        <?php $pos=strpos($v['star_time'], $today); if($pos!==false){ ?><img src="/Public/images/index/xinpin.png" alt="今日上新" class="new"/><?php } ?>
                        <img alt="收藏" <?php $has=cookie("fav".$v['gid']); if(empty($has)){ ?>onclick="del(<?php echo ($v['gid']); ?>);"<?php } ?> id="favorate<?php echo ($v['gid']); ?>" src="/Public/images/index/<?php if($has){echo 'favorates.png';}else{echo 'favorate.png';} ?>" alt="" class="favorate"/>
                    </li>
                    <li class="goods_title"><p><a href="/Jump/jump/id/<?php echo ($v['gid']); ?>" target="_blank">【<?php echo ($v['cate']); ?>】<?php echo ($v['title']); ?></a></p></li>
                    <li class="goods_info">
                        <ul>
                            <li class="goods_info_left">
                                <ul>
                                    <li class="pirce">￥ <span><?php echo floatval($v['price']); ?></span></li>
                                    <li><span class="original">￥<?php echo floatval($v['oldprice']); ?></span> <span class="discount">-<?php echo (floatval($v['oldprice'])-floatval($v['price'])); ?>元</span></li>
                                    <li class="sell_out">
                                        <span>已售<?php echo ($v['yishou']); ?></span>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="goods_info_right">
                                <ul>
                                    <li class="info_state">
                                        <ul style="position:rela">
                                            <li>
                                               <a href="javascript:void(0);" onclick="<?php $has=cookie('like'.$v['gid']); if(empty($has)){echo 'like('.$v['gid'].')'; } ?>" id="za<?php echo ($v['gid']); ?>"><img id="z<?php echo ($v['gid']); ?>" width="20px" src="/Public/images/index/<?php if(empty($has)){echo 'info_icon_01.png';}else{echo 'like.png'; } ?>" alt="<?php echo ($v['praise']); ?>人喜欢"/></a>
                                                <span id="zn<?php echo ($v['gid']); ?>"><?php echo ($v['praise']); ?></span>
                                            </li>
                                            <li>
                                             <a href="javascript:void(0);" onclick="comment(<?php echo ($v['gid']); ?>);" id="pl<?php echo ($v['gid']); ?>"><img src="/Public/images/index/info_icon_02.png" alt="<?php echo ($v['comment']); ?>人评论"/></a>
                                                <span id="pn<?php echo ($v['gid']); ?>"><?php echo ($v['comment']); ?></span>
                                            </li>
                                            <li>
                                               <a href="javascript:void(0);" onclick="<?php $has=cookie('dislike'.$v['gid']); if(empty($has)){echo 'dislike('.$v['gid'].')'; } ?>" id="da<?php echo ($v['gid']); ?>"><img id="nz<?php echo ($v['gid']); ?>"  width="20px" src="/Public/images/index/<?php if(empty($has)){echo 'info_icon_03.png';}else{echo 'dislike.png'; } ?>" alt="<?php echo ($v['dislike']); ?>人不喜欢"/></a>
                                                <span id="dn<?php echo ($v['gid']); ?>"><?php echo ($v['dislike']); ?></span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="tmall">
                                        <a href="#">
                                            <img src="/Public/images/index/tmall.png" alt=""/> <?php echo ($v['shop']); ?>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="page center">
    <div style="margin: 0 auto;text-align: center; margin-top:2.5%;"><?php echo ($show); ?></div>
    </div>
</div>
<div class="footer">
        <div class="footer_up">
            <div class="center">
                <ul>
                    <li><img src="/Public/images/index/foot_info_01.png" alt=""/>100%品质保障</li>
                    <li><img src="/Public/images/index/foot_info_02.png" alt=""/>新品更新速度快</li>
                    <li><img src="/Public/images/index/foot_info_03.png" alt=""/>青春潮流的聚集地</li>
                    <li><img src="/Public/images/index/foot_info_04.png" alt=""/>专业在线客服</li>
                </ul>
            </div>
        </div>
       <div class="footer_down">
           <div class="center">
               <ul>
                   <li>
                       <ul>
                           <li class="title">关于我们</li>
                           <li><a href="#">关于我们</a></li>
                           <li><a href="#">诚聘英才</a></li>
                           <li><a href="#">校园合伙人</a></li>
                       </ul>
                   </li>
                   <li>
                       <ul>
                           <li class="title">商务合作</li>
                           <li><a href="#">卖家免费报名</a></li>
                           <li><a href="#">友情链接</a></li>
                       </ul>
                   </li>
                   <li>
                       <ul>
                           <li class="title">帮助中心</li>
                           <li><a href="#">联系我们</a></li>
                           <li><a href="#">联系客服</a></li>
                       </ul>
                   </li>
                   <li>
                       <ul>
                           <li class="title">关注我们</li>
                           <li><a href="#">新浪微博</a></li>
                           <li><a href="#">微信号</a></li>
                       </ul>
                   </li>
                   <li>
                       <ul>
                           <li class="title">购物指南</li>
                           <li><a href="#">用户注册</a></li>
                           <li><a href="#">支付方式</a></li>
                       </ul>
                   </li>
                   <li class="code">
                       <ul>
                           <li><img src="/Public/images/index/code.png" alt=""/></li>
                           <li>扫一扫下载APP</li>
                       </ul>
                   </li>
               </ul>
           </div>
       </div>
</div>
<div class="right_fix_nav">
    <ul>
        <li>
            <a href="/user"><img src="/Public/images/index/float_01.png" alt="用户中心"/><span>用户</span></a>
        </li>
        <li>
            <a href="/user/favorate"><img src="/Public/images/index/float_02.png" alt="我的收藏"/><span>收藏</span></a>
        </li>
        <li>
            <a href="/user/comment"><img src="/Public/images/index/float_03.png" alt="我的评论"/><span>评论</span></a>
        </li>
        <li id="weibo">
      	  <img class="weibocode" src="/Public/images/index/weiboqr.png"  />
            <a href="javascript:void(0)"><img src="/Public/images/index/float_04.png" alt="关注微博"/><span>微博</span></a>
        </li>
        <li id="weixin">
        	<img class="weixincode" src="/Public/images/index/weixinqr.jpg"  />
            <a href="javascript:void(0)"><img src="/Public/images/index/float_05.png" alt="关注微信"/><span>微信</span></a>
        </li>
        <li style="margin-top: 160px;">
            <a href="/Question"><img src="/Public/images/index/float_06.png" alt="意见反馈"/><span>意见</span></a>
        </li>
        <li class="return">
            <a href="javascript:;"><img src="/Public/images/index/float_07.png" alt="回到顶部"/><span>回到顶部</span></a>
        </li>
    </ul>
</div>
<input type="hidden" value="<?php echo session('user.username'); ?>" id="username" />
</body>
<script src="/Public/js/index/jquery-1.11.3.min.js"></script>
<script src="/Public/js/index/lunbo.js"></script>
<script src="/Public/js/index/prefixfree.min.js"></script>
<script src="/Public/js/index/jquery.smint.js"></script>

<script src="/Public/js/index/praise.js"></script>
<script src="/Public/js/index/sweet-alert-index.js"></script>
<!-- 轮播图JS实现 -->
<!--[if lte IE 9]>
<script src="js/jquery.placeholder.min.js"></script>
<script src="js/ie_placeholder.js"></script>
<![endif]-->
<script>
function del(id){
		$.ajax({
            type: "POST",
            url: "/admin/manager/del",
            data: {'gid':id},
            dataType: "json",
            success: function(data){
            			$("#gimages"+id).attr("src","");
            			//alert("删除成功");
                     }
        });
}
</script>
<!-- 浮动导航 -->
<script type="text/javascript">
$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });
});
</script>

</html>