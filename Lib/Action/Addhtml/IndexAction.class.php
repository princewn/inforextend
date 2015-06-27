<?php
/*
	一张showpage
	用户自定义两张数据表
	访问时动态输出
	tpl文件中：
	   index：显示定制表单
	   insertfiled：网页自定义区域的数据库写入
	   newfile：实验动态写入网页功能，目前没有用到
	   showpage:展示页面
	添加路径：http://localhost/inforextend/index.php/Addhtml/Index/writefile
	访问路径：http://localhost/inforextend/index.php/Addhtml/Index/showpage/a（a为参数）
	bY 王宁
*/
class IndexAction extends Action {
    public function index(){
         $this->display();

    }
	//接收index页面输入的数据并想custom数据库添加一条webtitle数据
    public function inserttable(){
    	$data['webtitle']=I('webtitle');
		$data['navname']=I('navname');
		$data['navicon']=I('navicon');
		$data['blocktitle']=I('blocktitle');
		$data['blockdetail']=I('blockdetail');
		$data['number']=I('number');
        $Form   =   M('custom');
        $result =   $Form->add($data);
            if( $result)	{
				echo "表格基本信息完备，三秒后进行内容订制";
				$this->success('新增成功','__URL__/insertfield/webtitle/'.$data['webtitle'].'/number/'.$data['number'].'');
				return "1";
			}else {
				$this->error('新增失败');
				return "0";	
			}
    }
	//网页自定义区域的关键字webtitle和自定义字段数num自动填充
    public function insertfield(){
	    $this->webtitle =$this->_param(4); // 进行模板变量赋值
        $this->number =$this->_param(6);
; 
        echo $this->webtitle."</br>";
        echo $this->number."</br>";
		$this->display();//没有这句话html里的就不显示了又
    }
	//网页自定义区域的数据库写入
    public function createtable(){
        $data['content']=$_POST['content'];	 
        echo $data['content']."hehehe"."</br>";
        $data['webtitle']=$_POST['webtitle'];
/*        
        $data['navicon']=$_POST['navicon'];
        $data['blocktitle']=$_POST['blocktitle'];
        $data['blockdetail']=$_POST['blockdetail'];
		$data['navicon']=$_POST['navicon'];
        $data['navicon']=$_POST['navicon'];*/
        $data['number']=$_POST['number'];
        $tosql=null;
 		for($i=0;$i<$data['number'];$i++){
           $data['item'.$i]=$_POST['item'.$i];
		   $tosql.= $data['item'.$i].' varchar(15) ,';
		   echo $tosql."<br />";
		}
		$con = mysql_connect("localhost","root","");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		else{
		  echo "DB connect"."<br />";
		}
		mysql_select_db("think", $con);
		
/*		$result = mysql_query("SELECT * FROM my_peopleinfor");//ִ��SQL���
		  while($row = mysql_fetch_array($result))//ѭ����ȡ����
		  {
			 echo $row['id']."<br />" ;//�������
		  }*/
		
		
		
		$sql = "CREATE TABLE my_".$data['webtitle']."
		(
		 pid int(15) AUTO_INCREMENT PRIMARY KEY ,"
		 .$tosql		 
		 
		 .$data['webtitle']." varchar(15)   

 		)";
		echo $sql."<br />";
		if(mysql_query($sql,$con))
		{
		   echo "table built"."<br />";
		}
		else{
			echo "fail table building"."<br />";
		}
		
		mysql_close($con);
/*		echo $this->_param(2)."<br />"; // 获取
		echo $this->_param(3)."<br />"; // 获取
		echo $this->_param(4)."<br />"; // 获取
		echo $this->_param(5)."<br />"; // 获取*/
        echo $data['number']."important"."<br />";
        echo $data['webtitle']."important"."<br />";
 		for($i=0;$i<$data['number'];$i++){
           $data['item'.$i]=$_POST['item'.$i];
		   
		   echo "第".$i."个数是".$data['item'.$i]."<br />";
		}
	}
    public function writefile(){
	        $name = 'ThinkPHP';
            $this->assign('name',$name);
/*			F('data',$name,'.html');
			F($data['webtitle'],$content);*/
			$myfile = fopen("./Tpl/Addhtml/index/newfile.html", "w") or die("Unable to open file!");
/*			$txt = "Bill Gates\n";
			fwrite($myfile, $txt);
			$txt = "Steve Jobs\n";
			fwrite($myfile, $txt);*/			
            $txt='<h3 id="section-{$v[\'id\']}" style="font-family:微软雅黑; font-size:24">{$name}</h3><p>获得的不是传来的东西</p>';			
			fwrite($myfile, $txt);
			fclose($myfile);
 // $str=$_POST['name1'];  
			  $filename = "./Tpl/Addhtml/index/newfile.html";  
			  $fe = fopen($filename,'rt');  
			  while (!feof($fe))  
				{  
				$text=fgets($fe);  
					echo "一下为文档输出</br>".$text."文档结束";  
				}  
			  fclose($fe);  
  			$this->display(newfile);
			echo "至此，传参功能已经实现"; 
			
			
			 
//!!!!! echo '<li id="s-{$v['id']}" style="width:230px;"><a href="#section-{$v['id']}">'.$row[$fieldlist[1]] .'</a></li>';



    }
	
