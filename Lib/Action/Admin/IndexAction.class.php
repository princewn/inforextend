<?php
// 本类由系统自动生成，仅供测试用途
header("Content-Type: text-html; charset=utf-8");

class IndexAction extends Action {
//后台操作页面
    public function index()
	{
		$this->display();	
    }

//后台回收张页面
    public function trash()
	{
		$this->display();	
    }

//后台操作页面数据传输
	public function detail_json()
	{
		$source = M('peopleinfor');
		//读取数据库数据
		$condition['mark']=1;
		$data = $source ->where($condition)->select();
		//json格式，datagrid数据源
		echo json_encode($data);
		
	}

	public function detail_json1()
	{
		$source = M('productinfor');
		//读取数据库数据
		$condition['mark']=1;
		$data = $source ->where($condition)->select();
		//json格式，datagrid数据源
		echo json_encode($data);
		
	}
	public function detail_json2()
	{
		$source = M('show');
		//读取数据库数据
		$condition['mark']=1;
		$data = $source ->where($condition)->select();
		//json格式，datagrid数据源
		echo json_encode($data);
		
	}
	public function detail_json3()
	{
		$source = M('team');
		//读取数据库数据
		$condition['mark']=1;
		$data = $source ->where($condition)->select();
		//json格式，datagrid数据源
		echo json_encode($data);
		
	}
	public function detail_json4()
	{
		$source = M('technology');
		//读取数据库数据
		$condition['mark']=1;
		$data = $source ->where($condition)->select();
		//json格式，datagrid数据源
		echo json_encode($data);
		
	}

//回收站数据传输

public function trash_json()
	{
		$source = M('peopleinfor');
		//读取数据库数据
		$condition['mark']=0;
		$data = $source ->where($condition)->select();
		//json格式，datagrid数据源
		echo json_encode($data);
		
	}

	public function trash_json1()
	{
		$source = M('productinfor');
		//读取数据库数据
		$condition['mark']=0;
		$data = $source ->where($condition)->select();
		//json格式，datagrid数据源
		echo json_encode($data);
		
	}
	public function trash_json2()
	{
		$source = M('show');
		//读取数据库数据
		$condition['mark']=0;
		$data = $source ->where($condition)->select();
		//json格式，datagrid数据源
		echo json_encode($data);
		
	}
	public function trash_json3()
	{
		$source = M('team');
		//读取数据库数据
		$condition['mark']=0;
		$data = $source ->where($condition)->select();
		//json格式，datagrid数据源
		echo json_encode($data);
		
	}
	public function trash_json4()
	{
		$source = M('technology');
		//读取数据库数据
		$condition['mark']=0;
		$data = $source ->where($condition)->select();
		//json格式，datagrid数据源
		echo json_encode($data);
		
	}
//数据插入
	public function insert(){
		/*$data['name']=I('name');
		$data['pcharacter']=I('pcharacter');
		$data['hobby']=I('hobby');
		$data['contact']=I('contact');
		$data['professional']=I('professional');*/

		import('ORG.Net.UploadFile');
   	 	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  $_SERVER['DOCUMENT_ROOT']."/Public/infor/Uploads/";// 设置附件上传目录
   		 if(!$upload->upload()) {
   		 }else{// 上传成功
        	$info=$upload->getUploadFileInfo();
    	}

    	$data['name']=I('name');
		$data['pcharacter']=I('pcharacter');
		$data['hobby']=I('hobby');
		$data['contact']=I('contact');
		$data['professional']=I('professional');
		$data['plan']=I('plan');

		$data['picture']=$info[0]['savename'];
        $Form   =   M('peopleinfor');
        
        $result =   $Form->add($data);

           if($result)	{
				echo "1";
			}else {
				echo "0";	
			}
    }

