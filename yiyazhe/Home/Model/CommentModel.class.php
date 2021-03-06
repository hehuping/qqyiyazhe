<?php
// +----------------------------------------------------------------------
// | YIYAZHE [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2015 http://www.yiyazhe.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: hehuping
// +----------------------------------------------------------------------
namespace Home\Model;

use Think\Model;

/**
 * 评论模型
 */
class CommentModel extends Model{
	protected $tableName = 'comment';
	
	protected $_validate = array(
			
			/* 验证评论字数 */
			array('content', '0,20', -4, self::EXISTS_VALIDATE, 'length'), //评论字数不合法

    );
	
	/**
	 * 获取单一用户评论,并且关联商品信息
	 * @param  string $email 邮箱
	 * @return array
	 */
	public function getUserComment($uid, $p){
		$p *= 20;
		$comment =  array();
		$model = M();
		$sql = "select cid from comment where uid={$uid} && status=1 order by addtime asc limit {$p},20";
		$sqlCount = "select count(*) from comment where uid={$uid} && status=1 order by addtime asc";
		$commentId = $model->query($sql);
		$countComment = $model->query($sqlCount);
		$count = $countComment[0]['count(*)'];// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('prev', '上一页');
		$Page->setConfig('next', '下一页');
		$show       = $Page->show();// 分页显示输出
		
		if(!empty($commentId)){
			foreach ($commentId as $k=>$v){
				$sql = "select goods.gid, goods.title, goods.price, goods.oldprice, goods.gimage, goods.gurl,
						comment.cid, comment.content, comment.addtime from comment left join goods on comment.gid
						= goods.gid where cid={$v['cid']} order by comment.addtime desc";
				$comArr =  $model->query($sql);
				$comment[] = $comArr[0];
			}
		}
		
		return array($comment,$show);	
	}
	
	/**
	 * 获取单一用户评论,并且关联商品信息
	 * @param  string $email 邮箱
	 * @return array
	 */
	
	
	
}