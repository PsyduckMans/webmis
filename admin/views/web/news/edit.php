<form id="newsForm" action="<?php echo base_url('web_news/editData.html');?>" method="post">
<table class="table_add">
	<tbody id="newsBody0">
	<tr>
		<td class="right width">所属:</td>
		<td>
			<input type="text" id="menus_fid" name="fid" class="input" style="width: 60px;" value="<?php echo $edit->class;?>" />
			<span id="newsClass">&nbsp;</span>
		</td>
	</tr>
	<tr>
		<td class="right">标题:</td>
		<td>
			<input type="text" name="title" class="input" style="width: 80%;" datatype="*2-36" errormsg="标题至少2个字符,最多36个字符！" value="<?php echo $edit->title;?>" />
			<span class="Validform_checktip"></span>
		</td>
	</tr>
	<tr>
		<td class="right">来源:</td>
		<td>
			<input type="text" name="source" class="input" style="width: 30%;" value="<?php echo $edit->source;?>" datatype="*2-24" errormsg="来源至少2个字符,最多24个字符！" />
			&nbsp;&nbsp;作者:&nbsp;&nbsp;
			<input type="text" name="author" class="input" style="width: 30%;" value="<?php echo $edit->author;?>" datatype="*2-12" errormsg="作者至少2个字符,最多12个字符！"  />
			<span class="Validform_checktip"></span>
		</td>
	</tr>
	<tr>
		<td class="right">关键字:</td>
		<td>
			<input type="text" name="key" class="input" style="width: 70%;" value="<?php echo $edit->key;?>" />
			<span class="c666">&nbsp;&nbsp;&nbsp;&nbsp;如：WebMIS,灵创网络,PHP</span>
		</td>
	</tr>
	<tr>
		<td class="right">摘要:</td>
		<td><textarea name="summary" style="width: 95%; height: 180px;" maxlength="300"><?php echo $edit->summary;?></textarea><span>&nbsp;&nbsp;1~300字符</span></td>
	</tr>
	<tr>
		<td class="right">缩略图:</td>
		<td>
			<input type="text" name="img" class="input" style="width: 70%;" value="<?php echo $edit->img;?>" /><span class="c999">&nbsp;&nbsp;宽：110px 高：75px
		</td>
	</tr>
	<tr>
		<td class="right">发布时间:</td>
		<td>
			<input type="text" name="ctime" class="input" style="width: 130px;" value="<?php echo $edit->ctime;?>" />
		</td>
	</tr>
	</tbody>
	<tbody id="newsBody1" style="display: none;">
	<tr>
		<td colspan="2">
			<textarea id="tinymce" name="content"><?php echo $edit->content;?></textarea>
		</td>
	</tr>
	</tbody>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="hidden" id="newsID" name="id" value="" />
			<input type="submit" id="newsSub" value="编辑" />
		</td>
	</tr>
</table>
</form>