    public function insert1(){

    	import('ORG.Net.UploadFile');
   	 	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  $_SERVER['DOCUMENT_ROOT']."/Public/infor/Uploads/";// 设置附件上传目录
   		 if(!$upload->upload()) {
   		 }else{// 上传成功
        	$info=$upload->getUploadFileInfo();
    	}

		$data['name']=I('name');
		$data['function']=I('function');
		$data['technology']=I('technology');
		$data['introduction']=I('introduction');
		$data['picture']=$info[0]['savename'];

        $Form   =   M('productinfor');

            $result =   $Form->add($data);
           if($result)	{
				echo "1";
			}else {
				echo "0";	
			}
    }

    public function insert4(){

    	import('ORG.Net.UploadFile');
   	 	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  $_SERVER['DOCUMENT_ROOT']."/Public/infor/Uploads/";// 设置附件上传目录
   		 if(!$upload->upload()) {
   		 }else{// 上传成功
        	$info=$upload->getUploadFileInfo();
    	}

		$data['name']=I('name');
		$data['content']=I('content');
		$data['link']=I('link');
		$data['other']=I('other');
		$data['picture']=$info[0]['savename'];

        $Form   =   M('technology');

            $result =   $Form->add($data);
           if($result)	{
				echo "1";
			}else {
				echo "0";	
			}
    }
    public function insert3(){

    	import('ORG.Net.UploadFile');
   	 	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  $_SERVER['DOCUMENT_ROOT']."/Public/infor/Uploads/";// 设置附件上传目录
   		 if(!$upload->upload()) {
   		 }else{// 上传成功
        	$info=$upload->getUploadFileInfo();
    	}

		$data['name']=I('name');
		$data['history']=I('history');
		$data['now']=I('now');
		$data['future']=I('future');
		$data['others']=I('others');
		

        $Form   =   M('team');

            $result =   $Form->add($data);
           if($result)	{
				echo "1";
			}else {
				echo "0";	
			}
    }
	 public function insert2(){

    	import('ORG.Net.UploadFile');
   	 	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  $_SERVER['DOCUMENT_ROOT']."/Public/infor/Uploads/";// 设置附件上传目录
   		 if(!$upload->upload()) {
   		 }else{// 上传成功
        	$info=$upload->getUploadFileInfo();
    	}

		$data['name']=I('name');
		$data['introduction']=I('introduction');
		$data['picture']=$info[0]['savename'];

        $Form   =   M('show');

            $result =   $Form->add($data);
           if($result)	{
				echo "1";
			}else {
				echo "0";	
			}
    }
 //数据编辑更新  
	public function update($id){

		$Form   =  M('peopleinfor');

		import('ORG.Net.UploadFile');
   	 	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  $_SERVER['DOCUMENT_ROOT']."/Public/infor/Uploads/";// 设置附件上传目录
   		 if(!$upload->upload()) {
   		 	$new_picture=0;
   		 }else{// 上传成功
        	$new_picture=$upload->getUploadFileInfo();	
    	}

    	$data['name']=I('name');
		$data['pcharacter']=I('pcharacter');
		$data['hobby']=I('hobby');
		$data['contact']=I('contact');
		$data['professional']=I('professional');
		$data['plan']=I('plan');


		if($new_picture)
			{$data['picture']=$new_picture[0]['savename'];}

        $condition['id']=(int)$id;
			$result = $Form->where($condition)->save($data);
			if($result) {
				echo "1";
			}
			else{
			    if(array_diff($data,$condition) || array_diff($condition,$data))
				{
				    echo "2";
				}
				else
				{
					echo "0";

				}
				//echo 0;
			}
	}

