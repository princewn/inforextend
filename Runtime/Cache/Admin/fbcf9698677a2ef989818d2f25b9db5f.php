<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="/Public/infor/admin.docs.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/Public/infor/newCss/demo/css/patch.css">
    <link rel="stylesheet" href="/Public/Css/easyui.css" />
	<link rel="stylesheet" href="/Public/css/icon.css" />
	<script src="/Public/jquery-easyui/jquery-1.8.0.min.js"></script>
	<script src="/Public/jquery-easyui/jquery.easyui.min.js"></script>
	<link rel="stylesheet" href="/Public/infor/mycss/Admin/datagrid.css" />
  
	<title>后台管理</title>
	<style>
	.sameWidth{
	width:300px;
	max-width:400px;
	min-width:300px;
	}
	</style>
  <script type="text/javascript">
 function init(){
    var coldiv=document.getElementById("coldiv");

    var scrollTop = 0;
    window.onscroll= function(){
      scrollTop=document.body.scrollTop||document.documentElement.scrollTop;
    if(scrollTop > 250){
      coldiv.className = 'change';
            
    }else{coldiv.className = 'normal';}
    }
 }
  </script>
<script type="text/javascript">
var url='';
function add(){
//alert('hello');
	$('#dlg').dialog({ position: [0,100] });
    $('#dlg').dialog('open').dialog('setTitle','新增');

    $('#fm').form('clear');
    url = '__URL__/insert';
}

function add1(){
	$('#dlg1').dialog({ position: [0,100] });
    $('#dlg1').dialog('open').dialog('setTitle','新增');
    $('#fm1').form('clear');
    url = '__URL__/insert1';
}
function add2(){
	$('#dlg2').dialog({ position: [0,100] });
    $('#dlg2').dialog('open').dialog('setTitle','新增');
    $('#fm2').form('clear');
    url = '__URL__/insert2';
}
function add3(){
	$('#dlg3').dialog({ position: [0,100] });
    $('#dlg3').dialog('open').dialog('setTitle','新增');
    $('#fm3').form('clear');
    url = '__URL__/insert3';
}
function add4(){
	$('#dlg4').dialog({ position: [0,100] });
    $('#dlg4').dialog('open').dialog('setTitle','新增');
    $('#fm4').form('clear');
    url = '__URL__/insert4';
}
function save()
{
// $('#fm').submit();
   $('#fm').form('submit',{
           url:url,
           onsubmit:function(){return $(this).form();},
           success:function(result){ 
           if(result=='1'){
              alert("操作成功!");
              $("#dlg").dialog("close");
              $("#dg").datagrid("reload");
           }
           else if(result=='2'){
              alert("数据已是最新!");
              $("#dlg").dialog("close");
              $("#dg").datagrid("reload");
           }           
		   else{
              alert("操作失败!");
              $("#dg").datagrid("reload");
           }
       } 
    });
}

function save1()
{
// $('#fm1').submit();
   $('#fm1').form('submit',{
           url:url,
           onsubmit:function(){return $(this).form();},
           success:function(result){
           if(result=="1"){
              alert("操作成功!");
              $("#dlg1").dialog("close");
              $("#dg1").datagrid("reload");
           }
           else if(result=='2'){
              alert("数据已是最新!");
              $("#dlg1").dialog("close");
              $("#dg1").datagrid("reload");
           } 
		   else{
              alert("操作失败!");
           }
       } 
    });
}
function save2()
{
// $('#fm2').submit();
   $('#fm2').form('submit',{
           url:url,
           onsubmit:function(){return $(this).form();},
           success:function(result){ 
           if(result=='1'){
              alert("操作成功!");
              $("#dlg2").dialog("close");
              $("#dg2").datagrid("reload");
           }
           else if(result=='2'){
              alert("数据已是最新!");
              $("#dlg2").dialog("close");
              $("#dg2").datagrid("reload");
           }
		   else{
              alert("操作失败!");
              $("#dg2").datagrid("reload");
           }
       } 
    });
}
function save3()
{
// $('#fm3').submit();
   $('#fm3').form('submit',{
           url:url,
           onsubmit:function(){return $(this).form();},
           success:function(result){ 
           if(result=='1'){
              alert("操作成功!");
              $("#dlg3").dialog("close");
              $("#dg3").datagrid("reload");
           }
           else if(result=='2'){
              alert("数据已是最新!");
              $("#dlg3").dialog("close");
              $("#dg3").datagrid("reload");
           } 
		              else{
              alert("操作失败!");
              $("#dg3").datagrid("reload");
           }
       } 
    });
}
function save4()
{
// $('#fm3').submit();
   $('#fm4').form('submit',{
           url:url,
           onsubmit:function(){return $(this).form();},
           success:function(result){ 
           if(result=='1'){
              alert("操作成功!");
              $("#dlg4").dialog("close");
              $("#dg4").datagrid("reload");
           }
           else if(result=='2'){
              alert("数据已是最新!");
              $("#dlg4").dialog("close");
              $("#dg4").datagrid("reload");
           } 
		              else{
              alert("操作失败!");
              $("#dg4").datagrid("reload");
           }
       } 
    });
}
function edit(index){
    //var row = $('#dg').datagrid('getSelected');
    var row = $('#dg').datagrid('getData').rows[index];
    if (row){
	    $('#dlg').dialog({ position: [0,100] });
        $('#dlg').dialog('open').dialog('setTitle','编辑');
        $('#fm').form('clear');
        $('#fm').form('load',{name:row.name,pcharacter:row.pcharacter,hobby:row.hobby,contact:row.contact,professional:row.professional});
        url = '__URL__/update?id='+row.id;
    }

}