	public function showpage($whichpage='a'){
	   //在custom中找到对应webtitle代表的列
		$Form   =   M('custom');
		$condition['webtitle'] =$whichpage;
		$data =   $Form->where($condition)->select();//.$whichpage  webtitle=b
		$this->data="获取的data".$data."</br>";
		//echo $this->data."</br>"."第一个元素是".$data[0]."</br>";
	$i=0;
		$customValue=array();
		foreach($data[0] as $color){
			//echo $color."</br>";//foreach($data as $color)只输出array
			$customValue[$i]=$color;
			$i++;
        }
/*			for ($i = 0; $i < count($customValue); $i++) {
			print $customValue[$i]."是时候输出值了</br>";
		}
		echo "Array size with count: ".count($data[0]);//$data[0][0]是空的  
		echo "#######data[0][0]的值是".$data[0][0]."######## $custom的值是".$custom[0]."发现时空的";*/
		//鸵鸟，采用下文直接php方法
		$custom=array();
		$link = mysql_connect('localhost', 'root', '');
		$customs = mysql_list_fields("think", "my_custom", $link);
		for ($i = 0; $i < count($data[0]); $i++) {
			$temp= mysql_field_name($customs, $i);
			$custom[$i]=$temp;
		}
		
		print "customs代表的是".$customs."</br>";
/*		for ($i = 0; $i < count($data[0]); $i++) {
			print $custom[$i]."</br>";
		}*/
	    $query='SELECT * FROM my_custom where';
		$this->assign('blocktitle',$customValue[4]);
		$this->assign('blockdetail',$customValue[5]);//没有这个赋值是不能传到前台模板的
		$this->assign('vavname',$customValue[2]);
		$this->assign('navicon',$customValue[3]);		
	    echo"</br>***************************************************************************************";
		//根据参数操作单独生成的数据库表单
		$link = mysql_connect('localhost', 'root', '');
		$fields = mysql_list_fields("think", "my_".$whichpage."", $link);
		$columns = mysql_num_fields($fields);
		$field = false;
		$fieldlist=array();
		echo"</br>***************表单项目************************************.</br>";
		for ($i = 0; $i < $columns; $i++) {
			$field= mysql_field_name($fields, $i);
			$fieldlist[$i]=$field;
		}
		print "field代表的是".$field."</br>";
		for ($i = 0; $i < $columns; $i++) {
			print $fieldlist[$i]."</br>";
		}
		$this->assign('webtitle',$whichpage);
		$this->assign('fieldlist',$fieldlist);//没有这个赋值是不能传到前台模板的
		$this->assign('number',$columns);
		//$this->assign("customValue",$customValue);//需要的值上面都有了
	    $query='SELECT * FROM my_'.$whichpage.'';
		
		if($r=mysql_query($query)){ 
			echo "198 query is right" ;
			$sql=mysql_query($query);
			$output="<table id='InformationTable'  border='0'><tr > "
			."</table>";
		 	echo $output;
		 }
		 

		 
		 
		 $this->display(); 





    }
	


	
	
	
	public function detail_json($page,$rows,$whichpage=1)
	{
		$source = M($whichpage);
		//读取数据库数据
		$data = $source->page($page,$rows) ->select();
		//json格式，datagrid数据源
		$total=count($source->select());
		
		$temp=array();
		$temp['rows']=$data;
		$temp['total']=$total;
		echo json_encode($temp);
        echo 'whichpage='.$whichpage;
	}
    public function insert($whichpage=1){
		$rescolumns = mysql_query("SHOW FULL COLUMNS FROM ".$whichpage."") ;
		echo $rescolumns;
        print_r($rescolumns);
		while($row = mysql_fetch_array($rescolumns)){
		//  echo '字段名称：'.$row['Field'].'-数据类型：'.$row['Type'].'-注释：'.$row['Comment'];
		//  echo '<br/><br/>';
		  print_r($row);
} 
		for($i=0;$i<$row;$i++){
//			$data[$row[$i]]=I(=$this->_param($i));
		}
        $Form   =   M($whichpage);
        $result =   $Form->add($data);
            if($result)	{
				echo "1";
			}else {
				echo "0";	
			}
			
    }
public function read($id,$whichpage=1){
    $Form   =   M('student');
    $this->data   =   $Form->find($id);

    $this->display();
 }
public function edit($id,$whichpage=1){
    $Form   =   M($whichpage);
    $this->vo   =   $Form->find($id);
    $this->display();
 }
 public function update($id,$whichpage=1){
		for($i=0;$i<$row;$i++){
//			$data[$row[$i]]=I(=$this->_param($i));
		}
        $condition['id']=(int)$id;
            $Form   =   M($whichpage);
			$result= $Form->where($condition)->save($data);
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
    $Form   =   D('student');
    if($Form->create()) {
        $result =   $Form->save();
        if($result) {
            $this->success('操作成功！');
        }else{
            $this->error('写入错误！');
        }
    }else{
        $this->error($Form->getError());
    }
 }
 public function delete($id=0,$whichpage=1){
	 $Form = M($whichpage);
     $Form->delete($id);
	 echo "<script>
     alert ('delete');
	 	  window.open('./index.php');

     </script>";
 }	
	
	
	
	
  }
?>