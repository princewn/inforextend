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
	function formsubmit(){
	document.getElementById('fmadd').submit();
	alert("已经提交");
	}
	</script>
</head>
<body>
    <div id="dlgadd" class="easyui-dialog" style="width:400px;height:420px;padding:10px 10px;" closed="false" buttons="#dlgadd-buttons">
		<div class="ftitle">添加网页</div>
		<form id="fmadd"  name="formadd" method="post" enctype="multipart/form-data" action="<?php echo U('inserttable');?>" >
			<table id="addinfor" class="detail">
				<tr>
					<div class="fitem">
						<td>网页标题:</td>
						<td><input class="sameWidth" name="webtitle" /></td>
					</div>
				</tr>
				<tr>
					<div class="fitem">
						<td>导航栏名字:</td>
						<td><input class="sameWidth" name="navname"/></td>
					</div>
				</tr>
				<tr>
					<div class="fitem">
						<td>导航栏图标:</td>
						<td><input class="sameWidth" name="navicon"/></td>
					</div>
				</tr>
				<tr>
					<div class="fitem">
						<td>大块标题:</td>
						<td><textarea class="sameWidth" name="blocktitle" row='30' cols='30'></textarea></td>
					</div>
				</tr>
				<tr>
					<div class="fitem">
						<td>大块详情:</td>
						<td><textarea class="sameWidth" name="blockdetail" row='10' cols='30'></textarea></td>
					</div>
				</tr>
				<tr id="target">
					<div class="fitem">
						<td>订制分栏:</td>
						<td><input id="number" class="sameWidth" name="number" onBlur=""/></td>
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