<?php
// 本类由系统自动生成，仅供测试用途
header("Content-Type: text-html; charset=utf-8");
class IndexAction extends Action {

	public function index(){
	    $s = M('show');
		$condition['mark']=1;
		$data = $s->where($condition)->select();
		$this->data = $data;
        $this->display(); 
    }
    public function people(){
		$source = M('peopleinfor');
		$condition['mark']=1;
		$data = $source ->where($condition)->select();
		$this->data = $data;
        $this->display();
    }
    public function product(){
		$source = M('productinfor');
		$condition['mark']=1;
		$data = $source ->where($condition)->select();
		$this->data = $data;
        $this->display();
    }

    public function team(){
		$source = M('team');
		$condition['mark']=1;
		$data = $source ->where($condition)->select();
		$this->data = $data;
        $this->display();	
	}
	public function technology(){
		$source = M('technology');
		$condition['mark']=1;
		$data = $source ->where($condition)->select();
		$this->data = $data;
        $this->display();	
	}
}
?>