	public function update1($id){

		$Form   =  M('productinfor');

		import('ORG.Net.UploadFile');
   	 	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  $_SERVER['DOCUMENT_ROOT']."/Public/infor/Uploads/";// 设置附件上传目录
   		 if(!$upload->upload()) {
   		 	$new_picture=0;
   		 }else{// 上传成功
        	$new_picture=$upload->getUploadFileInfo();
    	}
	
		$data['name']=I('name');
		$data['function']=I('function');
		$data['technology']=I('technology');
		$data['introduction']=I('introduction');
		
		if($new_picture)
			{$data['picture']=$new_picture[0]['savename'];}

        $condition['id']=(int)$id;
		
			$result =   $Form->where($condition)->save($data);
			if($result) {
				echo "1";
			}
			else{
			    if(array_diff($data,$condition) || array_diff($condition,$data))
				{
				    echo "2";
				}
				else
				{
					echo "0";

				}
				//echo 0;
			}

	}
	public function update2($id){

		$Form   =  M('show');

		import('ORG.Net.UploadFile');
   	 	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  $_SERVER['DOCUMENT_ROOT']."/Public/infor/Uploads/";// 设置附件上传目录
   		 if(!$upload->upload()) {
   		 	$new_picture=0;
   		 }else{// 上传成功
        	$new_picture=$upload->getUploadFileInfo();
    	}
	
		$data['name']=I('name');
		$data['introduction']=I('introduction');
		
		if($new_picture)
			{$data['picture']=$new_picture[0]['savename'];}

        $condition['id']=(int)$id;
		
			$result =   $Form->where($condition)->save($data);
			if($result) {
				echo "1";
			}
			else{
			    if(array_diff($data,$condition) || array_diff($condition,$data))
				{
				    echo "2";
				}
				else
				{
					echo "0";

				}
				//echo 0;
			}
	}
	public function update3($id){

		$Form   =  M('team');

		import('ORG.Net.UploadFile');
   	 	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  $_SERVER['DOCUMENT_ROOT']."/Public/infor/Uploads/";// 设置附件上传目录
   		 if(!$upload->upload()) {
   		 	$new_picture=0;
   		 }else{// 上传成功
        	$new_picture=$upload->getUploadFileInfo();
    	}
	
		$data['name']=I('name');
		$data['history']=I('history');
		$data['now']=I('now');
		$data['future']=I('future');
		$data['others']=I('others');
        $condition['id']=(int)$id;
		
			$result =   $Form->where($condition)->save($data);
			if($result) {
				echo "1";
			}
			else{
			    if(array_diff($data,$condition) || array_diff($condition,$data))
				{
				    echo "2";
				}
				else
				{
					echo "0";

				}
				//echo 0;
			}

	}
	public function update4($id){

		$Form   =  M('technology');

		import('ORG.Net.UploadFile');
   	 	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  $_SERVER['DOCUMENT_ROOT']."/Public/infor/Uploads/";// 设置附件上传目录
   		 if(!$upload->upload()) {
   		 	$new_picture=0;
   		 }else{// 上传成功
        	$new_picture=$upload->getUploadFileInfo();
    	}
	
		$data['name']=I('name');
		$data['content']=I('content');
		$data['link']=I('link');
		$data['other']=I('other');
		
		if($new_picture)
			{$data['picture']=$new_picture[0]['savename'];}

        $condition['id']=(int)$id;
		
			$result =   $Form->where($condition)->save($data);
			if($result) {
				echo "1";
			}
			else{
			    if(array_diff($data,$condition) || array_diff($condition,$data))
				{
				    echo "2";
				}
				else
				{
					echo "0";

				}
				//echo 0;
			}
	}
//放入回收站
	public function altermark(){
		$id=I('id');
       //$id=58;
		$Form=M('peopleinfor');
		$data['mark']=0;
		$conditoin['id']=(int)$id;
		$res=$Form->where($conditoin)->save($data);
		echo $res;
	}

