<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lazy Load Tree Nodes - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="/Public/jquery-easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="/Public/jquery-easyui/themes/default/icon.css">
    <link rel="stylesheet" type="text/css" href="/Public/jquery-easyui/demo/demo.css">
    <link rel="stylesheet" type="text/css" href="/Public/jquery-easyui/themes/icon.css">
    <script type="text/javascript" src="/Public/jquery-easyui/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/jquery-easyui/jquery.easyui.min.js"></script>  

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script>
function getvalue(){
var generate_date=document.getElementById("number").value; 
return generate_date;
}
function makeitems(){
var test='<input class="sameWidth" name="content" value="can be touch" style="width:30%"/>';
                $("#addinfor").append(test);
 			    for(i=0;i<getvalue();i++){
				//var item='<tr><div class="fitem"><td><input class="sameWidth" name="lala"/></td></div></tr>';Uncaught TypeError: Cannot read property 'childNodes' of null 
				var item='<tr><td><input class="sameWidth" name="content'+i+'" value="字段'+i+'" style="width:30%"/><input class="sameWidth"  name="item'+i+'"  style="width:70%" /></td></tr>';
                $("#addinfor").append(item);
 				}
				
}
function newitem(i){
var generate_date=document.getElementsByName("item"+i)[0].value; 
return generate_date;
}
function newitems(){
 			    for(i=0;i<getvalue();i++){
                   newitem(i);
				}
				var custom=new Array(getvalue()); 
 			    for(i=0;i<getvalue();i++){
				    custom[i]=newitem(i);
				}
				alert (custom);
//U('Blog/cate',array(custom));
//$("#fmadd").attr('action',"<?php echo U('createtable',array('custom'=>custom));?>");
				return custom;
}
function formsubmit(){
document.getElementById('fmadd').submit();
alert("已经提交");
}
</script>
<script>
 $(document).ready(function(){
makeitems();
});
</script>
</head>
<body>
    <div id="dlgadd" class="easyui-dialog" style="width:400px;height:420px;padding:10px 10px;"
        closed="false" buttons="#dlgadd-buttons">
        <div class="ftitle">添加字段</div>
        <form id="fmadd"  name="formadd" method="post" enctype="multipart/form-data" action="<?php echo U('createtable');?>" >

        <table id="addinfor" class="detail">
            <tr>
                <div class="fitem">
                    <td>网页标题:</td>
                    <td><input class="sameWidth" name="webtitle" value="<?php echo ($webtitle); ?>" /></td>
                </div>
            </tr>
            <tr id="target">
                <div class="fitem">
                    <td>订制分栏:</td>
                    <td><input id="number" class="sameWidth" name="number" onBlur="" value="<?php echo ($number); ?>"/></td>
                </div>
            </tr>

        </table>
        </form>
        <div id="dlgadd-buttons">
         <a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick=" formsubmit();
">提交</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlgadd').dialog('close')">取消</a>
        </div>
      </div>
    </div>
<a href="#" onClick="newitem()">测试name</a>
<a href="#" onClick="newitems()">测试name</a>
	
	
	

</body>
</html>