function edit1(index){

    //var row = $('#dg1').datagrid('getSelected');
    var row = $('#dg1').datagrid('getData').rows[index];
    if (row){
	    $('#dlg1').dialog({ position: [0,100] });
        $('#dlg1').dialog('open').dialog('setTitle','编辑');
        $('#fm1').form('clear');
        $('#fm1').form('load',{name:row.name,function:row.function,technology:row.technology,introduction:row.introduction});
        url = '__URL__/update1/id/'+row.id;
    }
}
function edit2(index){
    //var row = $('#dg2').datagrid('getSelected');
    var row = $('#dg2').datagrid('getData').rows[index];
    if (row){
	    $('#dlg2').dialog({ position: [0,100] });
        $('#dlg2').dialog('open').dialog('setTitle','编辑');
        $('#fm2').form('clear');
        $('#fm2').form('load',{name:row.name,introduction:row.introduction});
        url = '__URL__/update2?id='+row.id;
    }

}
function edit3(index){
    //var row = $('#dg3').datagrid('getSelected');
    var row = $('#dg3').datagrid('getData').rows[index];
    if (row){
	    $('#dlg3').dialog({ position: [0,100] });
        $('#dlg3').dialog('open').dialog('setTitle','编辑');
        $('#fm3').form('clear');
        $('#fm3').form('load',{name:row.name,history:row.history,now:row.now,future:row.future});
        url = '__URL__/update3?id='+row.id;
    }

}
function edit4(index){
    //var row = $('#dg2').datagrid('getSelected');
    var row = $('#dg4').datagrid('getData').rows[index];
    if (row){
	    $('#dlg4').dialog({ position: [0,100] });
        $('#dlg4').dialog('open').dialog('setTitle','编辑');
        $('#fm4').form('clear');
        $('#fm4').form('load',{name:row.name,content:row.content,link:row.link,picture:row.picture,other:row.other});
        url = '__URL__/update4?id='+row.id;
    }

}
function firstdel(index){
    //var row = $('#dg').datagrid('getSelected');
    var row = $('#dg').datagrid('getData').rows[index];
    if (row){
        $.messager.confirm('确认删除','您确定要把此成员放入回收站吗?',function(r){
            if (r){
                $.post('__URL__/altermark',{id:row.id},function(result){
                    if (result=="1"){
                        $('#dg').datagrid('reload');    // reload the user data
                    } else {
                        $.messager.show({   // show error message
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    }
                },'json');
            }
        });
    }
}

function firstdel1(index){
    //var row = $('#dg1').datagrid('getSelected');
    var row = $('#dg1').datagrid('getData').rows[index];
    if (row){
        $.messager.confirm('确认删除','您确定要把此产品放入回收站吗?',function(r){
            if (r){
                $.post('__URL__/altermark1',{id:row.id},function(result){
                    if (result=="1"){
                        $('#dg1').datagrid('reload');    // reload the user data
                    } else {
                        $.messager.show({   // show error message
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    }
                },'json');
            }
        });
    }
}
function firstdel2(index){
    //var row = $('#dg').datagrid('getSelected');
    var row = $('#dg2').datagrid('getData').rows[index];
    if (row){
        $.messager.confirm('确认删除','您确定要把此成员放入回收站吗?',function(r){
            if (r){
                $.post('__URL__/altermark2',{id:row.id},function(result){
                    if (result=="1"){
                        $('#dg2').datagrid('reload');    // reload the user data
                    } else {
                        $.messager.show({   // show error message
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    }
                },'json');
            }
        });
    }
}
function firstdel3(index){
    //var row = $('#dg3').datagrid('getSelected');
    var row = $('#dg3').datagrid('getData').rows[index];
    if (row){
        $.messager.confirm('确认删除','您确定要把此成员放入回收站吗?',function(r){
            if (r){
                $.post('__URL__/altermark3',{id:row.id},function(result){
                    if (result=="1"){
                        $('#dg3').datagrid('reload');    // reload the user data
                    } else {
                        $.messager.show({   // show error message
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    }
                },'json');
            }
        });
    }
}
function firstdel4(index){
    //var row = $('#dg').datagrid('getSelected');
    var row = $('#dg4').datagrid('getData').rows[index];
    if (row){
        $.messager.confirm('确认删除','您确定要把此成员放入回收站吗?',function(r){
            if (r){
                $.post('__URL__/altermark4',{id:row.id},function(result){
                    if (result=="1"){
                        $('#dg4').datagrid('reload');    // reload the user data
                    } else {
                        $.messager.show({   // show error message
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    }
                },'json');
            }
        });
    }
}
 function rowformater(value,row,index)
 {
 return "<a href='javascript:void(0)' target='_blank' onclick='edit("+index+")'>编辑</a>"+"&nbsp;&nbsp;&nbsp;"+" <a href='javascript:void(0)' onclick='firstdel("+index+")'>删除</a>";
 }
 function rowformater1(value,row,index)
 {
 return "<a href='javascript:void(0)' target='_blank' onclick='edit1("+index+")'>编辑</a>"+"&nbsp;&nbsp;&nbsp;"+" <a href='javascript:void(0)' onclick='firstdel1("+index+")'>删除</a>";
 }
  function rowformater2(value,row,index)
 {
 return "<a href='javascript:void(0)' target='_blank' onclick='edit2("+index+")'>编辑</a>"+"&nbsp;&nbsp;&nbsp;"+" <a href='javascript:void(0)' onclick='firstdel2("+index+")'>删除</a>";
 }
  function rowformater3(value,row,index)
 {
 return "<a href='javascript:void(0)' target='_blank' onclick='edit3("+index+")'>编辑</a>"+"&nbsp;&nbsp;&nbsp;"+" <a href='javascript:void(0)' onclick='firstdel3("+index+")'>删除</a>";
 }
  function rowformater4(value,row,index)
 {
 return "<a href='javascript:void(0)' target='_blank' onclick='edit4("+index+")'>编辑</a>"+"&nbsp;&nbsp;&nbsp;"+" <a href='javascript:void(0)' onclick='firstdel4("+index+")'>删除</a>";
 }
</script>
<script>

/*	function showTable(a){
     alert(a);
	 //var msgBox= $("#tableJeil table:eq("+a+")") ;
	 //var msgBox= $("#tableJeil table")[a] ;
	 var msgBox= $("#dg")[a] ;
	 alert(msgBox.outerHTML);
	 $("#showContainer").html("<tbody>"+msgBox.outerHTML+"</tbody>"); 
	 alert( $("#showContainer").html());
	}*/
	
</script>
<script type="text/javascript"> 
function showTable(a){
    $("#panel"+a+"").slideToggle("slow");
    //$("#panel"+a+"").css({"position":"absolute","top":"200px","left":"200px"});

}
</script>
<style>
.p{
color:#FFFFFF;
}
.panel
{
height:auto;
/*position:relative;
left:-999px;*/
/*display:none;
*/}
</style>
</head>
<body data-spy="scroll" data-target="#coldiv" onLoad="init()">
	<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <a href="#" class="navbar-brand">Accenture</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="./admin">后台管理</a>
        </li>
        <li>
          <a href="./trash">回收站</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

 <div class="bs-docs-header" id="content">
      <div class="container">
        <h1>后台管理</h1>
        <p>数据查找、增加、编辑、删除</p>
      </div>
 </div>


 <div class="container bs-docs-container">
      <div class="row">
        <div class="col-md-9" role="main">
          <div class="bs-docs-section">
             <p id="tools1"></p> 
<table id = "dg" class="easyui-datagrid" title="成员列表" style="width:auto; text-align:center;"  rownumbers="true" toolbar="#toolbar" singleSelect="true" pagination="true" fitColumns="true" data-options="url:'<?php echo U(detail_json);?>'">
    <thead>
         <tr>
            <th data-options="field:'id',width:80">序号</th>
            <th data-options="field:'name',width:80">名字</th>
            <th data-options="field:'pcharacter',width:80">性格</th>
            <th data-options="field:'hobby',width:80">爱好</th>
            <th data-options="field:'contact',width:80">联系方式</th>
            <th data-options="field:'professional',width:80">专业</th>
			 <th data-options="field:'plan',width:80">plan</th>
            <th data-options="field:'picture',width:80">头像</th>
            <th data-options="field:'ids',width:80,formatter:rowformater">操作</th>

            </tr>
        </thead>
    </table>
     <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="add()">新增</a>
    </div>

    <div id="dlg" class="easyui-dialog" style="width:600px;height:620px;padding:10px 10px;"
        closed="true" buttons="#dlg-buttons">
        <div class="ftitle">成员信息</div>
        <form id="fm" action="" method="post" enctype="multipart/form-data">
        <table class="detail">
            <tr>
                <div class="fitem">
                    <td>名字:</td>
                    <td><input class="sameWidth" name="name" /></td>
                </div>
            </tr>
            <tr>
                <div class="fitem">
                    <td>联系方式:</td>
                    <td><input class="sameWidth" name="contact"/></td>
                </div>
            </tr>
            <tr>
                <div class="fitem">
                    <td>专业:</td>
                    <td><input class="sameWidth" name="professional"/></td>
                </div>
            </tr>
            <tr>
                <div class="fitem">
                    <td>性格:</td>
                    <td><textarea class="sameWidth" name="pcharacter" row='30' cols='30'></textarea></td>
                </div>
            </tr>
            <tr>
                <div class="fitem">
                    <td>爱好:</td>
                    <td><textarea class="sameWidth" name="hobby" row='10' cols='30'></textarea></td>
                </div>
            </tr>
            <tr>
                <div class="fitem">

                  
                    <td>头像:</td>
                    <td>
                    <input type="text" class="sameWidth" name="txt" readonly /> 
                    <input type="file"  class="sameWidth" name="picture" onchange="txt.value=this.value" style="display:none">
                    <input type="button" value="上传头像" onclick="picture.click()" style="font-size:15px;font-family:'微软雅黑';" />
                    </td>
                </div>
            </tr>
        </table>
        </form>
        <div id="dlg-buttons">
         <a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="save()">保存</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">取消</a>
        </div>
    </div>

          </div>
 <div class="bs-docs-section">
             <p id="tools5"></p> 
<table id = "dg4" class="easyui-datagrid" title="技术分享" style="width:auto; text-align:center;"  rownumbers="true" toolbar="#toolbar" singleSelect="true" pagination="true" fitColumns="true" data-options="url:'<?php echo U(detail_json4);?>'">
    <thead>
         <tr>
            <th data-options="field:'id',width:80">序号</th>
            <th data-options="field:'name',width:80">名字</th>
            <th data-options="field:'content',width:80">内容</th>
            <th data-options="field:'link',width:80">链接</th>
            <th data-options="field:'other',width:80">其他</th>
            <th data-options="field:'picture',width:80">图片</th>
            <th data-options="field:'ids',width:80,formatter:rowformater4">操作</th>

            </tr>
        </thead>
    </table>
     <div id="toolbar4">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="add4()">新增</a>
    </div>

    <div id="dlg4" class="easyui-dialog" style="width:600px;height:620px;padding:10px 10px;"
        closed="true" buttons="#dlg4-buttons">
        <div class="ftitle">技术分享</div>
        <form id="fm4" action="" method="post" enctype="multipart/form-data">
        <table class="detail">
            <tr>
                <div class="fitem">
                    <td>名字:</td>
                    <td><input class="sameWidth" name="name" /></td>
                </div>
            </tr>
            <tr>
                <div class="fitem">
                    <td>内容:</td>
                    <td><input class="sameWidth" name="content"/></td>
                </div>
            </tr>
            <tr>
                <div class="fitem">
                    <td>链接:</td>
                    <td><input class="sameWidth" name="link"/></td>
                </div>
            </tr>
            
            <tr>
                <div class="fitem">
					 <td>图片:</td>
                    <td>
                    <input type="text" class="sameWidth" name="txt" readonly /> 
                    <input type="file"  class="sameWidth" name="picture" onchange="txt.value=this.value" style="display:none">
                    <input type="button" value="上传图片" onclick="picture.click()" style="font-size:15px;font-family:'微软雅黑';" />
                    </td>
                </div>
            </tr>
        </table>
        </form>
        <div id="dlg4-buttons">
         <a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="save4()">保存</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg4').dialog('close')">取消</a>
        </div>
    </div>

          </div>
          <div class="bs-docs-section">
             <p id="tools2"></p> 
<table id = "dg1" class="easyui-datagrid" title="产品列表" style="width:auto; text-align:center;"  rownumbers="true" toolbar="#toolbar1" singleSelect="true" pagination="true" fitColumns="true" data-options="url:'<?php echo U(detail_json1);?>'">
        <thead>
            <tr>
                <th data-options="field:'id',width:80">序号</th>
                <th data-options="field:'name',width:80">名字</th>
                <th data-options="field:'function',width:80">功能</th>
                <th data-options="field:'technology',width:80">技术支持</th>
                <th data-options="field:'introduction',width:80">介绍</th>
                <th data-options="field:'picture',width:80">图片</th>
                <th data-options="field:'ids',width:80,formatter:rowformater1">操作</th>
            </tr>
        </thead>
    </table>
     <div id="toolbar1">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="add1()">新增</a>
    </div>

    <div id="dlg1" class="easyui-dialog" style="width:600px;height:640px;padding:10px 10px; "
        closed="true" buttons="#dlg1-buttons">
    <div class="ftitle">产品信息</div>
    <form id="fm1" action="" method="post" enctype="multipart/form-data">
    <table class="detail">
        <tr>
            <div class="fitem">
                <td><label>名字:</label></td>
                <td><input class="sameWidth" name="name" type="text"/></td>
            </div>
        </tr>
        <tr>
            <div class="fitem">
                <td><label>功能:</label></td>
                <td><textarea  class="sameWidth" name="function" row='5' cols='30'></textarea></td>
            </div>
        </tr>
         <tr>
            <div class="fitem">
                <td><label>技术支持:</label></td>
                <td><textarea class="sameWidth" name="technology" row='5' cols='30'></textarea></td>
            </div>
        </tr>
        <tr>
            <div class="fitem">
                <td><label>介绍:</label></td>
                <td><textarea  class="sameWidth" name="introduction" row='5' cols='30'></textarea></td>
            </div>
        </tr>
        <tr>
            <div class="fitem">
                 <td><label>图片:</label></td>
                 <td>
                 <input type="text"  class="sameWidth" name="txt" readonly /> 
                 <input type="file" class="sameWidth" name="picture" onchange="txt.value=this.value" style="display:none">
                 <input class="upload"type="button" value="上传图片" onclick="picture.click()" style="font-size:15px;" />
                 </td>
             </div>
         </tr>
    </table>
    </form>
    <div id="dlg1-buttons">
    <a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="save1()">保存</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg1').dialog('close')">取消</a>
    </div>
</div>

          </div>

          <div class="bs-docs-section">
             <p id="tools3"></p> 
<table id = "dg2" class="easyui-datagrid" title="首页展示" style="width:auto; text-align:center;"  rownumbers="true" toolbar="#toolbar2" singleSelect="true" pagination="true" fitColumns="true" data-options="url:'<?php echo U(detail_json2);?>'">
        <thead>
            <tr>
                <th data-options="field:'id',width:80">序号</th>
                <th data-options="field:'name',width:80">名字</th>
                <th data-options="field:'introduction',width:80">说明</th>
                <th data-options="field:'picture',width:80">图片</th>
                <th data-options="field:'ids',width:80,formatter:rowformater2">操作</th>
            </tr>
        </thead>
    </table>
     <div id="toolbar2">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="add2()">新增</a>
    </div>

    <div id="dlg2" class="easyui-dialog" style="width:600px;height:640px;padding:10px 10px"
        closed="true" buttons="#dlg2-buttons">
    <div class="ftitle">产品信息</div>
    <form id="fm2" action="" method="post" enctype="multipart/form-data">
    <table class="detail">
        <tr>
            <div class="fitem">
                <td><label>名字:</label></td>
                <td><input class="sameWidth" name="name" type="text"/></td>
            </div>
        </tr>
        <tr>
            <div class="fitem">
                <td><label>说明:</label></td>
                <td><textarea class="sameWidth" name="introduction" row='5' cols='30'></textarea></td>
            </div>
        </tr>
        <tr>
            <div class="fitem">
                 <td><label>图片:</label></td>
                 <td>
                 <input type="text" class="sameWidth" name="txt" readonly /> 
                 <input type="file"  class="sameWidth"name="picture" onchange="txt.value=this.value" style="display:none">
                 <input class="upload"type="button" value="上传图片" onclick="picture.click()" style="font-size:15px;" />
                 </td>
             </div>
         </tr>
    </table>
    </form>
    <div id="dlg2-buttons">
    <a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="save2()">保存</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg2').dialog('close')">取消</a>
    </div>
</div>

          </div>

          <div class="bs-docs-section">
             <p id="tools4"></p> 
<table id = "dg3" class="easyui-datagrid" title="整体概况" style="width:auto; text-align:center; "  rownumbers="true" toolbar="#toolbar3" singleSelect="true" pagination="true" fitColumns="true" data-options="url:'<?php echo U(detail_json3);?>'">
        <thead>
            <tr>
                <th data-options="field:'id',width:80">序号</th>
                <th data-options="field:'name',width:80">名字</th>
                <th data-options="field:'history',width:80">发展</th>
                <th data-options="field:'now',width:80">现状</th>
                <th data-options="field:'future',width:80">规划</th>
                <th data-options="field:'others',width:80">其他</th>
                <th data-options="field:'ids',width:80,formatter:rowformater3">操作</th>
            </tr>
        </thead>
    </table>
     <div id="toolbar3">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="add3()">新增</a>
    </div>

    <div id="dlg3" class="easyui-dialog" style="width:600px;height:640px;padding:10px 10px;"
        closed="true" buttons="#dlg3-buttons">
    <div class="ftitle">产品信息</div>
    <form id="fm3" action="" method="post" enctype="multipart/form-data">
    <table class="detail">
        <tr>
            <div class="fitem">
                <td><label>名字:</label></td>
                <td><input  class="sameWidth"name="name" type="text"/></td>
            </div>
        </tr>
        <tr>
            <div class="fitem">
                <td><label>发展:</label></td>
                <td><textarea  class="sameWidth"name="history" row='5' cols='30'></textarea></td>
            </div>
        </tr>
         <tr>
            <div class="fitem">
                <td><label>现状:</label></td>
                <td><textarea class="sameWidth" name="now" row='5' cols='30'></textarea></td>
            </div>
        </tr>
        <tr>
            <div class="fitem">
                <td><label>规划:</label></td>
                <td><textarea  class="sameWidth"name="future" row='5' cols='30'></textarea></td>
            </div>
        </tr>
		<tr>
            <div class="fitem">
                <td><label>其他:</label></td>
                <td><textarea  class="sameWidth"name="others" row='5' cols='30'></textarea></td>
            </div>
        </tr>
    </table>
    </form>
    <div id="dlg3-buttons">
    <a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="save3()">保存</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg3').dialog('close')">取消</a>
    </div>
</div>

          </div>

        </div>
        <div class="col-md-3" id="coldiv"> 
            <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm" role="complementary">
              <ul class="nav bs-docs-sidenav" >
                <li >
                  <a href="#tools1">成员列表</a>
                </li>
                <li >
                  <a href="#tools2">产品列表</a>
                </li>
                <li >
                  <a href="#tools5">技术分享</a>
                </li>
                <li >
                  <a href="#tools3">首页展示</a>
                </li>
                 <li >
                  <a href="#tools4">工作室</a>
                </li>
                
              </ul>
              <a class="back-to-top" href="#top">返回顶部</a>
            </div>
        </div>
      </div>
  </div>





<footer class="bs-docs-footer" role="contentinfo">
  <div class="container">
    <p>地址：中国·大连经济技术开发区图强街321号　　大连理工大学软件学院　　邮编：116620</p>
    <p>&copy;版权所有：lab 　版本信息：网站版本1.0</p>
    <p>本项目源码受 <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a> 开源协议保护，文档受 <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a> 开源协议保护。</p>
  </div>
</footer>


<!--<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>


  <script src="/Public/bootstrap-3.3.0-dist/dist/js/bootstrap.min.js">
  </script>



  <script src="/Public/demo/js/admin.docs.min.js"></script>-->
</body>
</html>