	public function altermark1(){
		$id=I('id');
       //$id=58;
		$Form=M('productinfor');
		$data['mark']=0;
		$conditoin['id']=(int)$id;
		$res=$Form->where($conditoin)->save($data);
		echo $res;
	}
	public function altermark2(){
		$id=I('id');
       //$id=58;
		$Form=M('show');
		$data['mark']=0;
		$conditoin['id']=(int)$id;
		$res=$Form->where($conditoin)->save($data);
		echo $res;
	}
	public function altermark3(){
		$id=I('id');
       //$id=58;
		$Form=M('team');
		$data['mark']=0;
		$conditoin['id']=(int)$id;
		$res=$Form->where($conditoin)->save($data);
		echo $res;
	}
	public function altermark4(){
		$id=I('id');
       //$id=58;
		$Form=M('technology');
		$data['mark']=0;
		$conditoin['id']=(int)$id;
		$res=$Form->where($conditoin)->save($data);
		echo $res;
	}
//恢复数据
	public function altermarkBack(){
		$id=I('id');
       //$id=58;
		$Form=M('peopleinfor');
		$data['mark']=1;
		$conditoin['id']=(int)$id;
		$res=$Form->where($conditoin)->save($data);
		echo $res;
	}
	public function altermarkBack1(){
		$id=I('id');
       //$id=58;
		$Form=M('productinfor');
		$data['mark']=1;
		$conditoin['id']=(int)$id;
		$res=$Form->where($conditoin)->save($data);
		echo $res;
	}
	public function altermarkBack2(){
		$id=I('id');
       //$id=58;
		$Form=M('show');
		$data['mark']=1;
		$conditoin['id']=(int)$id;
		$res=$Form->where($conditoin)->save($data);
		echo $res;
	}
	public function altermarkBack4(){
		$id=I('id');
       //$id=58;
		$Form=M('technology');
		$data['mark']=1;
		$conditoin['id']=(int)$id;
		$res=$Form->where($conditoin)->save($data);
		echo $res;
	}
	public function altermarkBack3(){
		$id=I('id');
       //$id=58;
		$Form=M('team');
		$data['mark']=1;
		$conditoin['id']=(int)$id;
		$res=$Form->where($conditoin)->save($data);
		echo $res;
	}
//回收站删除

	public function delete(){
		$id=I('id');
    	$Form=M('peopleinfor');
    	$result=$Form->delete($id);
    	if($result){
    		echo "1";
    	}else{
    		echo "0";
    	}
	}

	public function delete1(){
		$id=I('id');
    	$Form=M('productinfor');
    	$result=$Form->delete($id);
    	if($result){
    		echo "1";
    	}else{
    		echo "0";
    	}
	}
	public function delete2(){
		$id=I('id');
    	$Form=M('show');
    	$result=$Form->delete($id);
    	if($result){
    		echo "1";
    	}else{
    		echo "0";
    	}
	}
	public function delete3(){
		$id=I('id');
    	$Form=M('team');
    	$result=$Form->delete($id);
    	if($result){
    		echo "1";
    	}else{
    		echo "0";
    	}
	}
	public function delete4(){
		$id=I('id');
    	$Form=M('technology');
    	$result=$Form->delete($id);
    	if($result){
    		echo "1";
    	}else{
    		echo "0";
    	}
	}
//清空回收站
	public function deleteall(){
		
    	$Form=M('peopleinfor');
    	$condition['mark']=0;
    	$result=$Form->where($condition)->delete();
    	if($result){
    		echo "1";
    	}else{
    		echo "0";
    	}
	}

	public function deleteall1(){

    	$Form=M('productinfor');
    	$condition['mark']=0;
    	$result=$Form->where($condition)->delete();
    	if($result){
    		echo "1";
    	}else{
    		echo "0";
    	}
	}
	public function deleteall2(){

    	$Form=M('show');
    	$condition['mark']=0;
    	$result=$Form->where($condition)->delete();
    	if($result){
    		echo "1";
    	}else{
    		echo "0";
    	}
	}
	public function deleteall3(){

    	$Form=M('team');
    	$condition['mark']=0;
    	$result=$Form->where($condition)->delete();
    	if($result){
    		echo "1";
    	}else{
    		echo "0";
    	}
	}

public function deleteall4(){

    	$Form=M('technology');
    	$condition['mark']=0;
    	$result=$Form->where($condition)->delete();
    	if($result){
    		echo "1";
    	}else{
    		echo "0";
    	}
	}
}
?>