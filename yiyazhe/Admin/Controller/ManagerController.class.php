<?php 
namespace Home\Controller;
namespace Admin\Controller;
use Think\Controller;
use Org\Util\String;
use Org\Util\Date;
use Home\Model\IndexModel;
class ManagerController extends Controller {
	public function boys(){
		layout(false);
		$p = I ( 'p' );
		empty($p) ? $p=1 : $p;
		$goods_model = new IndexModel();
		list($goodsArr, $show, $count) = $goods_model->getIndexGoods($p-1, '2', 80);
		
		$this->assign('count', $count);
		$this->assign('show', $show);
		$this->assign('goodlist', $goodsArr);
		$this->display('index');
	}
	public function girls(){
		layout(false);
		$p = I ( 'p' );
		empty($p) ? $p=1 : $p;
		$goods_model = new IndexModel();
		list($goodsArr, $show, $count) = $goods_model->getIndexGoods($p-1, 1, 80);
		
		$this->assign('count', $count);
		$this->assign('show', $show);
		$this->assign('goodlist', $goodsArr);
		$this->display('index');
	}
	public function beauty(){
		layout(false);
		$p = I ( 'p' );
		empty($p) ? $p=1 : $p;
		$goods_model = new IndexModel();
		list($goodsArr, $show, $count) = $goods_model->getIndexGoods($p-1, '3,275', 80);
		
		$this->assign('count', $count);
		$this->assign('show', $show);
		$this->assign('goodlist', $goodsArr);
		$this->display('index');
		
	}
	public function foods(){
		layout(false);
		$p = I ( 'p' );
		empty($p) ? $p=1 : $p;
		$goods_model = new IndexModel();
		list($goodsArr, $show, $count) = $goods_model->getIndexGoods($p-1, 5, 80);
		
		$this->assign('count', $count);
		$this->assign('show', $show);
		$this->assign('goodlist', $goodsArr);
		$this->display('index');
		
	}
	public function digital(){
		layout(false);
		$p = I ( 'p' );
		empty($p) ? $p=1 : $p;
		$goods_model = new IndexModel();
		list($goodsArr, $show, $count) = $goods_model->getIndexGoods($p-1, 188, 80);
		
		$this->assign('count', $count);
		$this->assign('show', $show);
		$this->assign('goodlist', $goodsArr);
		$this->display('index');
	}
	public function dormitory(){
		layout(false);
		$p = I ( 'p' );
		empty($p) ? $p=1 : $p;
		$goods_model = new IndexModel();
		list($goodsArr, $show, $count) = $goods_model->getIndexGoods($p-1, 187, 80);
		
		$this->assign('count', $count);
		$this->assign('show', $show);
		$this->assign('goodlist', $goodsArr);
		$this->display('index');
		
	}
	public function sports(){
		layout(false);
		$p = I ( 'p' );
		empty($p) ? $p=1 : $p;
		$goods_model = new IndexModel();
		list($goodsArr, $show, $count) = $goods_model->getIndexGoods($p-1, 8, 80);
		
		$this->assign('count', $count);
		$this->assign('show', $show);
		$this->assign('goodlist', $goodsArr);
		$this->display('index');
		
	}
	public function shoeandbags(){
		layout(false);
		$p = I ( 'p' );
		empty($p) ? $p=1 : $p;
		$goods_model = new IndexModel();
		list($goodsArr, $show, $count) = $goods_model->getIndexGoods($p-1, '4,237', 80);
		
		$this->assign('count', $count);
		$this->assign('show', $show);
		$this->assign('goodlist', $goodsArr);
		$this->display('index');
		
	}
	
	public function del(){
		$gid = I('gid');
		$model = M('goods');
		if($model->where("gid={$gid}")->delete()){
			$data = array(
					's' => 0,
					'error' =>''
			);
			$this->ajaxReturn($data);
		}
	}
}